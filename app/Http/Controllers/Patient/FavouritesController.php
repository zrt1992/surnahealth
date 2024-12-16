<?php

namespace App\Http\Controllers\Patient;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class FavouritesController extends Controller
{
    public function index(Request $request)
{
    $query = User::query()->with('specializations');

    // Filter by doctor role
    $query->whereHas('roles', function ($q) {
        $q->where('name', 'doctor'); // Change 'doctor' to match your role name
    });

    // Search block
    if ($request->filled('search')) {
        $search = $request->input('search');

        $query->where(function ($q) use ($search) {
            $q->where('name', 'LIKE', '%' . $search . '%')
              ->orWhere('city', 'LIKE', '%' . $search . '%')
              ->orWhere('known_languages', 'LIKE', '%' . $search . '%')
              ->orWhereHas('specializations', function ($subQuery) use ($search) {
                  $subQuery->where('name', 'LIKE', '%' . $search . '%');
              });
             
        });
    }

    // Filter by multiple locations
    if ($request->filled('location')) {
        $query->whereIn('city', $request->input('location'));
    }
    if ($request->filled('language')) {
        $query->whereIn('known_languages', $request->input('language'));
    }
  
    if ($request->filled('specialization')) {
        $specializations = $request->input('specialization');
        $query->whereHas('specializations', function ($subQuery) use ($specializations) {
            $subQuery->whereIn('name', $specializations);
        });
    }
   
    // Get the filtered or unfiltered users
    $data = $query->get();

    // Pass the data and search term to the view
    return view('favourites', compact('data'));
}

}
