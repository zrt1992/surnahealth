<?php

namespace App\Http\Controllers\Patient;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function showBookingForm($doctorId)
    {
        // Fetch doctor and their available timings
        $doctor = User::with('availableTimings')->findOrFail($doctorId);
    
        return view('booking', compact('doctor'));
    }
}
