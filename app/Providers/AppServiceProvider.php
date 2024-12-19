<?php

namespace App\Providers;

use App\Interfaces\AccountRepositoryInterface;
use App\Interfaces\AvailableTimmingRepositoryInterface;
use App\Interfaces\BookingRepositoryInterface;
use App\Interfaces\DependantRepositoryInterface;
use App\Interfaces\DoctorAwardRepositoryInterface;
use App\Interfaces\DoctorBusinessHourRepositoryInterface;
use App\Interfaces\DoctorClinicsRepositoryInterface;
use App\Interfaces\DoctorEducationRepositoryInterface;
use App\Interfaces\DoctorExperienceRepositoryInterface;
use App\Interfaces\DoctorInsurancesRepositoryInterface;
use App\Interfaces\DoctorRepositoryInterface;
use App\Interfaces\MedicalDetailRepositoryInterface;
use App\Interfaces\MedicalRecordRepositoryInterface;
use App\Interfaces\PatientProfileSettingRepositoryInterface;
use App\Models\AppointmentRequests;
use App\Models\Dependant;
use App\Models\DoctorClinic;
use App\Models\DoctorEducation;
use App\Models\DoctorExperience;
use App\Models\DoctorInsurances;
use App\Models\MedicalRecord;
use App\Models\Message;
use App\Models\User;
use App\Observers\DependantObserver;
use App\Observers\DoctorClinicObserver;
use App\Observers\DoctorEducationObserver;
use App\Observers\DoctorExperienceObserver;
use App\Observers\DoctorInsurancesObserver;
use App\Observers\DoctorObserver;
use App\Observers\MedicalRecordObserver;
use App\Observers\PatientProfileSettingObserver;
use App\Repositories\AccountRepository;
use App\Repositories\AvailableTimmingRepository;
use App\Repositories\BookingRepository;
use App\Repositories\DependantRepository;
use App\Repositories\DoctorAwardRepository;
use App\Repositories\DoctorBusinessHourRepository;
use App\Repositories\DoctorClinicsRepository;
use App\Repositories\DoctorEducationRepository;
use App\Repositories\DoctorExperienceRepository;
use App\Repositories\DoctorInsurancesRepository;
use App\Repositories\DoctorRepository;
use App\Repositories\MedicalDetailRepository;

use App\Repositories\MedicalRecordRepository;
use App\Repositories\PatientProfileSettingRepository;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\ServiceProvider;
use Illuminate\Auth\Middleware\RedirectIfAuthenticated;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        User::observe(DoctorObserver::class);
        Dependant::observe(DependantObserver::class);
        MedicalRecord::observe(MedicalRecordObserver::class);


        $this->app->bind(DoctorRepositoryInterface::class, DoctorRepository::class);
        $this->app->bind(AvailableTimmingRepositoryInterface::class, AvailableTimmingRepository::class);
        $this->app->bind(BookingRepositoryInterface::class, BookingRepository::class);
        $this->app->bind(DependantRepositoryInterface::class, DependantRepository::class);
        $this->app->bind(MedicalRecordRepositoryInterface::class, MedicalRecordRepository::class);
        $this->app->bind(MedicalDetailRepositoryInterface::class, MedicalDetailRepository::class);
        $this->app->bind(PatientProfileSettingRepositoryInterface::class, PatientProfileSettingRepository::class);
        $this->app->bind(AccountRepositoryInterface::class, AccountRepository::class);
        $this->app->bind(DoctorExperienceRepositoryInterface::class, DoctorExperienceRepository::class);
        $this->app->bind(DoctorEducationRepositoryInterface::class, DoctorEducationRepository::class);
        $this->app->bind(DoctorAwardRepositoryInterface::class, DoctorAwardRepository::class);
        $this->app->bind(DoctorInsurancesRepositoryInterface::class, DoctorInsurancesRepository::class);
        $this->app->bind(DoctorClinicsRepositoryInterface::class, DoctorClinicsRepository::class);
        $this->app->bind(DoctorBusinessHourRepositoryInterface::class, DoctorBusinessHourRepository::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        User::observe(DoctorObserver::class);
        Dependant::observe(DependantObserver::class);
        MedicalRecord::observe(MedicalRecordObserver::class);
        User::observe(PatientProfileSettingObserver::class);
        DoctorExperience::observe(DoctorExperienceObserver::class);
        DoctorEducation::observe(DoctorEducationObserver::class);
        DoctorInsurances::observe(DoctorInsurancesObserver::class);
        DoctorClinic::observe(DoctorClinicObserver::class);


        RedirectIfAuthenticated::redirectUsing(function () {
            //            dd(Auth::check());
            //            Auth::logout();
            return route('home-page');
        });

        view()->composer('*', function ($view) {
            $doctorRequestCount = 0;
            $unseenMessagesCount = 0;

            if (Auth::check()) {
                $user = Auth::user();

                // If the user is a doctor
                if ($user->hasRole('doctor')) {
                    $doctorRequestCount = AppointmentRequests::where('doctor_id', $user->id)->count();
                    $unseenMessagesCount = Message::where('receiver_id', $user->id)
                        ->where('seen', null)
                        ->count();
                }

                // If the user is a patient
                if ($user->hasRole('patient')) {
                    $unseenMessagesCount = Message::where('receiver_id', $user->id)
                        ->where('seen', null)
                        ->count();
                }
            }

            $view->with([
                'doctorRequestCount' => $doctorRequestCount,
                'unseenMessagesCount' => $unseenMessagesCount,
            ]);
        });
    }
}
