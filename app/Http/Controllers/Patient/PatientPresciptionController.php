<?php

namespace App\Http\Controllers\Patient;

use App\Http\Controllers\Controller;
use App\Models\Prescription;
use App\Models\User;
use Illuminate\Http\Request;

class PatientPresciptionController extends Controller
{
    public function index()
    {
        $prescriptions =  Prescription::where('user_id',auth()->user()->id)->with('user','doctor')->paginate(10);
           
        return view('patient.patient-prescriptions', get_defined_vars());
    }
}
