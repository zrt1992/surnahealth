<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;

use Carbon\Carbon;
use Google_Client;
use Google_Service_Calendar;
use Google_Service_Calendar_Event;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class MeetingController extends Controller
{
    function createMeeting(Request $request)
    {
      //  dd('asd');
        $client = new Google_Client();
        putenv('GOOGLE_APPLICATION_CREDENTIALS=' . storage_path('/service-account-credentials.json'));
        $client->useApplicationDefaultCredentials();
        $client->setApplicationName("test_calendar");
        $client->setScopes(\Google_Service_Calendar::CALENDAR);
        $client->setAccessType('offline');

        $service = new Google_Service_Calendar($client);

        $calendarList = $service->calendarList->listCalendarList();

//        dd($request->all());
        $start = strtotime($request->get('start_date'));
        $objDateTime = new \DateTime($request->get('start_date'));
        $isoDate = $objDateTime->format(\DateTime::ISO8601);
//        dd($isoDate);
        $event = new Google_Service_Calendar_Event(array(
            'summary' => $request->get('title'),
            'description' => $request->get('description'),
            'start' => array(
                'dateTime' => $isoDate,
                'timeZone' => '2024-10-31T10:00:00-07:00',
            ),
            'end' => array(
                'dateTime' => '2024-10-31T10:30:00-07:00',
                'timeZone' => 'America/Los_Angeles',
            )
        ));

        $calendarId = 'alraadu58@gmail.com';
        $event = $service->events->insert($calendarId, $event);
//        dd($event->htmlLink);

        return \redirect()->back();

    }
}
