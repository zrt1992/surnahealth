<?php

namespace App\Services;

use Google\Client;
use Google\Service\Calendar;
use Illuminate\Support\Facades\Log;

class GoogleClientService
{
    public static function getClient()
    {
        $client = new Client();
        $client->setAuthConfig(storage_path('google-calendar.json'));
        $client->addScope(Calendar::CALENDAR);
        $client->setAccessType('offline');
        $client->setPrompt('select_account consent');
        $client->setRedirectUri(route('google.callback'));

        if (session()->has('google_access_token')) {
            $accessToken = session('google_access_token');
            $client->setAccessToken($accessToken);

            if ($client->isAccessTokenExpired()) {
                $refreshToken = $client->getRefreshToken();
                if ($refreshToken) {
                    $client->fetchAccessTokenWithRefreshToken($refreshToken);
                    session(['google_access_token' => $client->getAccessToken()]);
                } else {
                    session()->forget('google_access_token');
                    return redirect()->route('google.auth');
                }
            }
        }

        return $client;
    }
    

    public static function createGoogleMeetEvent($title, $description, $startTime, $endTime)
    {
      
        $client = self::getClient();
        $client->setAccessToken(session('google_access_token'));

        $calendarService = new Calendar($client);
       
        $event = new Calendar\Event([
            'summary' => $title,
            'description' => $description,
            'start' => [
                'dateTime' => $startTime,
                'timeZone' => 'America/Los_Angeles',
            ],
            'end' => [
                'dateTime' => $endTime,
                'timeZone' => 'America/Los_Angeles',
            ],
            'conferenceData' => [
                'createRequest' => [
                    'conferenceSolutionKey' => ['type' => 'hangoutsMeet'],
                    'requestId' => 'some-random-id'
                ],
            ]
        ]);
      
        $event = $calendarService->events->insert('primary', $event, ['conferenceDataVersion' => 1]);
        return $event;
    }

    // public static function addAttendee($event, $email)
    // {
    //     $event->attendees = array_merge($event->attendees ?? [], [
    //         ['email' => $email]
    //     ]);

    //     $calendarService = new Calendar(self::getClient());
    //     return $calendarService->events->patch('primary', $event->id, $event);
    // }
    public static function addAttendee($event, $email)
{
    $event->attendees = array_merge($event->attendees ?? [], [
        ['email' => $email]
    ]);
  
    $calendarService = new Calendar(self::getClient());
 
    // Use 'sendUpdates' to ensure notifications are sent to all attendees
    $response = $calendarService->events->patch('primary', $event->id, $event, [
        'sendUpdates' => 'all' // Ensures email notifications are sent to attendees
    ]);
   
    return $response;
}

    public static function getClientDynamically($authMail)
    {
        $client = new Client();
        $client->setAuthConfig(storage_path('google-calendar.json')); // Ensure this path is correct
        $client->addScope(Calendar::CALENDAR);
        $client->setSubject($authMail); // Ensure authMail is valid only if using domain-wide delegation
    
        if ($client->isAccessTokenExpired()) {
            // Refresh the token or handle expiration
            $refreshToken = $client->getRefreshToken();
            if ($refreshToken) {
                $client->fetchAccessTokenWithRefreshToken($refreshToken);
            } else {
                throw new \Exception('Token has expired and cannot be refreshed.');
            }
        }
    
        return $client;
    }
    
}