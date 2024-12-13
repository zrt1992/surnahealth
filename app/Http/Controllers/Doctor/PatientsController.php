<?php

namespace App\Http\Controllers\Doctor;

use App\Http\Controllers\Controller;
use App\Models\Appointment;
use App\Models\User;
use Illuminate\Http\Request;

class PatientsController extends Controller
{
    public function index(Request $request)
    {
        $doctorId = auth()->id(); // Get the logged-in doctor's ID

        // Base query for users who have appointments with the logged-in doctor
        $query = User::query()->whereHas('appointments', function ($q) use ($doctorId) {
            $q->where('doctor_id', $doctorId);
        })->with(['appointments' => function ($q) use ($doctorId) {
            $q->where('doctor_id', $doctorId); // Fetch only relevant appointments
        }]);

        // Search block
        if ($request->filled('search')) {
            $search = $request->input('search');

            $query->where(function ($q) use ($search) {
                $q->where('name', 'LIKE', '%' . $search . '%')
                    ->orWhere('city', 'LIKE', '%' . $search . '%')
                    ->orWhere('known_languages', 'LIKE', '%' . $search . '%');
                // ->orWhereHas('specializations', function ($subQuery) use ($search) {
                //     $subQuery->where('name', 'LIKE', '%' . $search . '%');
                // });
            });
        }

        // Filter by multiple locations
        if ($request->filled('location')) {
            $query->whereIn('city', $request->input('location'));
        }

        // Filter by languages
        if ($request->filled('language')) {
            $query->whereIn('known_languages', $request->input('language'));
        }

        // Filter by specializations
        if ($request->filled('specialization')) {
            $specializations = $request->input('specialization');
            $query->whereHas('specializations', function ($subQuery) use ($specializations) {
                $subQuery->whereIn('name', $specializations);
            });
        }

        $appointments = $query->get();
        $totalPatients = $appointments->count();
        
        return view('my-patients',get_defined_vars());
    }


    public function patientProfile($id = null)
    {
        $patient =  User::with('appointments.doctor', 'appointments.slot', 'medicalDetails', 'prescriptions.doctor')->find($id);

        return view('doctor.patient-profile', get_defined_vars());
    }
}
