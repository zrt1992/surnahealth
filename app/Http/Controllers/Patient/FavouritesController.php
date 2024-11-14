<?php

namespace App\Http\Controllers\Patient;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class FavouritesController extends Controller
{
    public function index()
    {
        $data = User::whereHas('roles', function($query) {
            $query->where('name', 'doctor'); // You can change 'doctor' to match your role name
        })->get();
        return view('favourites', get_defined_vars());
    }
}
