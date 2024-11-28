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
        try {
            // Try parsing as 'd/m/Y'
            $birthDate = Carbon::createFromFormat('d/m/Y', $dob);
        } catch (\Exception $e) {
            try {
                // Fallback to 'Y-m-d'
                $birthDate = Carbon::createFromFormat('Y-m-d', $dob);
            } catch (\Exception $e) {
                return "Invalid date format. Please use 'd/m/Y' or 'Y-m-d'.";
            }
        }

        $now = Carbon::now();

        // Calculate years and remaining days as integers
        $years = (int) $birthDate->diffInYears($now);
        $days = (int) $birthDate->addYears($years)->diffInDays($now);

        return "{$years} years {$days} days";
    }
}

