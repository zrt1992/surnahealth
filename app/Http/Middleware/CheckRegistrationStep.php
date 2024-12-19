<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class CheckRegistrationStep
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $user = Auth::user();

        if ($user) {
            // Check role and redirect accordingly
            if ($user->hasRole('doctor')) {
                switch ($user->registration_step) {
                    case 1:
                        return redirect()->route('doctor-register-step1');
                    case 2:
                        return redirect()->route('doctor-register-step2');
                    case 3:
                        return redirect()->route('doctor-register-step3');
                    case 4:
                        return redirect()->route('doctor-register-step4');
                    case "completed":
                        return $next($request);
                }
            } elseif ($user->hasRole('patient')) {
                switch ($user->registration_step) {
                    case 1:
                        return redirect()->route('patient-register-step1');
                    case 2:
                        return redirect()->route('patient-register-step2');
                    case 3:
                        return redirect()->route('patient-register-step3');
                    case 4:
                        return redirect()->route('patient-register-step4');
                    case "completed":
                        return $next($request);
                }
            }
        }

        return redirect()->route('index')->with('error', 'You have no access!');
    }
}
