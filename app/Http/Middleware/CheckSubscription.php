<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class CheckSubscription
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (Auth::check() && !Auth::user()->isSubscribed()) {
            // Redirect to the subscription page if not subscribed
            $user = Auth::user();
            if ($user->hasRole('doctor')) {
                return redirect()->route('doctor-payment-method-step')
                    ->with('error', 'You need an active subscription to access this page.');
            } elseif ($user->hasRole('patient')) {
                return redirect()->route('patient-payment-method-step')
                    ->with('error', 'You need an active subscription to access this page.');
            }
        }

        return $next($request);
    }
}
