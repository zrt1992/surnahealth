<?php

namespace App\Http\Controllers\Patient;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PatientChatController extends Controller
{
    public function index(Request $request)
    {
        return view('patient.patient-chat');
    }
}
