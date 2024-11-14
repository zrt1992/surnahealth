<?php

namespace App\Providers;

use App\Interfaces\AvailableTimmingRepositoryInterface;
use App\Interfaces\BookingRepositoryInterface;
use App\Interfaces\DependantRepositoryInterface;
use App\Interfaces\DoctorRepositoryInterface;
use App\Interfaces\MedicalDetailRepositoryInterface;
use App\Interfaces\MedicalRecordRepositoryInterface;
use App\Models\Dependant;
use App\Models\MedicalRecord;
use App\Models\User;
use App\Observers\DependantObserver;
use App\Observers\DoctorObserver;
use App\Observers\MedicalRecordObserver;
use App\Repositories\AvailableTimmingRepository;
use App\Repositories\BookingRepository;
use App\Repositories\DependantRepository;

use App\Repositories\DoctorRepository;
use App\Repositories\MedicalDetailRepository;

use App\Repositories\MedicalRecordRepository;

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

    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        User::observe(DoctorObserver::class);
        Dependant::observe(DependantObserver::class);
        MedicalRecord::observe(MedicalRecordObserver::class);
        RedirectIfAuthenticated::redirectUsing(function () {
//            dd(Auth::check());
//            Auth::logout();
            return route('home-page');
        });
    }
}
