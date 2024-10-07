<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class MeetingController extends Controller
{
    function createMeeting (Request $request)
    {
        $client = new Google_Client();
    putenv('GOOGLE_APPLICATION_CREDENTIALS='.storage_path('/service-account-credentials.json'));
    $client->useApplicationDefaultCredentials();
    $client->setApplicationName("test_calendar");
    $client->setScopes(Google_Service_Calendar::CALENDAR);
    $client->setAccessType('offline');

    $service = new Google_Service_Calendar($client);

    $calendarList = $service->calendarList->listCalendarList();
    $event = new Google_Service_Calendar_Event(array(
        'summary' => 'Test Event',
        'description' => 'Test Event',
        'start' => array(
            'dateTime' => '2024-10-06T09:00:00-07:00'
        ),
        'end' => array(
            'dateTime' => '2024-10-06T09:00:00-07:00'
        )
    ));

    $calendarId = 'alraadu58@gmail.com';
    $event = $service->events->insert($calendarId, $event);
    dd($event);

    }
}
