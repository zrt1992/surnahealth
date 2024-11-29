<?php

namespace App\Http\Controllers\Patient;

use App\Http\Controllers\Controller;
use App\Interfaces\BookingRepositoryInterface;
use App\Models\Appointment;
use App\Models\AppointmentRequests;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    private BookingRepositoryInterface $bookingRepository;

    // Inject the bookingRepository
    public function __construct(BookingRepositoryInterface $bookingRepository)
    {
        $this->bookingRepository = $bookingRepository;
    }
    public function showBookingForm($doctorId = null)
    {
       
        // Fetch doctor and their available timings
        $doctor = User::with('availableTimings')->find($doctorId);
        $currentDate = Carbon::now()->format('d F Y');  // e.g., "11 November 2023"
        $currentDay = Carbon::now()->format('l'); 
        return view('booking',get_defined_vars());
    }

    public function index()
    {
        $data = $this->bookingRepository->all();
        return view('doctor-profile-settings',get_defined_vars());
    }

    public function store(Request $request)
    {
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
        $data = $this->bookingRepository->create($validated);
        
        // Return response (can redirect or send back success message)
       return back()->with('success', 'Your booking was successful!');
    }

    public function getPatientAppointments()
    {
        $data = $this->bookingRepository->getPatientAppointments();
        return view('patient.patient-appointments',get_defined_vars());
    }
}
