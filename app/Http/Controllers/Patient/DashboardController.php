<?php

namespace App\Http\Controllers\Patient;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //patient-dashboard
    /**
     * index/landing dashboard page of patient
     */
    public function index(Request $request)
    {
        return view('patient.patient-dashboard');
    }
}
