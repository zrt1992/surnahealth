<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Services\GoogleClientService;
use Carbon\Carbon;
use Illuminate\Http\Request;

class GoogleMeetController extends Controller
{


    public function showScheduleForm()
    {
        // Display the meeting scheduling form
        return view('google-meet.schedule-meeting');
    }

    public function createMeeting(Request $request)
    {

        $client = GoogleClientService::getClient();

        if (!$client->getAccessToken() || $client->isAccessTokenExpired()) {
            // If OAuth token is not available or expired, redirect to the Google auth route
            return redirect()->route('google.auth');
        }
        // Validation for the incoming request
        $request->validate([
            'title' => 'required|string|max:255',
            'email' => 'required',
            'start_date' => 'required|date_format:Y-m-d\TH:i',
            'end_date' => 'required|date_format:Y-m-d\TH:i|after_or_equal:start_date',
        ]);
   
        $doctorId = auth()->user()->id;
       
        if (!$doctorId) {
            // Optionally, you can handle the case where the authenticated user does not have a doctor_id
            return response()->json(['error' => 'Authenticated user is not associated with a doctor'], 403);
        }
    
        $startTime = $request->start_date . ':00-07:00';
        $endTime = $request->end_date . ':00-07:00';
    
        $event = GoogleClientService::createGoogleMeetEvent(
            $request->title,
            $request->description ?? 'No description provided.',
            $startTime,
            $endTime
        );
       
        GoogleClientService::addAttendee($event, $request->email);


        $startTimeUtc = Carbon::parse($startTime)->setTimezone('UTC');
        $endTimeUtc = Carbon::parse($endTime)->setTimezone('UTC');

        $appointment = Appointment::create([
            'title' => $request->title,
            'description' => $request->description ?? 'No description provided.',
            'start_date' => $startTimeUtc->toDateTimeString(),  
            'end_date' => $endTimeUtc->toDateTimeString(),
            'email' => $request->email,
            'google_meet_link' => $event->getHangoutLink(),
            'doctor_id' => $doctorId,
        ]);

        $doctor = auth()->user()->id;
        $appointments = Appointment::where('doctor_id', $doctor)->get();
        // Return a view with the created event data
        return redirect()->route('appointments');
        // return view('appointments', ['event' => $event, 'appointments' => $appointments]);
    }

    public function checkGoogleToken()
{
    $requiresAuth = !session()->has('google_access_token') || session('google_access_token') === 'null';
    return response()->json(['requiresAuth' => $requiresAuth]);
}

}
