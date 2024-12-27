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
        $doctorId = auth()->id(); 
        $appointmentType = $request->input('appointment_type', []);

        $query = User::query()
        ->whereHas('appointments', function ($q) use ($doctorId, $appointmentType) {
            $q->where('doctor_id', $doctorId);
    
            if (!empty($appointmentType) && !in_array('All Type', $appointmentType)) {
                $q->whereHas('user.patientAppointmentPreferences', function ($preferencesQuery) use ($appointmentType) {
                    $preferencesQuery->where(function ($subQuery) use ($appointmentType) {
                        foreach ($appointmentType as $type) {
                            $typeColumn = str_replace(' ', '_', strtolower($type));
                            $subQuery->orWhere($typeColumn, 1);
                        }
                    });
                });
            }
        })
        ->with([
            'appointments' => function ($q) use ($doctorId) {
                $q->where('doctor_id', $doctorId); 
            },
            'patientAppointmentPreferences' 
        ]);
    

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

        $appointments = $query->get();
        $totalPatients = $appointments->count();
        
        return view('doctor.my-patients',get_defined_vars());
    }


    public function patientProfile($id = null)
    {
        $patient =  User::with('appointments.doctor', 'appointments.slot', 'medicalDetails', 'prescriptions.doctor')->find($id);

        return view('doctor.patient-profile', get_defined_vars());
    }
}
