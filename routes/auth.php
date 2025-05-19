<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\ConfirmablePasswordController;
use App\Http\Controllers\Auth\DoctorRegistrationController;
use App\Http\Controllers\Auth\EmailVerificationNotificationController;
use App\Http\Controllers\Auth\EmailVerificationPromptController;
use App\Http\Controllers\Auth\NewPasswordController;
use App\Http\Controllers\Auth\PasswordController;
use App\Http\Controllers\Auth\PasswordResetLinkController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\VerifyEmailController;
use Illuminate\Support\Facades\Route;

Route::middleware('guest')->group(function () {
    Route::get('register', [RegisteredUserController::class, 'create'])
        ->name('register');

    Route::post('register', [RegisteredUserController::class, 'store'])->name('register.store');

    Route::get('/login', function () {
        //        dd('asd');
        return view('login');
    })->name('login');

    Route::post('login', [AuthenticatedSessionController::class, 'store'])->name('login-admin');
Route::post('check-otp', [PasswordResetLinkController::class, 'verifyOtp'])
        ->name('check.otp');
    Route::get('forgot-password', [PasswordResetLinkController::class, 'create'])
        ->name('password.request');

    Route::post('forgot-password', [PasswordResetLinkController::class, 'store'])
        ->name('password.email');
    Route::get('otp-verification', [PasswordResetLinkController::class, 'otpVerification'])
        ->name('otp.verification');
    Route::post('verify-otp', [PasswordResetLinkController::class, 'verifyOtp'])
        ->name('verify.otp');
    Route::get('reset-password', [PasswordResetLinkController::class, 'resetPassword'])
        ->name('password.reset');

    Route::post('reset-password-store', [PasswordResetLinkController::class, 'resetPasswordStore'])
        ->name('password.store');
});

Route::post('create-meeting', [\App\Http\Controllers\MeetingController::class, 'createMeeting'])->name('create-meeting');
Route::middleware('auth')->group(function () {
    Route::get('verify-email', EmailVerificationPromptController::class)
        ->name('verification.notice');

    Route::get('verify-email/{id}/{hash}', VerifyEmailController::class)
        ->middleware(['signed', 'throttle:6,1'])
        ->name('verification.verify');

    Route::post('email/verification-notification', [EmailVerificationNotificationController::class, 'store'])
        ->middleware('throttle:6,1')
        ->name('verification.send');

    Route::get('confirm-password', [ConfirmablePasswordController::class, 'show'])
        ->name('password.confirm');

    Route::post('confirm-password', [ConfirmablePasswordController::class, 'store']);

    Route::put('password', [PasswordController::class, 'update'])->name('password.update');

    Route::post('logout-user', [AuthenticatedSessionController::class, 'destroy'])
        ->name('logout-user');
});

Route::prefix('doctor-registration')->name('doctor-registration.')->group(function () {

    Route::post('register', [DoctorRegistrationController::class, 'store'])->name('register');
    Route::post('/step1', [DoctorRegistrationController::class, 'storeStep1'])->name('store.step1');
    Route::post('/step2', [DoctorRegistrationController::class, 'storeStep2'])->name('store.step2');
    Route::post('/step3', [DoctorRegistrationController::class, 'storeStep3'])->name('store.step3');
    Route::post('/step4', [DoctorRegistrationController::class, 'storeStep4'])->name('store.step4');
    Route::post('/step5', [DoctorRegistrationController::class, 'storeStep5'])->name('store.step5');
});

Route::prefix('user-registration')->name('user-registration.')->group(function () {

    Route::post('register', [RegisteredUserController::class, 'store'])->name('register');
    Route::post('/step1', [RegisteredUserController::class, 'storeStep1'])->name('store.step1');
    Route::post('/step2', [RegisteredUserController::class, 'storeStep2'])->name('store.step2');
    Route::post('/step3', [RegisteredUserController::class, 'storeStep3'])->name('store.step3');
    Route::post('/step4', [RegisteredUserController::class, 'storeStep4'])->name('store.step4');
});
