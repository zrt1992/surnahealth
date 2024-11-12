<?php

namespace App\Http\Controllers\Doctor;

use App\Http\Controllers\Controller;
use App\Interfaces\BookingRepositoryInterface;
use App\Models\AppointmentRequests;
use App\Models\User;
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
        return back()->with(['success', 'data' => 'Appointment accepted successfully']);
    }

    public function reject(Request $request)
    {
        $data = $request->all();
        $data = $this->bookingRepository->reject($data);
        return back()->with(['success', 'data' => $data]);
        // return response()->json(['success' => true, 'message' => 'Appointment rejected successfully']);
    }
}
