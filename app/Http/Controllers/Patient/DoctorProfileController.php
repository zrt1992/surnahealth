<?php

namespace App\Http\Controllers\Patient;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class DoctorProfileController extends Controller
{
    public function index()
    {
        $allDoctors =  User::role('doctor')->get();
        return view('doctor-profile-2', get_defined_vars());
    }

    public function show($id = null)
    {
        $doctor =  User::with('doctorSpecialization','doctorEducation','doctorExperiences','doctorAwards','doctorClinic.gallery','doctorBusinessHour','availableTimings','appointmentRequests')->find($id);
        
        // dd($doctor);
        return view('doctor-profile-2', get_defined_vars());
    }
}
