<?php

namespace App\Http\Controllers;

use App\Services\GoogleClientService;
use Illuminate\Http\Request;

class GoogleMeetController extends Controller
{
    public function createMeeting()
    {
        $event = GoogleClientService::createGoogleMeetEvent(
            'Laravel Meeting',
            'Discuss project requirements.',
            '2024-11-06T10:00:00-07:00',
            '2024-11-06T11:00:00-07:00'
        );

        return view('meeting-created', ['event' => $event]);
    }
}
