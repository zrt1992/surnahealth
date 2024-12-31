<?php

namespace App\Http\Controllers\Doctor;

use App\Http\Controllers\Controller;
use App\Models\Appointment;
use App\Models\AppointmentRequests;
use Carbon\Carbon;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    public function index(Request $request)
    {
        $doctorId = auth()->user()->id;

        $dateRange = $request->input('date_range');
        $appointmentType = $request->input('appointment_type', []);
        $visitType = $request->input('visit_type', []);
        $searchName = $request->input('search_name');

        $appointmentsQuery = Appointment::where('doctor_id', $doctorId)
            ->with('user.patientAppointmentPreferences');


        if ($request->filled('search')) {
            $search = $request->input('search');
            $appointmentsQuery->where(function ($q) use ($search) {
                $q->orWhereHas('user', function ($subQuery) use ($search) {
                    $subQuery->where('name', 'LIKE', '%' . $search . '%');
                });
            });
        }

        if (!empty($appointmentType) && !in_array('All Type', $appointmentType)) {
            $appointmentsQuery->whereHas('user.patientAppointmentPreferences', function ($query) use ($appointmentType) {
                $query->where(function ($subQuery) use ($appointmentType) {
                    foreach ($appointmentType as $type) {
                        $typeColumn = str_replace(' ', '_', strtolower($type));
                        $subQuery->orWhere($typeColumn, 1);
                    }
                });
            });
        }

        if (!empty($searchName)) {
            $appointmentsQuery->whereHas('user', function ($query) use ($searchName) {
                $query->where('name', 'LIKE', '%' . $searchName . '%');
            });
        }

        // $appointments = $appointmentsQuery->get();
        $appointments = $appointmentsQuery->paginate(10); 
        $appointmentRejectedRequests = AppointmentRequests::where('status', 'rejected')
            ->where('doctor_id', $doctorId)
            ->get();
        $appointmentCompleted = $appointments->filter(function ($appointment) {
            return $appointment->status === 'completed' || Carbon::parse($appointment->end_date)->isPast();
        });

        $upcomingCount = $appointments->count();
        $rejectedCount = $appointmentRejectedRequests->count();
        $completedCount = $appointmentCompleted->count();

        return view('appointments', get_defined_vars());
    }


    public function appointmentsGrid(Request $request)
    {
        $doctorId = auth()->user()->id;

        $dateRange = $request->input('date_range');
        $appointmentType = $request->input('appointment_type', []);
        $visitType = $request->input('visit_type', []);
        $searchName = $request->input('search_name');

        $appointmentsQuery = Appointment::where('doctor_id', $doctorId)
            ->with('user.patientAppointmentPreferences');


        if ($request->filled('search')) {
            $search = $request->input('search');
            $appointmentsQuery->where(function ($q) use ($search) {
                $q->orWhereHas('user', function ($subQuery) use ($search) {
                    $subQuery->where('name', 'LIKE', '%' . $search . '%');
                });
            });
        }

        if (!empty($appointmentType) && !in_array('All Type', $appointmentType)) {
            $appointmentsQuery->whereHas('user.patientAppointmentPreferences', function ($query) use ($appointmentType) {
                $query->where(function ($subQuery) use ($appointmentType) {
                    foreach ($appointmentType as $type) {
                        $typeColumn = str_replace(' ', '_', strtolower($type));
                        $subQuery->orWhere($typeColumn, 1);
                    }
                });
            });
        }

        if (!empty($searchName)) {
            $appointmentsQuery->whereHas('user', function ($query) use ($searchName) {
                $query->where('name', 'LIKE', '%' . $searchName . '%');
            });
        }

        $appointments = $appointmentsQuery->get();
        $appointmentRejectedRequests = AppointmentRequests::where('status', 'rejected')->where('doctor_id', auth()->user()->id)->get();
        $appointmentCompleted = $appointments->filter(function ($appointment) {
            return $appointment->status === 'completed' || Carbon::parse($appointment->end_date)->isPast();
        });

        $upcommingCount = $appointments->count();
        $rejectedCount = $appointmentRejectedRequests->count();
        $completedCount = $appointmentCompleted->count();
        return view('doctor-appointments-grid', get_defined_vars());
    }

    public function destroy($id)
    {
        // Use the model's static destroy method to delete by ID
        Appointment::destroy($id);

        return redirect()->back()->with('success', 'Appointment deleted successfully!');
    }
}
