<?php

namespace App\Services;

use Google\Client;
use Google\Service\Calendar;

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

    public static function addAttendee($event, $email)
    {
        $event->attendees = array_merge($event->attendees ?? [], [
            ['email' => $email]
        ]);

        $calendarService = new Calendar(self::getClient());
        return $calendarService->events->patch('primary', $event->id, $event);
    }
}