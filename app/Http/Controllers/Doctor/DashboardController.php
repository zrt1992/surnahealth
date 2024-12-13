<?php

namespace App\Http\Controllers\Doctor;

use App\Http\Controllers\Controller;
use App\Models\Appointment;
use Carbon\Carbon;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * landing page of doctor dashboard
     */
    public function index(Request $request)
    {
        $doctorId = auth()->user()->id;
        $today = Carbon::today();
        $yesterday = Carbon::yesterday();
        $lastWeek = Carbon::now()->subWeek();

        $appointments = Appointment::where('doctor_id',auth()->user()->id)->with('user','slot')->get();
        $totalPatients = $appointments->count();
        $patientsToday = $appointments->where('created_at', '>=', $today)->count();
        $patientsYesterday = $appointments->whereBetween('created_at', [$yesterday, $today->copy()->subSecond()])->count();
        $patientsLastWeek = $appointments->whereBetween('created_at', [$lastWeek, $today->copy()->subSecond()])->count();
    
        // Calculate percentage changes
        $change = fn($current, $previous) => $previous ? round((($current - $previous) / $previous) * 100, 2) : 0;
        $patientsTodayChange = $change($patientsToday, $patientsYesterday);
        $appointmentsTodayChange = $change($patientsToday, $patientsYesterday);
        $patientsLastWeekChange = $change($totalPatients, $patientsLastWeek);

        return view('doctor.doctor-dashboard',get_defined_vars());
    }
}
