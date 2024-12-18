<?php

namespace App\Http\Controllers\Doctor;

use App\Http\Controllers\Controller;
use App\Models\Appointment;
use App\Models\AppointmentRequests;
use Carbon\Carbon;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    public function index()
    {
        $doctor = auth()->user()->id;

        $appointments = Appointment::where('doctor_id', $doctor)->with('user')->get();
        $appointmentRejectedRequests = AppointmentRequests::where('status', 'rejected')->where('doctor_id', auth()->user()->id)->get();
        $appointmentCompleted = $appointments->filter(function ($appointment) {
            return $appointment->status === 'completed' || Carbon::parse($appointment->end_date)->isPast();
        });

        $upcommingCount=$appointments->count();
        $rejectedCount=$appointmentRejectedRequests->count();
        $completedCount=$appointmentCompleted->count();
        return view('appointments', get_defined_vars());
    }

    public function destroy($id)
    {
        // Use the model's static destroy method to delete by ID
        Appointment::destroy($id);

        return redirect()->back()->with('success', 'Appointment deleted successfully!');
    }
}
