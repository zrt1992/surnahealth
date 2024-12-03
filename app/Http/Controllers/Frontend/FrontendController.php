<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class FrontendController extends Controller
{

    public function search()
    {
        $allDoctors =  User::role('doctor')->with('doctorSpecialization','doctorEducation','doctorClinic.gallery','availableTimings','appointmentRequests')->get();
      
        return view('front-end.search', get_defined_vars());
    }

    public function doctorProfile($id = null)
    {
        $doctor =  User::with('doctorSpecialization','doctorEducation','doctorExperiences','doctorAwards','doctorClinic.gallery','doctorBusinessHour','availableTimings','appointmentRequests')->find($id);
        return view('front-end.doctor-profile-2', get_defined_vars());
    }

    public function showBookingForm($doctorId = null)
    {
       
        // Fetch doctor and their available timings
        $doctor = User::with('availableTimings')->find($doctorId);
        $currentDate = Carbon::now()->format('d F Y');  // e.g., "11 November 2023"
        $currentDay = Carbon::now()->format('l'); 
        return view('front-end.booking',get_defined_vars());
    }

    public function blogDetails()
    {
        return view('front-end.blog-details', get_defined_vars());
    }
}
