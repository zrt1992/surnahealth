<?php

namespace App\Http\Controllers\Doctor;

use App\Http\Controllers\Controller;
use App\Interfaces\BookingRepositoryInterface;
use App\Models\Appointment;
use App\Models\AppointmentRequests;
use App\Models\User;
use App\Services\GoogleClientService;
use Carbon\Carbon;
use Illuminate\Http\Request;

class DoctorBookingController extends Controller
{
    private BookingRepositoryInterface $bookingRepository;

    // Inject the bookingRepository
    public function __construct(BookingRepositoryInterface $bookingRepository)
    {
        $this->bookingRepository = $bookingRepository;
    }

    public function index()
    {
        $data = $this->bookingRepository->getDoctorAppointmentRequests();
        // dd(session()->all());
        return view('doctor-request', get_defined_vars());
    }

    public function store(Request $request)
    {
        // Validate incoming request
        $validated = $request->validate([
            'doctor_id' => 'required',
            'slot_id' => 'required|exists:available_timmings,id',
            'booking_date' => 'required|date',
            'status' => 'nullable|string',
        ]);

        $validated['user_id'] = getAuthUser()->id;
        $data = $this->bookingRepository->create($validated);

        // Return response (can redirect or send back success message)
        return back()->with('success', $data);
    }

    public function accept($id)
    {

        $data = $this->bookingRepository->accept($id);
        $appointment = AppointmentRequests::with('user', 'doctor', 'slot')->find($id);

        $client = GoogleClientService::getClient();

        // Remove the "PM" or "AM" suffix if the time is already in 24-hour format
        $startTime = date("H:i:s", strtotime(preg_replace('/\s[AP]M$/i', '', $appointment->slot->start_time)));
        $endTime = date("H:i:s", strtotime(preg_replace('/\s[AP]M$/i', '', $appointment->slot->end_time)));

        $date = Carbon::today()->toDateString();

        $startDateTime = Carbon::parse("$appointment->booking_date $startTime", 'America/Los_Angeles')->format('Y-m-d\TH:i:sP');
        $endDateTime = Carbon::parse("$appointment->booking_date $endTime", 'America/Los_Angeles')->format('Y-m-d\TH:i:sP');

        $event = GoogleClientService::createGoogleMeetEvent(
            $appointment->title ?? 'No title provided.',
            $appointment->description ?? 'No description provided.',
            $startDateTime,
            $endDateTime
        );
        // dd($appointment->user->email);

        $attendee = GoogleClientService::addAttendee($event, $appointment->user->email);
        // Convert to MySQL-compatible format
// dd($attendee);
        
        $startDateTimeForDb = Carbon::parse("$appointment->booking_date $startTime")->format('Y-m-d H:i:s');
        $endDateTimeForDb = Carbon::parse("$appointment->booking_date $endTime")->format('Y-m-d H:i:s');

        // Save to the database
        $appointment = Appointment::create([
            'title' => $appointment->title ?? 'No title provided.',
            'description' => $appointment->description ?? 'No description provided.',
            'start_date' => $startDateTimeForDb,
            'end_date' => $endDateTimeForDb,
            'email' => $appointment->user->email,
            'google_meet_link' => $event->getHangoutLink(),
            'doctor_id' => getAuthUser()->id,
            'user_id' => $appointment->user->id,
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Appointment accepted and Google Meet scheduled successfully',
            'google_meet_link' => $event->getHangoutLink()
        ]);
    }


    public function reject(Request $request)
    {
        $data = $request->all();
        $data = $this->bookingRepository->reject($data);
        return back()->with(['success', 'data' => $data]);
        // return response()->json(['success' => true, 'message' => 'Appointment rejected successfully']);
    }
}
