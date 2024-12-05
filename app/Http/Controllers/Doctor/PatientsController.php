<?php

namespace App\Http\Controllers\Doctor;

use App\Http\Controllers\Controller;
use App\Models\Appointment;
use App\Models\User;
use Illuminate\Http\Request;

class PatientsController extends Controller
{
    public function index()
{
    $doctorId = auth()->id(); // Get the logged-in doctor's ID
    $appointments = User::whereHas('appointments', function ($query) use ($doctorId) {
        $query->where('doctor_id', $doctorId);
    })->with(['appointments' => function ($query) use ($doctorId) {
        $query->where('doctor_id', $doctorId); // Fetch only relevant appointments
    }])->get();

   
    return view('my-patients', compact('appointments'));
}

public function patientProfile($id = null)
{
    $patient =  User::with('appointments.doctor','appointments.slot','medicalDetails')->find($id);
        
    return view('doctor.patient-profile', get_defined_vars());
}

}
