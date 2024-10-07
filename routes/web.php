<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    // dd(\Illuminate\Support\Facades\Auth::user());

//    $client = new Google_Client();
////The json file you got after creating the service account
//    putenv('GOOGLE_APPLICATION_CREDENTIALS='.storage_path('/service-account-credentials.json'));
//    $client->useApplicationDefaultCredentials();
//    $client->setApplicationName("test_calendar");
//    $client->setScopes(Google_Service_Calendar::CALENDAR);
//    $client->setAccessType('offline');
//
//    $service = new Google_Service_Calendar($client);
//
//    $calendarList = $service->calendarList->listCalendarList();
//    $event = new Google_Service_Calendar_Event(array(
//        'summary' => 'Test Event',
//        'description' => 'Test Event',
//        'start' => array(
//            'dateTime' => '2024-10-06T09:00:00-07:00'
//        ),
//        'end' => array(
//            'dateTime' => '2024-10-06T09:00:00-07:00'
//        )
//    ));
//
//    $calendarId = 'alraadu58@gmail.com';
//    $event = $service->events->insert($calendarId, $event);
//    dd($event);

    // dd(storage_path('app/google-calendar/service-account-credentials.json'));
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
