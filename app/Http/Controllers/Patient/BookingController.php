<?php

namespace App\Http\Controllers\Patient;

use App\Http\Controllers\Controller;
use App\Interfaces\BookingRepositoryInterface;
use App\Mail\Doctor\BookingAppointmentEmail;
use App\Mail\Doctor\RegistrationEmail;
use App\Models\Appointment;
use App\Models\AppointmentRequests;
use App\Models\PatientAppoitmentPreferences;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class BookingController extends Controller
{
    private BookingRepositoryInterface $bookingRepository;

    // Inject the bookingRepository
    public function __construct(BookingRepositoryInterface $bookingRepository)
    {
        $this->bookingRepository = $bookingRepository;
    }
    public function showBookingForm($doctorId = null,$appoitmentReqId = null)
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

        $validated['user_id'] = getAuthUser()->id;
        if($request->appointment_req_id == null){
            $data = $this->bookingRepository->create($validated);
        }else{
            $data = $this->bookingRepository->update($request->appointment_req_id,$validated);
        }
      
        if ($data) {
            $doctor = User::where('id', $request->doctor_id)->first();
            $emailData = [
                'subject' => 'Welcome to Our Platform',
                'greeting' => 'Hello ' . $doctor->name,
                'body' => 'You have new Booking Request!',
                'actionText' => 'Appointment Request',
                'actionURL' => url('/doctor-request'),
                'thanks' => 'Thank you for choosing us!',
            ];
            Mail::to($doctor->email)->send(new BookingAppointmentEmail($emailData));
        }
        // Return response (can redirect or send back success message)
        return back()->with('success', 'Your booking was successful!');
    }

    public function getPatientAppointments()
    {
        $data = $this->bookingRepository->getPatientAppointments();
       
        $appointmentRequests = AppointmentRequests::where(function ($query) {
            $query->where('status', '!=', 'rejected')->orWhereNull('status');
        })->where('user_id', auth()->user()->id)->get();
        
        $appointmentRejectedRequests = AppointmentRequests::where('status', 'rejected')->where('user_id', auth()->user()->id)->get();
        $appointmentCompleted = $data->filter(function ($appointment) {
            return $appointment->status === 'completed' || Carbon::parse($appointment->end_date)->isPast();
        });

        $upcommingCount=$data->count() + $appointmentRequests->count();
        $rejectedCount=$appointmentRejectedRequests->count();
        $completedCount=$appointmentCompleted->count();

        $appointmentPreferences = PatientAppoitmentPreferences::where('user_id',auth()->user()->id)->first();
        
        return view('patient.patient-appointments', get_defined_vars());
    }

    public function getPatientAppointmentsGrid()
    {
        $data = $this->bookingRepository->getPatientAppointments();
        $appointmentRequests = AppointmentRequests::where('user_id', auth()->user()->id)->get();

        return view('patient.patient-appointments-grid', get_defined_vars());
    }

    public function getPatientCancelledAppointments($id)
    {
        $appointmentCancelledRequest = AppointmentRequests::with('doctor','slot')->find($id);

        return view('patient.patient-cancelled-appointment',get_defined_vars());
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
}
