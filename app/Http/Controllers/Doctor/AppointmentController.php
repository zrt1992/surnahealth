<?php

namespace App\Http\Controllers\Doctor;

use App\Http\Controllers\Controller;
use App\Models\Appointment;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    public function index()
    {
        $doctor = auth()->user()->id;

        $appointments = Appointment::where('doctor_id', $doctor)->get();
        return view('appointments', get_defined_vars());
    }

    public function destroy($id)
    {
        // Use the model's static destroy method to delete by ID
        Appointment::destroy($id);

        return redirect()->back()->with('success', 'Appointment deleted successfully!');
    }
}
