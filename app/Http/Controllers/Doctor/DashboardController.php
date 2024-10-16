<?php

namespace App\Http\Controllers\Doctor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * landing page of doctor dashboard
     */
    public function index(Request $request)
    {
        return view('doctor.doctor-dashboard');
    }
}
