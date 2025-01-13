<?php

namespace App\Http\Controllers\Patient;

use App\Http\Controllers\Controller;
use App\Interfaces\BookingRepositoryInterface;
use App\Mail\Doctor\BookingAppointmentEmail;
use App\Mail\Doctor\RegistrationEmail;
use App\Models\Appointment;
use App\Models\AppointmentRequests;
use App\Models\AvailableTimming;
use App\Models\PatientAppoitmentPreferences;
use App\Models\User;
use App\Services\StripeService;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Stripe\Stripe;
use Stripe\Checkout\Session;

class BookingController extends Controller
{
    private BookingRepositoryInterface $bookingRepository;
    protected $stripeService;

    // Inject the bookingRepository
    public function __construct(BookingRepositoryInterface $bookingRepository, StripeService $stripeService)
    {
        $this->bookingRepository = $bookingRepository;
        $this->stripeService = $stripeService;
    }
    public function showBookingForm($doctorId = null, $appoitmentReqId = null)
    {

        // Fetch doctor and their available timings
        $doctor = User::with('availableTimings')->find($doctorId);
        $currentDate = Carbon::now()->format('d F Y');  // e.g., "11 November 2023"
        $currentDay = Carbon::now()->format('l');
        return view('booking', get_defined_vars());
    }

    public function index()
    {
        $data = $this->bookingRepository->all();
        return view('doctor-profile-settings', get_defined_vars());
    }



    public function getPatientAppointments(Request $request)
    {
        $data = $this->bookingRepository->getPatientAppointments($request);

        $appointmentRequests = AppointmentRequests::where(function ($query) {
            $query->where('status', '!=', 'rejected')->orWhereNull('status');
        })->where('user_id', auth()->user()->id)->get();

        $appointmentRejectedRequests = AppointmentRequests::where('status', 'rejected')->where('user_id', auth()->user()->id)->get();
        $appointmentCompleted = $data->filter(function ($appointment) {
            return $appointment->status === 'completed' || Carbon::parse($appointment->end_date)->isPast();
        });

        $upcommingCount = $data->count() + $appointmentRequests->count();
        $rejectedCount = $appointmentRejectedRequests->count();
        $completedCount = $appointmentCompleted->count();

        $appointmentPreferences = PatientAppoitmentPreferences::where('user_id', auth()->user()->id)->first();

        return view('patient.patient-appointments', get_defined_vars());
    }

    public function getPatientAppointmentsGrid(Request $request)
    {
        $data = $this->bookingRepository->getPatientAppointments($request);
        $appointmentRequests = AppointmentRequests::where('user_id', auth()->user()->id)->get();

        return view('patient.patient-appointments-grid', get_defined_vars());
    }

    public function getPatientCancelledAppointments($id)
    {
        $appointmentCancelledRequest = AppointmentRequests::with('doctor', 'slot')->find($id);

        return view('patient.patient-cancelled-appointment', get_defined_vars());
    }

    public function updatePreferences(Request $request,  $preferencesId = null)
    {
        $appointmentPreferences = [
            'user_id' => auth()->user()->id,
            'preferred_doctor' => $request->preferred_doctor,
            'video_call' => $request->video_call,
            'audio_call' => $request->audio_call,
            'chat' => $request->chat,
            'preferred_time' => $request->preferred_time,
        ];

        if ($preferencesId) {
            PatientAppoitmentPreferences::find($preferencesId)->update($appointmentPreferences);
        } else {
            PatientAppoitmentPreferences::create($appointmentPreferences);
        }

        return redirect()->route('patient-appointments')->with('success', 'Appointment preferences saved successfully.');
    }

    public function store(Request $request)
    {
        // dd($request);
        if (!auth()->check()) {

            return redirect()->route('login')->with('error', 'You must be logged in to make a booking.');
        }

        $validated = $request->validate([
            'doctor_id' => 'required',
            'slot_id' => 'required|exists:available_timmings,id',
            'booking_date' => 'required|date',
            'status' => 'nullable|string',
        ]);

        if ($request->appointment_req_id) {
            $reshedule = $this->bookingRepository->update($request->appointment_req_id, $validated);
            if ($reshedule) {
                return back()->with('success', 'Your appointment is resheduled.');
            }
        }

        $checkAppointmentRequest = AppointmentRequests::where('user_id', auth()->user()->id)->where('doctor_id', $request->doctor_id)->where('status', '!=', 'rejected')->first();
        $checkAppointment = Appointment::where('user_id', auth()->user()->id)->where('doctor_id', $request->doctor_id)->first();

        if ($checkAppointmentRequest || $checkAppointment) {
            return back()->with('error', 'You already have booked appointments with this doctor.');
        }

        $bookingData = $validated;
        session()->put('booking_data', $bookingData);
        return redirect()->route('patient-checkout');
    }

    public function checkout()
    {
        $storedBookingData = session('booking_data');

        $doctor = User::find($storedBookingData['doctor_id']);
        // dd($storedBookingData);
        $slot = AvailableTimming::find($storedBookingData['slot_id']);


        return view('patient.patient-checkout', get_defined_vars());
    }

    public function createCheckoutSession(Request $request)
    {
        $storedBookingData = session('booking_data');
        if (!$storedBookingData) {
            return response()->json(['error' => 'Booking data not found.'], 400);
        }

        $validated = $request->validate([
            'payment_amount' => 'required|numeric|min:1',
            'appointment_req_id' => 'nullable|exists:appointments,id',
        ]);

        $amount = $validated['payment_amount']; // Amount in cents
        $successUrl = url('patient/booking-success') . '?session_id={CHECKOUT_SESSION_ID}';
        $cancelUrl = url('patient/patient-checkout');

        $metaData = [
            'user_id' => auth()->id(),
            'doctor_id' => $storedBookingData['doctor_id'],
            'slot_id' => $storedBookingData['slot_id'],
            'booking_date' => $storedBookingData['booking_date'],
            'status' => 'pending',
        ];
        try {
            // Create Stripe session
            $sessionId = $this->stripeService->createCheckoutSession(
                'Doctor Appointment',
                $amount,
                $successUrl,
                $cancelUrl,
                auth()->user()->email,
                $metaData
            );
            return response()->json(['id' => $sessionId]);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    public function bookingSuccessModal(Request $request)
    {
        $sessionId = $request->query('session_id');
        
 if (!$sessionId) {
            return redirect('/')->with('error', 'Payment failed or canceled.');
        }
        try {

            $session = Session::retrieve($sessionId);

            if ($session->payment_status !== 'paid') {
                return redirect('/')->with('error', 'Payment not completed. Please try again.');
            }

            $metadata = $session->metadata;
            $validated = [
                'user_id' => $metadata->user_id,
                'doctor_id' => $metadata->doctor_id,
                'slot_id' => $metadata->slot_id,
                'booking_date' => $metadata->booking_date,
                'status' => 'pending',
            ];

            if (!$request->appointment_req_id) {
                $data = $this->bookingRepository->create($validated);
            } else {
                $data = $this->bookingRepository->update($request->appointment_req_id, $validated);
            }

            if ($data) {
                $doctor = User::findOrFail($metadata->doctor_id);

                $emailData = [
                    'subject' => 'New Booking Request',
                    'greeting' => 'Hello ' . $doctor->name,
                    'body' => 'You have received a new booking request!',
                    'actionText' => 'View Request',
                    'actionURL' => url('/doctor-request'),
                    'thanks' => 'Thank you for using our platform!',
                ];

                Mail::to($doctor->email)->send(new BookingAppointmentEmail($emailData));
            }

            return view('patient.patient-booking-success', get_defined_vars())->with('success', 'Payment successful! Your appointment is confirmed.');
        } catch (\Exception $e) {
            return redirect('/')->with('error', 'Failed to confirm booking. ' . $e->getMessage());
        }
       
    }
}
