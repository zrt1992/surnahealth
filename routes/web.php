<?php

use App\Events\MyEvent;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\Auth\DoctorRegistrationController;
use App\Http\Controllers\Auth\NewPasswordController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Doctor\AppointmentController;
use App\Http\Controllers\Doctor\AvailableTimmingController;
use App\Http\Controllers\Doctor\DashboardController;
use App\Http\Controllers\Doctor\DoctorAwardController;
use App\Http\Controllers\Doctor\DoctorBookingController;
use App\Http\Controllers\Doctor\DoctorBusinessHourController;
use App\Http\Controllers\Doctor\DoctorChatController;
use App\Http\Controllers\Doctor\DoctorClinicsController;
use App\Http\Controllers\Doctor\DoctorController;
use App\Http\Controllers\Doctor\DoctorEducationController;
use App\Http\Controllers\Doctor\DoctorExperienceController;
use App\Http\Controllers\Doctor\DoctorHelpAndSupportController;
use App\Http\Controllers\Doctor\DoctorInsurancesController;
use App\Http\Controllers\Doctor\DoctorPresciptionController;
use App\Http\Controllers\Doctor\PatientsController;
use App\Http\Controllers\Frontend\FrontendController;
use App\Http\Controllers\GoogleMeetController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\Patient\BookingController;
use App\Http\Controllers\Patient\DashboardController as PatientDashboard;
use App\Http\Controllers\Patient\DependantController;
use App\Http\Controllers\Patient\DoctorProfileController;
use App\Http\Controllers\Patient\FavouritesController;
use App\Http\Controllers\Patient\MedicalDetailController;
use App\Http\Controllers\Patient\MedicalRecordController;
use App\Http\Controllers\Patient\PatientChatController;
use App\Http\Controllers\Patient\PatientHelpAndSupportController;
use App\Http\Controllers\Patient\PatientPresciptionController;
use App\Http\Controllers\Patient\PatientProfileSettingController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SearchController;
use App\Services\GoogleClientService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\CheckRegistrationStep;
use App\Http\Middleware\LocalizationMiddleware;
use Illuminate\Support\Facades\Mail;
use Pusher\Pusher;

Route::get('/', function () {
    //  dd(\Illuminate\Support\Facades\Auth::user()->getRoleNames()->first());
    //    dd(\Illuminate\Support\Facades\Auth::logout());
    //    dd(\Illuminate\Support\Facades\Auth::check());
    //    \Illuminate\Support\Facades\Session::flush();

    return view('index');
})->name('home-page')->middleware([ LocalizationMiddleware::class]);

// Front end pages
Route::middleware([LocalizationMiddleware::class])->prefix('frontend')->group(function () {
    Route::get('/doctor-profile/{id?}', [FrontendController::class, 'doctorProfile'])->name('frontend.doctor-profile');
    Route::get('/booking/{doctor_id?}', [FrontendController::class, 'showBookingForm'])->name('frontend.booking');
    Route::get('/search', [FrontendController::class, 'search'])->name('frontend.search');
    Route::get('/blog-details', [FrontendController::class, 'blogDetails'])->name('frontend.blog-details');
});



Route::middleware('auth')->group(function () {
    //    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    //    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});




/**
 * doctors dashboard authenticated routes
 */

Route::middleware(['auth', 'role:doctor', CheckRegistrationStep::class])->prefix('doctor')->group(function () {

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('doctor-dashboard');

    Route::get('/doctor-change-password', [NewPasswordController::class, 'doctorChangePassword'])->name('doctor.doctor-change-password');
    Route::post('/update-password', [NewPasswordController::class, 'UpdatePassword'])->name('doctor.update-password');
    Route::resource('/doctor-profile-settings', DoctorController::class);

    Route::get('/doctor-business-settings', [DoctorBusinessHourController::class, 'index'])->name('doctor-business-settings');
    Route::get('/doctor-business-settings-delete/{id}', [DoctorBusinessHourController::class, 'destroy'])->name('doctor-business-settings-delete');
    Route::resource('/doctor-business-setting', DoctorBusinessHourController::class);

    Route::get('/doctor-education-settings', [DoctorEducationController::class, 'index'])->name('doctor-education-settings');
    Route::get('/doctor-education-settings-delete/{id}', [DoctorEducationController::class, 'destroy'])->name('doctor-education-settings-delete');
    Route::resource('/doctor-education-setting', DoctorEducationController::class);

    Route::get('/doctor-experience-settings', [DoctorExperienceController::class, 'index'])->name('doctor-experience-settings');
    Route::get('/doctor-experience-settings-delete/{id}', [DoctorExperienceController::class, 'destroy'])->name('doctor-experience-settings-delete');
    Route::resource('/doctor-experience-setting', DoctorExperienceController::class);

    Route::get('/doctor-appointments', [AppointmentController::class, 'index'])->name('doctor-appointments');
    Route::get('/doctor-appointments-grid', [AppointmentController::class, 'appointmentsGrid'])->name('doctor-appointments-grid');
    Route::get('/appointments-remove/{id}', [AppointmentController::class, 'destroy'])->name('appointments-remove');

    Route::get('/my-patients', [PatientsController::class, 'index'])->name('doctor.my-patients');
    Route::get('/patient-profile/{id?}', [PatientsController::class, 'patientProfile'])->name('doctor.patient-profile');
    Route::get('/chat-doctor/{id?}', [DoctorChatController::class, 'index'])->name('chat-doctor');
    Route::get('/doctor-recent-chats/{id?}', [DoctorChatController::class, 'getRecentChats']);

    Route::get('/add-prescription/{id?}', [DoctorPresciptionController::class, 'index'])->name('add-prescription');
    Route::get('/store-prescription', [DoctorPresciptionController::class, 'store'])->name('store-prescription');

    Route::get('/doctor-help-and-support', [DoctorHelpAndSupportController::class, 'index'])->name('doctor-help-and-support');
    Route::post('/doctor-create-ticket', [DoctorHelpAndSupportController::class, 'createTicket'])->name('doctor-create-ticket');
    Route::get('/doctor-ticket-remove/{id}', [DoctorHelpAndSupportController::class, 'destroy'])->name('doctor-ticket-remove');
});



/**
 * Patient dashboard authenticated routes
 */

Route::middleware(['auth', 'role:patient', CheckRegistrationStep::class])->prefix('patient')->group(function () {

    Route::get('/change-password', [NewPasswordController::class, 'patientChangePassword'])->name('patient.change-password');
    Route::post('/update-password', [NewPasswordController::class, 'UpdatePassword'])->name('patient.update-password');

    Route::get('/dashboard', [PatientDashboard::class, 'index'])->name('patient-dashboard');

    Route::resource('/patient-account', AccountController::class);
    Route::get('/patient-accounts', [AccountController::class, 'index'])->name('patient-accounts');
    Route::get('/patient-account-default/{id}', [AccountController::class, 'setDefault'])->name('patient-account-default');

    Route::get('/patient-details', function () {
        return view('patient.patient-details');
    })->name('patient-details');
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
    })->name('patient.patient-profile');
    Route::get('/patient-invoices', function () {
        return view('patient.patient-invoices');
    })->name('patient-invoices');
    Route::get('/add-dependent', function () {
        return view('add-dependent');
    })->name('add-dependent');

    Route::resource('patient-medical-detail', MedicalDetailController::class);
    Route::get('/medical-details', [MedicalDetailController::class, 'index'])->name('medical-details');
    Route::get('/medical-details-remove/{id}', [MedicalDetailController::class, 'destroy'])->name('medical-details-remove');

    Route::resource('medical-record', MedicalRecordController::class);
    Route::get('/medical-records', [MedicalRecordController::class, 'index'])->name('medical-records');
    Route::get('/medical-record-remove/{id}', [MedicalRecordController::class, 'destroy'])->name('medical-record-remove');

    Route::get('/favourites', [FavouritesController::class, 'index'])->name('favourites');

    Route::get('/dependent', [DependantController::class, 'index'])->name('dependent');
    Route::resource('dependents', DependantController::class);

    Route::get('/profile-settings', [PatientProfileSettingController::class, 'index'])->name('profile-settings');
    Route::resource('patient-profile-setting', PatientProfileSettingController::class);

    Route::get('/chat/{id?}', [PatientChatController::class, 'index'])->name('patient-chat');
    Route::get('/patient-recent-chats/{id?}', [PatientChatController::class, 'getRecentChats']);


    Route::get('/patient-prescription', [PatientPresciptionController::class, 'index'])->name('patient-prescription');

    Route::get('/patient-appointments', [BookingController::class, 'getPatientAppointments'])->name('patient-appointments');
    Route::get('/patient-appointments-grid', [BookingController::class, 'getPatientAppointmentsGrid'])->name('patient-appointments-grid');
    Route::get('/patient-cancelled-appointments/{id?}', [BookingController::class, 'getPatientCancelledAppointments'])->name('patient-cancelled-appointment');
    Route::get('/patient-reschedule-appointment/{doctorId?}/{appointmentReqId?}', [BookingController::class, 'showBookingForm'])->name('patient-reschedule-appointment');
    Route::post('/patient-preferences-update/{id?}', [BookingController::class, 'updatePreferences'])->name('patient-preferences-update');

    Route::get('/patient-help-and-support', [PatientHelpAndSupportController::class, 'index'])->name('patient-help-and-support');
    Route::post('/patient-create-ticket', [PatientHelpAndSupportController::class, 'createTicket'])->name('patient-create-ticket');
    Route::get('/patient-ticket-remove/{id}', [PatientHelpAndSupportController::class, 'destroy'])->name('patient-ticket-remove');

    Route::get('/patient-checkout', [BookingController::class, 'checkout'])->name('patient-checkout');
    Route::post('/patient-proceed-checkout', [BookingController::class, 'proceedCheckout'])->name('patient-proceed-checkout');
    Route::get('/checkout', function () {
        return view('checkout');
    })->name('checkout');

    Route::post('/create-checkout-session', [BookingController::class, 'createCheckoutSession']);
Route::post('/booking-success', [BookingController::class, 'bookingSuccess']);
Route::get('/booking-success', [BookingController::class, 'bookingSuccessModal'])->name('booking-success');

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
})->name('index')->middleware([ LocalizationMiddleware::class]);
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






Route::get('/available-timings', [AvailableTimmingController::class, 'index'])->name('available-timings');
Route::post('/available-timings-add', [AvailableTimmingController::class, 'store'])->name('available-timings-add');
Route::post('/available-timings-update', [AvailableTimmingController::class, 'update'])->name('available-timings-update');


// Route::resource('/available-timings', AvailableTimmingController::class);

Route::get('/blank-page', function () {
    return view('blank-page');
})->name('blank-page');
// Route::get('/blog-details', function () {
//     return view('blog-details');
// })->name('blog-details');
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

// Route::get('/booking/{doctor_id}', function () {
//     return view('booking');
// })->name('booking');
Route::get('/booking/{doctor_id?}', [BookingController::class, 'showBookingForm'])->name('booking');
Route::resource('/book-appointment', BookingController::class);


Route::get('/calendar', function () {
    return view('calendar');
})->name('calendar');
Route::get('/cart', function () {
    return view('cart');
})->name('cart');

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



/********************ADMIN ROUTES END******************************/


Route::get('/patient-register-step1', [RegisteredUserController::class, 'step1'])->name('patient-register-step1');
Route::get('/patient-register-step2', [RegisteredUserController::class, 'step2'])->name('patient-register-step2');
Route::get('/patient-register-step3', [RegisteredUserController::class, 'step3'])->name('patient-register-step3');
Route::get('/patient-register-step4', [RegisteredUserController::class, 'step4'])->name('patient-register-step4');

Route::get('/patient-signup', function () {
    return view('patient.patient-signup');
})->name('patient-signup');

Route::get('/doctor-pending-blog', function () {
    return view('doctor-pending-blog');
})->name('doctor-pending-blog');
Route::get('/doctor-profile', function () {
    return view('doctor-profile');
})->name('doctor-profile');

Route::get('/doctor-register-step1', [DoctorRegistrationController::class, 'step1'])->name('doctor-register-step1');
Route::get('/doctor-register-step2', [DoctorRegistrationController::class, 'step2'])->name('doctor-register-step2');
Route::get('/doctor-register-step3', [DoctorRegistrationController::class, 'step3'])->name('doctor-register-step3');
Route::get('/doctor-register-step4', [DoctorRegistrationController::class, 'step4'])->name('doctor-register-step4');

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
// Route::get('/search', function () {
//     return view('search');
// })->name('search');
Route::get('/search', [SearchController::class, 'index'])->name('search');

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
Route::resource('/doctor-request', DoctorBookingController::class)->middleware('auth');
Route::post('/doctor-request/accept/{id}', [DoctorBookingController::class, 'accept'])->name('doctor-request.accept');
Route::post('/doctor-request/reject', [DoctorBookingController::class, 'reject'])->name('doctor-request.reject');
Route::get('/doctor-appointment-start', function () {
    return view('doctor-appointment-start');
})->name('doctor-appointment-start');
Route::get('/doctor-upcoming-appointment', function () {
    return view('doctor-upcoming-appointment');
})->name('doctor-upcoming-appointment');

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

// Route::get('/doctor-awards-settings', [DoctorAwardController::class, 'index'])->name('doctor-awards-settings');
// Route::get('/doctor-awards-settings-delete/{id}', [DoctorAwardController::class, 'destroy'])->name('doctor-awards-settings-delete');
// Route::resource('/doctor-awards-setting', DoctorAwardController::class);


// Route::get('/doctor-clinics-settings', [DoctorClinicsController::class, 'index'])->name('doctor-clinics-settings');
// Route::get('/doctor-clinics-settings-delete/{id}', [DoctorClinicsController::class, 'destroy'])->name('doctor-clinics-settings-delete');
// Route::get('/doctor-clinics-setting-gallery-remove/{id}', [DoctorClinicsController::class, 'removeGallery'])->name('doctor-clinics-setting-gallery-remove');
// Route::resource('/doctor-clinics-setting', DoctorClinicsController::class);

// Route::get('/doctor-insurance-settings', [DoctorInsurancesController::class, 'index'])->name('doctor-insurance-settings');
// Route::get('/doctor-insurance-settings-delete/{id}', [DoctorInsurancesController::class, 'destroy'])->name('doctor-insurance-settings-delete');
// Route::resource('/doctor-insurance-setting', DoctorInsurancesController::class);

Route::get('/doctor-cancelled-appointment', function () {
    return view('doctor-cancelled-appointment');
})->name('doctor-cancelled-appointment');





Route::get('/patient-appointment-details', function () {
    return view('patient-appointment-details');
})->name('patient-appointment-details');
// Route::get('/patient-cancelled-appointment', function () {
//     return view('patient.patient-cancelled-appointment');
// })->name('patient-cancelled-appointment');
Route::get('/patient-completed-appointment', function () {
    return view('patient.patient-completed-appointment');
})->name('patient-completed-appointment');

Route::get('/patient-upcoming-appointment', function () {
    return view('patient.patient-upcoming-appointment');
})->name('patient-upcoming-appointment');
Route::get('/doctor-cancelled-appointment-2', function () {
    return view('doctor-cancelled-appointment-2');
})->name('doctor-cancelled-appointment-2 ');
Route::get('/paitent-details', function () {
    return view('paitent-details');
})->name('paitent-details');
// Route::get('/doctor-profile-2', function () {
//     return view('doctor-profile-2');
// })->name('doctor-profile-2');
Route::get('/doctor-profile-2/{id?}', [DoctorProfileController::class, 'show'])->name('doctor-profile-2');


Route::get('/google-auth', function () {

    session(['previous_url' => url()->previous()]);
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

    $previousUrl = session()->pull('previous_url', route('doctor-profile-settings.index'));

    return redirect($previousUrl);
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
Route::get('/preview-email', function () {
    $emailData = [
        'subject' => 'Test Email',
        'greeting' => 'Hello User',
        'body' => 'This is a test email to preview the design.',
        'actionText' => 'Visit Us',
        'actionURL' => url('/'),
        'thanks' => 'Thank you!',
    ];
    // dd($emailData);
    Mail::to('rehmanjunaid215@gmail.com')->send(new App\Mail\DynamicEmail($emailData));

    return 'Test email sent successfully!';
});

Route::get('/test-email', function () {
    try {
        Mail::raw('This is a test email.', function ($message) {
            $message->to('recipient@example.com')
                ->subject('Simple Email Test');
        });
        return 'Simple email sent!';
    } catch (\Exception $e) {
        return 'Error: ' . $e->getMessage();
    }
});


Route::get('/env-check', function () {
    return [
        'MAIL_MAILER' => env('MAIL_MAILER'),
        'MAIL_HOST' => env('MAIL_HOST'),
        'MAIL_PORT' => env('MAIL_PORT'),
        'MAIL_USERNAME' => env('MAIL_USERNAME'),
        'MAIL_PASSWORD' => env('MAIL_PASSWORD'),
        'MAIL_ENCRYPTION' => env('MAIL_ENCRYPTION'),
    ];
});


Route::get('/chat-testing', function () {
    return view('chat.chat');
})->name('chat-testing');
Route::get('/send-test-event', function () {
    $message = [
        'from' => 'User A',
        'to' => 'User B',
        'message' => 'Test message!',
    ];

    // Trigger the event using MyEvent
    event(new App\Events\MyEvent(['from' => 'User Aa', 'to' => 'User Ba', 'message' => 'Hello from Tinkerab!']));

    // event(new MyEvent('hello world'));

    return 'Test event sent!';
});



Route::middleware('auth')->group(function () {
    Route::get('/chat/{doctor_id?}', [MessageController::class, 'index'])->name('chat');
    Route::post('/messages/send', [MessageController::class, 'send'])->name('messages.send');
});


require __DIR__ . '/auth.php';
