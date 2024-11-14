<?php


if (!function_exists('getAuthUser')) {
    function getAuthUser()
    {
        return auth()->user();
    }
}