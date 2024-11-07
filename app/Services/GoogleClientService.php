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

        // Set redirect URI (for authorization callbacks)
        $client->setRedirectUri(route('google.callback'));

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
            'timeZone' => 'America/Los_Angeles', // Adjust to your timezone
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

}
