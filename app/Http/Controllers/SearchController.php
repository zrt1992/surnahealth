<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function index()
    {
        $allDoctors =  User::role('doctor')->with('doctorSpecialization','doctorEducation','doctorClinic.gallery','availableTimings','appointmentRequests')->get();
        // dd($allDoctors);
        return view('search', get_defined_vars());
    }

    public function show($id = null)
    {
        $doctor =  User::with('doctorSpecialization','doctorEducation','availableTimings','appointmentRequests')->find($id);
        // dd($doctor);
        return view('doctor-profile-2', get_defined_vars());
    }
}
