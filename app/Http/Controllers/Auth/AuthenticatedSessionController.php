<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request): RedirectResponse
    {


        $request->authenticate();

        
        // if user is doctor
        // dd($request->user()->roles);
        if($request->user()->hasRole('doctor'))
        {
            $request->session()->regenerate();
            return redirect()->intended(route('doctor-dashboard', absolute: false));
        }
        if($request->user()->hasRole('admin'))
        {
            $request->session()->regenerate();
            return redirect()->intended(route('admin-dashboard', absolute: false));
        }
        if($request->user()->hasRole('patient'))
        {
            $request->session()->regenerate();
            return redirect()->intended(route('patient-dashboard', absolute: false));
        }

        // if user is admin
        // return redirect()->intended(route('dashboard', absolute: false));
        
        // if suer is patient
        // return redirect()->intended(route('dashboard', absolute: false));
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
    // dd('auth/authenticated session');
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('index');
    }
}
