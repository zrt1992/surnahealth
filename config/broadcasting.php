<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Default Broadcasting Driver
    |--------------------------------------------------------------------------
    |
    | Here you may specify the default broadcast driver that should be used by
    | your application. The available options are: "pusher", "redis", "log",
    | "null", etc. You may also use any of the above drivers in your routes.
    |
    */

    'default' => env('BROADCAST_DRIVER', 'pusher'),

    /*
    |--------------------------------------------------------------------------
    | Pusher Configuration
    |--------------------------------------------------------------------------
    |
    | Here you may configure your pusher broadcasting connection. You will need
    | to supply your Pusher credentials to enable broadcasting using Pusher.
    |
    */

    'connections' => [

        'pusher' => [
            'driver' => 'pusher',
            'key' => env('PUSHER_APP_KEY'),
            'secret' => env('PUSHER_APP_SECRET'),
            'app_id' => env('PUSHER_APP_ID'),
            'options' => [
                'cluster' => env('PUSHER_APP_CLUSTER'),
                'useTLS' => true,
            ],
        ],

        // Other connections (like Redis, etc.) can be configured here if needed.

    ],

];
