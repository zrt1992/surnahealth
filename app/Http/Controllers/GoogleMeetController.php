<?php

namespace App\Http\Controllers;

use App\Services\GoogleClientService;
use Illuminate\Http\Request;

class GoogleMeetController extends Controller
{
    // public function createMeeting()
    // {
    //     $event = GoogleClientService::createGoogleMeetEvent(
    //         'Laravel Meeting',
    //         'Discuss project requirements.',
    //         '2024-11-06T10:00:00-07:00',
    //         '2024-11-06T11:00:00-07:00'
    //     );

    //     return view('meeting-created', ['event' => $event]);
    // }

    public function showScheduleForm()
    {
        // Display the meeting scheduling form
        return view('google-meet.schedule-meeting');
    }

    public function createMeeting(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'email' => 'required|email',
            'date' => 'required|date',
            'time' => 'required',
        ]);

        // Combine date and time for Google API
        $startTime = $request->date . 'T' . $request->time . ':00-07:00';
        $endTime = date('c', strtotime($startTime . ' +1 hour')); // Assuming a 1-hour meeting duration

        // Create the Google Meet event
        $event = GoogleClientService::createGoogleMeetEvent(
            $request->title,
            'Meeting description goes here.',
            $startTime,
            $endTime
        );

        // Add attendee's email
        GoogleClientService::addAttendee($event, $request->email);

        return view('meeting-created', ['event' => $event]);
    }
}
