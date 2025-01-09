<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\App;

class LocalizationMiddleware
{
    public function handle($request, Closure $next)
    {
        $locale = $request->query('lang', config('app.locale')); // Get language from query string
        if (in_array($locale, ['en', 'es', 'fr', 'pt'])) {
            App::setLocale($locale);
        }
        return $next($request);
    }
}
