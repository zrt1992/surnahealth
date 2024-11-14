<?php

use Carbon\Carbon;

if (!function_exists('getAuthUser')) {
    function getAuthUser()
    {
        return auth()->user();
    }
}

if (!function_exists('calculateAge')) {
    function calculateAge($dob)
    {
        $birthDate = Carbon::parse($dob);
        $now = Carbon::now();

        // Calculate years and remaining days as integers
        $years = (int) $birthDate->diffInYears($now);
        $days = (int) $birthDate->addYears($years)->diffInDays($now);

        return "{$years} years {$days} days";
    }
}