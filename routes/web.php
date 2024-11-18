<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\Doctor\AppointmentController;
use App\Http\Controllers\Doctor\AvailableTimmingController;
use App\Http\Controllers\Doctor\DashboardController;
use App\Http\Controllers\Doctor\DoctorBookingController;
use App\Http\Controllers\Doctor\DoctorController;
use App\Http\Controllers\GoogleMeetController;
use App\Http\Controllers\Patient\BookingController;
use App\Http\Controllers\Patient\DashboardController as PatientDashboard;
use App\Http\Controllers\Patient\DependantController;
use App\Http\Controllers\Patient\FavoFavouritesController;
use App\Http\Controllers\Patient\FavouritesController;
use App\Http\Controllers\Patient\MedicalDetailController;
use App\Http\Controllers\Patient\MedicalRecordController;
use App\Http\Controllers\Patient\PatientProfileSettingController;
use App\Http\Controllers\ProfileController;
use App\Models\AvailableTimming;
use App\Services\GoogleClientService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    //  dd(\Illuminate\Support\Facades\Auth::user()->getRoleNames()->first());
    //    dd(\Illuminate\Support\Facades\Auth::logout());
    //    dd(\Illuminate\Support\Facades\Auth::check());
    //    \Illuminate\Support\Facades\Session::flush();
    return view('index');

    // dd(\Illuminate\Support\Facades\Auth::user());

    $client = new Google_Client();
    //The json file you got after creating the service account
    putenv('GOOGLE_APPLICATION_CREDENTIALS=' . storage_path('/service-account-credentials.json'));
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

    // dd(storage_path('app/google-calendar/service-account-credentials.json'));
})->name('home-page');

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    //    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    //    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});




/**
 * doctors dashboard authenticated routes
 */

Route::middleware(['auth', 'role:doctor'])->prefix('doctor')->group(function () {

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('doctor-dashboard');
});



/**
 * Patient dashboard authenticated routes
 */

Route::middleware(['auth', 'role:patient'])->prefix('patient')->group(function () {

    Route::get('/dashboard', [PatientDashboard::class, 'index'])->name('patient-dashboard');
    Route::get('/patient-details', function () {
        return view('patient.patient-details');
    })->name('patient-details');
    Route::get('/patient-accounts', [AccountController::class, 'index'])->name('patient-accounts');
    Route::resource('/patient-account', AccountController::class);
    Route::get('/patient-account-default/{id}', [AccountController::class, 'setDefault'])->name('patient-account-default');


    Route::get('/patient-dependant-details', function () {
        return view('patient.patient-dependant-details');
    })->name('patient-dependant-details');
    Route::get('/patient-details', function () {
        return view('patient.patient-details');
    })->name('patient-details');
    Route::get('/patient-email', function () {
        return view('patient.patient-email');
    })->name('patient-email');
    Route::get('/patient-family-details', function () {
        return view('patient.patient-family-details');
    })->name('patient-family-details');
    Route::get('/patient-other-details', function () {
        return view('patient.patient-other-details');
    })->name('patient-other-details');
    Route::get('/patient-Personalize', function () {
        return view('patient.patient-Personalize');
    })->name('patient-Personalize');
    Route::get('/patient-profile', function () {
        return view('patient.patient-profile');
    })->name('patient-profile');
    Route::get('/patient-register-step1', function () {
        return view('patient.patient-register-step1');
    })->name('patient-register-step1');
    Route::get('/patient-register-step2', function () {
        return view('patient.patient-register-step2');
    })->name('patient-register-step2');
    Route::get('/patient-register-step3', function () {
        return view('patient.patient-register-step3');
    })->name('patient-register-step3');
    Route::get('/patient-register-step4', function () {
        return view('patient.patient-register-step4');
    })->name('patient-register-step4');
    Route::get('/patient-register-step5', function () {
        return view('patient.patient-register-step5');
    })->name('patient-register-step5');
    Route::get('/patient-signup', function () {
        return view('patient.patient-signup');
    })->name('patient-signup');

    Route::resource('medical-detail', MedicalDetailController::class);
    Route::get('/medical-details', [MedicalDetailController::class, 'index'])->name('medical-details');
    Route::get('/medical-details-remove/{id}', [MedicalDetailController::class, 'destroy'])->name('medical-details-remove');


    Route::get('/patient-invoices', function () {
        return view('patient.patient-invoices');
    })->name('patient-invoices');
    Route::resource('medical-record', MedicalRecordController::class);
    Route::get('/medical-records', [MedicalRecordController::class, 'index'])->name('medical-records');
    Route::get('/medical-record-remove/{id}', [MedicalRecordController::class, 'destroy'])->name('medical-record-remove');


    Route::get('/add-dependent', function () {
        return view('add-dependent');
    })->name('add-dependent');
    Route::get('/favourites', [FavouritesController::class, 'index'])->name('favourites');
    Route::get('/dependent', [DependantController::class, 'index'])->name('dependent');
    Route::resource('dependents', DependantController::class);

    Route::get('/profile-settings', [PatientProfileSettingController::class, 'index'])->name('profile-settings');
    Route::resource('patient-profile-setting', PatientProfileSettingController::class);
});



/*****************ADMIN ROUTES*******************/
Route::middleware(['auth', 'role:admin'])->prefix('admin')->group(function () {
    Route::get('/index_admin', function () {
        return view('admin.index_admin');
    })->name('admin-dashboard');
    Route::get('/appointment-list', function () {
        return view('admin.appointment-list');
    })->name('appointment-list');
    Route::get('/specialities', function () {
        return view('admin.specialities');
    })->name('specialities');
    Route::get('/doctor-list', function () {
        return view('admin.doctor-list');
    })->name('doctor-list');
    Route::get('/patient-list', function () {
        return view('admin.patient-list');
    })->name('patient-list');
    Route::get('/reviews', function () {
        return view('admin.reviews');
    })->name('reviews');
    Route::get('/transactions-list', function () {
        return view('admin.transactions-list');
    })->name('transactions-list');
    Route::get('/settings', function () {
        return view('admin.settings');
    })->name('settings');
    Route::get('/invoice-report', function () {
        return view('admin.invoice-report');
    })->name('invoice-report');
    Route::get('/profile', function () {
        return view('admin.profile');
    })->name('profile');
    Route::get('/login', function () {
        return view('admin.login');
    })->name('login');
    Route::get('/register', function () {
        return view('admin.register');
    })->name('register');
    Route::get('/forgot-password', function () {
        return view('admin.forgot-password');
    })->name('forgot-password');
    Route::get('/lock-screen', function () {
        return view('admin.lock-screen');
    })->name('lock-screen');
    Route::get('/error-404', function () {
        return view('admin.error-404');
    })->name('error-404');
    Route::get('/error-500', function () {
        return view('admin.error-500');
    })->name('error-500');
    Route::get('/blank-page', function () {
        return view('admin.blank-page');
    })->name('blank-page');
    Route::get('/components', function () {
        return view('admin.components');
    })->name('components');
    Route::get('/form-basic-inputs', function () {
        return view('admin.form-basic-inputs');
    })->name('form-basic');
    Route::get('/form-input-groups', function () {
        return view('admin.form-input-groups');
    })->name('form-inputs');
    Route::get('/form-horizontal', function () {
        return view('admin.form-horizontal');
    })->name('form-horizontal');
    Route::get('/form-vertical', function () {
        return view('admin.form-vertical');
    })->name('form-vertical');
    Route::get('/form-mask', function () {
        return view('admin.form-mask');
    })->name('form-mask');
    Route::get('/form-validation', function () {
        return view('admin.form-validation');
    })->name('form-validation');
    Route::get('/tables-basic', function () {
        return view('admin.tables-basic');
    })->name('tables-basic');
    Route::get('/data-tables', function () {
        return view('admin.data-tables');
    })->name('data-tables');
    Route::get('/invoice', function () {
        return view('admin.invoice');
    })->name('invoice');
    Route::get('/calendar', function () {
        return view('admin.calendar');
    })->name('calendar');
    Route::get('/blog', function () {
        return view('admin.blog');
    })->name('blog');
    Route::get('/blog-details', function () {
        return view('admin.blog-details');
    })->name('blog-details');
    Route::get('/add-blog', function () {
        return view('admin.add-blog');
    })->name('add-blog');
    Route::get('/edit-blog', function () {
        return view('admin.edit-blog');
    })->name('edit-blog');
    Route::get('/product-list', function () {
        return view('admin.product-list');
    })->name('product-list');
    Route::get('/pharmacy-list', function () {
        return view('admin.pharmacy-list');
    })->name('pharmacy-list');
    Route::get('/pending-blog', function () {
        return view('admin.pending-blog');
    })->name('pending-blog');
});




























Route::get('/index', function () {
    return view('index');
})->name('index');
Route::get('/index-2', function () {
    return view('index-2');
})->name('index-2');
Route::get('/index-3', function () {
    return view('index-3');
})->name('index-3');
Route::get('/index-4', function () {
    return view('index-4');
})->name('index-4');
Route::get('/index-5', function () {
    return view('index-5');
})->name('index-5');
Route::get('/index-6', function () {
    return view('index-6');
})->name('index-6');
Route::get('/index-7', function () {
    return view('index-7');
})->name('index-7');
Route::get('/index-8', function () {
    return view('index-8');
})->name('index-8');
Route::get('/index-9', function () {
    return view('index-9');
})->name('index-9');
Route::get('/index-10', function () {
    return view('index-10');
})->name('index-10');
Route::get('/index-11', function () {
    return view('index-11');
})->name('index-11');
Route::get('/index-12', function () {
    return view('index-12');
})->name('index-12');
Route::get('/index-13', function () {
    return view('index-13');
})->name('index-13');
Route::get('/index-14', function () {
    return view('index-14');
})->name('index-14');
Route::get('/about-us', function () {
    return view('about-us');
})->name('about-us');
Route::get('/accounts', [AccountController::class, 'index'])->name('accounts');
Route::resource('/account', AccountController::class);
Route::get('/account-default/{id}', [AccountController::class, 'setDefault'])->name('account-default');
Route::get('/add-billing', function () {
    return view('add-billing');
})->name('add-billing');

Route::get('/add-prescription', function () {
    return view('add-prescription');
})->name('add-prescription');

Route::get('/appointments', [AppointmentController::class, 'index'])->name('appointments');
Route::get('/appointments-remove/{id}', [AppointmentController::class, 'destroy'])->name('appointments-remove');


Route::get('/available-timings', [AvailableTimmingController::class, 'index'])->name('available-timings');
Route::post('/available-timings-add', [AvailableTimmingController::class, 'store'])->name('available-timings-add');

// Route::resource('/available-timings', AvailableTimmingController::class);

Route::get('/blank-page', function () {
    return view('blank-page');
})->name('blank-page');
Route::get('/blog-details', function () {
    return view('blog-details');
})->name('blog-details');
Route::get('/blog-grid', function () {
    return view('blog-grid');
})->name('blog-grid');
Route::get('/blog-list', function () {
    return view('blog-list');
})->name('blog-list');
Route::get('/booking-2', function () {
    return view('booking-2');
})->name('booking-2');
Route::get('/booking-success-one', function () {
    return view('booking-success-one');
})->name('booking-success-one');
Route::get('/booking-success', function () {
    return view('booking-success');
})->name('booking-success');
Route::get('/booking/{doctor_id}', function () {
    return view('booking');
})->name('booking');
Route::get('/booking/{doctor_id}', [BookingController::class, 'showBookingForm'])->name('booking');
Route::resource('/book-appointment', BookingController::class);


Route::get('/calendar', function () {
    return view('calendar');
})->name('calendar');
Route::get('/cart', function () {
    return view('cart');
})->name('cart');
Route::get('/change-password', function () {
    return view('change-password');
})->name('change-password');
Route::get('/chat-doctor', function () {
    return view('chat-doctor');
})->name('chat-doctor');
Route::get('/chat', function () {
    return view('chat');
})->name('chat');
Route::get('/checkout', function () {
    return view('checkout');
})->name('checkout');
Route::get('/coming-soon', function () {
    return view('coming-soon');
})->name('coming-soon');
Route::get('/components', function () {
    return view('components');
})->name('components');
Route::get('/consultation', function () {
    return view('consultation');
})->name('consultation');
Route::get('/contact-us', function () {
    return view('contact-us');
})->name('contact-us');

Route::get('/doctor-add-blog', function () {
    return view('doctor-add-blog');
})->name('doctor-add-blog');
Route::get('/doctor-blog', function () {
    return view('doctor-blog');
})->name('doctor-blog');
Route::get('/doctor-change-password', function () {
    return view('doctor-change-password');
})->name('doctor-change-password');


/********************ADMIN ROUTES END******************************/





Route::get('/doctor-pending-blog', function () {
    return view('doctor-pending-blog');
})->name('doctor-pending-blog');
Route::resource('/doctor-profile-settings', DoctorController::class);
Route::get('/doctor-profile', function () {
    return view('doctor-profile');
})->name('doctor-profile');
Route::get('/doctor-register-step1', function () {
    return view('doctor-register-step1');
})->name('doctor-register-step1');
Route::get('/doctor-register-step2', function () {
    return view('doctor-register-step2');
})->name('doctor-register-step2');
Route::get('/doctor-register-step3', function () {
    return view('doctor-register-step3');
})->name('doctor-register-step3');
Route::get('/doctor-register', function () {
    return view('doctor-register');
})->name('doctor-register');
Route::get('/doctor-search-grid', function () {
    return view('doctor-search-grid');
})->name('doctor-search-grid');
Route::get('/doctor-signup', function () {
    return view('doctor-signup');
})->name('doctor-signup');
Route::get('/edit-billing', function () {
    return view('edit-billing');
})->name('edit-billing');
Route::get('/edit-blog', function () {
    return view('edit-blog');
})->name('edit-blog');
Route::get('/edit-dependent', function () {
    return view('edit-dependent');
})->name('edit-dependent');
Route::get('/edit-prescription', function () {
    return view('edit-prescription');
})->name('edit-prescription');
Route::get('/email-otp', function () {
    return view('email-otp');
})->name('email-otp');
Route::get('/error-404', function () {
    return view('error-404');
})->name('error-404');
Route::get('/error-500', function () {
    return view('error-500');
})->name('error-500');
Route::get('/faq', function () {
    return view('faq');
})->name('faq');

Route::get('/forgot-password', function () {
    return view('forgot-password');
})->name('forgot-password');
Route::get('/forgot-password2', function () {
    return view('forgot-password2');
})->name('forgot-password2');
Route::get('/invoice-view', function () {
    return view('invoice-view');
})->name('invoice-view');
Route::get('/invoices', function () {
    return view('invoices');
})->name('invoices');
Route::get('/login-email-otp', function () {
    return view('login-email-otp');
})->name('login-email-otp');
Route::get('/login-email', function () {
    return view('login-email');
})->name('login-email');
Route::get('/login-phone-otp', function () {
    return view('login-phone-otp');
})->name('login-phone-otp');
Route::get('/login-phone', function () {
    return view('login-phone');
})->name('login-phone');
Route::get('/login', function () {
    return view('login');
})->name('login');
Route::get('/maintenance', function () {
    return view('maintenance');
})->name('maintenance');
Route::get('/map-grid', function () {
    return view('map-grid');
})->name('map-grid');
Route::get('/map-list', function () {
    return view('map-list');
})->name('map-list');


Route::get('/membership-details', function () {
    return view('membership-details');
})->name('membership-details');
Route::get('/mobile-otp', function () {
    return view('mobile-otp');
})->name('mobile-otp');
Route::get('/my-patients', function () {
    return view('my-patients');
})->name('my-patients');
Route::get('/onboarding-availability', function () {
    return view('onboarding-availability');
})->name('onboarding-availability');
Route::get('/onboarding-consultation', function () {
    return view('onboarding-consultation');
})->name('onboarding-consultation');
Route::get('/onboarding-cost', function () {
    return view('onboarding-cost');
})->name('onboarding-cost');
Route::get('/onboarding-email-otp', function () {
    return view('onboarding-email-otp');
})->name('onboarding-email-otp');
Route::get('/onboarding-email-step-2-verify', function () {
    return view('onboarding-email-step-2-verify');
})->name('onboarding-email-step-2-verify');
Route::get('/onboarding-email', function () {
    return view('onboarding-email');
})->name('onboarding-email');
Route::get('/onboarding-identity', function () {
    return view('onboarding-identity');
})->name('onboarding-identity');
Route::get('/onboarding-lock', function () {
    return view('onboarding-lock');
})->name('onboarding-lock');
Route::get('/onboarding-password', function () {
    return view('onboarding-password');
})->name('onboarding-password');
Route::get('/onboarding-payments', function () {
    return view('onboarding-payments');
})->name('onboarding-payments');
Route::get('/onboarding-personalize', function () {
    return view('onboarding-personalize');
})->name('onboarding-personalize');
Route::get('/onboarding-phone-otp', function () {
    return view('onboarding-phone-otp');
})->name('onboarding-phone-otp');
Route::get('/onboarding-phone', function () {
    return view('onboarding-phone');
})->name('onboarding-phone');
Route::get('/onboarding-preferences', function () {
    return view('onboarding-preferences');
})->name('onboarding-preferences');
Route::get('/onboarding-verification', function () {
    return view('onboarding-verification');
})->name('onboarding-verification');
Route::get('/onboarding-verify-account', function () {
    return view('onboarding-verify-account');
})->name('onboarding-verify-account');
Route::get('/orders-list', function () {
    return view('orders-list');
})->name('orders-list');


Route::get('/payment-success', function () {
    return view('payment-success');
})->name('payment-success');
Route::get('/payment', function () {
    return view('payment');
})->name('payment');
Route::get('/pharmacy-details', function () {
    return view('pharmacy-details');
})->name('pharmacy-details');
Route::get('/pharmacy-index', function () {
    return view('pharmacy-index');
})->name('pharmacy-index');
Route::get('/pharmacy-register-step1', function () {
    return view('pharmacy-register-step1');
})->name('pharmacy-register-step1');
Route::get('/pharmacy-register-step2', function () {
    return view('pharmacy-register-step2');
})->name('pharmacy-register-step2');
Route::get('/pharmacy-register-step3', function () {
    return view('pharmacy-register-step3');
})->name('pharmacy-register-step3');
Route::get('/pharmacy-register', function () {
    return view('pharmacy-register');
})->name('pharmacy-register');
Route::get('/pharmacy-search', function () {
    return view('pharmacy-search');
})->name('pharmacy-search');
Route::get('/pricing', function () {
    return view('pricing');
})->name('pricing');
Route::get('/privacy-policy', function () {
    return view('privacy-policy');
})->name('privacy-policy');
Route::get('/product-all', function () {
    return view('product-all');
})->name('product-all');
Route::get('/product-checkout', function () {
    return view('product-checkout');
})->name('product-checkout');
Route::get('/product-description', function () {
    return view('product-description');
})->name('product-description');
Route::get('/product-healthcare', function () {
    return view('product-healthcare');
})->name('product-healthcare');

Route::get('/register', function () {
    return view('register');
})->name('register');
Route::get('/reset-password', function () {
    return view('reset-password');
})->name('reset-password');
Route::get('/reviews', function () {
    return view('reviews');
})->name('reviews');
Route::get('/schedule-timings', function () {
    return view('schedule-timings');
})->name('schedule-timings');
Route::get('/search-2', function () {
    return view('search-2');
})->name('search-2');
Route::get('/search', function () {
    return view('search');
})->name('search');
Route::get('/signup-success', function () {
    return view('signup-success');
})->name('signup-success');
Route::get('/signup', function () {
    return view('signup');
})->name('signup');
Route::get('/social-media', function () {
    return view('social-media');
})->name('social-media');
Route::get('/term-condition', function () {
    return view('term-condition');
})->name('term-condition');
Route::get('/terms-condition', function () {
    return view('terms-condition');
})->name('terms-condition');
Route::get('/video-call', function () {
    return view('video-call');
})->name('video-call');
Route::get('/voice-call', function () {
    return view('voice-call');
})->name('voice-call');
Route::resource('/doctor-request', DoctorBookingController::class);
Route::post('/doctor-request/accept/{id}', [DoctorBookingController::class, 'accept'])->name('doctor-request.accept');
Route::post('/doctor-request/reject', [DoctorBookingController::class, 'reject'])->name('doctor-request.reject');
Route::get('/doctor-appointment-start', function () {
    return view('doctor-appointment-start');
})->name('doctor-appointment-start');
Route::get('/doctor-upcoming-appointment', function () {
    return view('doctor-upcoming-appointment');
})->name('doctor-upcoming-appointment');
Route::get('/doctor-appointments-grid', function () {
    return view('doctor-appointments-grid');
})->name('doctor-appointments-grid');
Route::get('/doctor-completed-appointment', function () {
    return view('doctor-completed-appointment');
})->name('doctor-completed-appointment');
Route::get('/doctor-specialities', function () {
    return view('doctor-specialities');
})->name('doctor-specialities');
Route::get('/doctor-payment', function () {
    return view('doctor-payment');
})->name('doctor-payment');
Route::get('/doctor-appointment-details', function () {
    return view('doctor-appointment-details');
})->name('doctor-appointment-details');
Route::get('/doctor-awards-settings', function () {
    return view('doctor-awards-settings');
})->name('doctor-awards-settings');
Route::get('/doctor-business-settings', function () {
    return view('doctor-business-settings');
})->name('doctor-business-settings');
Route::get('/doctor-clinics-settings', function () {
    return view('doctor-clinics-settings');
})->name('doctor-clinics-settings');
Route::get('/doctor-education-settings', function () {
    return view('doctor-education-settings');
})->name('doctor-education-settings');
Route::get('/doctor-experience-settings', function () {
    return view('doctor-experience-settings');
})->name('doctor-experience-settings');
Route::get('/doctor-insurance-settings', function () {
    return view('doctor-insurance-settings');
})->name('doctor-insurance-settings');
Route::get('/doctor-cancelled-appointment', function () {
    return view('doctor-cancelled-appointment');
})->name('doctor-cancelled-appointment');
Route::get('/patient-appointments', [BookingController::class, 'getPatientAppointments'])->name('patient-appointments');
Route::get('/patient-appointment-details', function () {
    return view('patient-appointment-details');
})->name('patient-appointment-details');
Route::get('/patient-appointments-grid', function () {
    return view('patient-appointments-grid');
})->name('patient-appointments-grid');
Route::get('/patient-cancelled-appointment', function () {
    return view('patient-cancelled-appointment');
})->name('patient-cancelled-appointment');
Route::get('/patient-completed-appointment', function () {
    return view('patient-completed-appointment');
})->name('patient-completed-appointment');

Route::get('/patient-upcoming-appointment', function () {
    return view('patient-upcoming-appointment');
})->name('patient-upcoming-appointment');
Route::get('/doctor-cancelled-appointment-2', function () {
    return view('doctor-cancelled-appointment-2');
})->name('doctor-cancelled-appointment-2 ');
Route::get('/paitent-details', function () {
    return view('paitent-details');
})->name('paitent-details');
Route::get('/doctor-profile-2', function () {
    return view('doctor-profile-2');
})->name('doctor-profile-2');


Route::get('/google-auth', function () {
    $client = GoogleClientService::getClient();
    $authUrl = $client->createAuthUrl();

    return redirect($authUrl);
})->name('google.auth');

Route::get('/callback', function (Request $request) {
    $client = GoogleClientService::getClient();

    // Exchange authorization code for access token
    if ($request->has('code')) {
        $client->fetchAccessTokenWithAuthCode($request->get('code'));
        session(['google_access_token' => $client->getAccessToken()]);
    }

    return redirect()->route('doctor-profile-settings.index');
})->name('google.callback');

Route::get('/check-google-token', [GoogleMeetController::class, 'checkGoogleToken'])->name('check.google.token');

Route::get('/schedule-meeting', [GoogleMeetController::class, 'showScheduleForm'])->name('show-schedule-form');
Route::post('/google-meet/create', [GoogleMeetController::class, 'createMeeting'])->name('google.meet.create');



/********************PHARMACY ADMIN********************************/
// Route::Group(['prefix' => 'pharmacy-admin'], function () 
// {
//     Route::get('/index_pharmacy_admin', function () {
//         return view('pharmacy-admin.index_pharmacy_admin');
//     })->name('pagees');
//     Route::get('/products', function () {
//         return view('pharmacy-admin.products');
//     })->name('products');
//     Route::get('/add-product', function () {
//         return view('pharmacy-admin.add-product');
//     })->name('add-product');
//     Route::get('/outstock', function () {
//         return view('pharmacy-admin.outstock');
//     })->name('outstock');
//     Route::get('/expired', function () {
//         return view('pharmacy-admin.expired');
//     })->name('expired');
//     Route::get('/categories', function () {
//         return view('pharmacy-admin.categories');
//     })->name('categories');
//     Route::get('/purchase', function () {
//         return view('pharmacy-admin.purchase');
//     })->name('purchase');
//     Route::get('/add-purchase', function () {
//         return view('pharmacy-admin.add-purchase');
//     })->name('add-purchase');
//     Route::get('/order', function () {
//         return view('pharmacy-admin.order');
//     })->name('order');
//     Route::get('/sales', function () {
//         return view('pharmacy-admin.sales');
//     })->name('sales');
//     Route::get('/supplier', function () {
//         return view('pharmacy-admin.supplier');
//     })->name('supplier');
//     Route::get('/add-supplier', function () {
//         return view('pharmacy-admin.add-supplier');
//     })->name('add-supplier');
//     Route::get('/transactions-list', function () {
//         return view('pharmacy-admin.transactions-list');
//     })->name('transactions-list');
//     Route::get('/invoice-report', function () {
//         return view('pharmacy-admin.invoice-report');
//     })->name('invoice-report');
//     Route::get('/profile', function () {
//         return view('pharmacy-admin.profile');
//     })->name('profile');
//     Route::get('/settings', function () {
//         return view('pharmacy-admin.settings');
//     })->name('settings');
//     Route::get('/customer-orders', function () {
//         return view('pharmacy-admin.customer-orders');
//     })->name('customer-orders');
//     Route::get('/edit-product', function () {
//         return view('pharmacy-admin.edit-product');
//     })->name('edit-product');
//     Route::get('/edit-purchase', function () {
//         return view('pharmacy-admin.edit-purchase');
//     })->name('edit-purchase');
//     Route::get('/edit-supplier', function () {
//         return view('pharmacy-admin.edit-supplier');
//     })->name('edit-supplier');
//     Route::get('/invoice', function () {
//         return view('pharmacy-admin.invoice');
//     })->name('invoice');
//     Route::get('/product-list', function () {
//         return view('pharmacy-admin.product-list');
//     })->name('product-list');
//     Route::get('/forgot-password', function () {
//         return view('pharmacy-admin.forgot-password');
//     })->name('forgot-password');
//    Route::get('/login', function () {
//        return view('pharmacy-admin.login');
//    })->name('login');
//     Route::get('/register', function () {
//         return view('pharmacy-admin.register');
//     })->name('register');

// });

require __DIR__ . '/auth.php';
