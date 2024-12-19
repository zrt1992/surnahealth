<?php

namespace App\Http\Controllers\Patient;

use App\Http\Controllers\Controller;
use App\Models\MedicalDetail;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //patient-dashboard
    /**
     * index/landing dashboard page of patient
     */
    public function index(Request $request)
    {
        $medicalDetail = MedicalDetail::where('user_id',auth()->user()->id)->first();
        return view('patient.patient-dashboard',get_defined_vars());
    }
}
