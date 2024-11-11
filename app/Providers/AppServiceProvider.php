<?php

namespace App\Providers;

use App\Interfaces\AvailableTimmingRepositoryInterface;
use App\Interfaces\DoctorRepositoryInterface;
use App\Models\User;
use App\Observers\DoctorObserver;
use App\Repositories\AvailableTimmingRepository;
use App\Repositories\DoctorRepository;
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

        $this->app->bind(DoctorRepositoryInterface::class, DoctorRepository::class);
        $this->app->bind(AvailableTimmingRepositoryInterface::class, AvailableTimmingRepository::class);

    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        User::observe(DoctorObserver::class);
        RedirectIfAuthenticated::redirectUsing(function () {
//            dd(Auth::check());
//            Auth::logout();
            return route('home-page');
        });
    }
}
