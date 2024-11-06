<?php

namespace App\Http\Controllers\Doctor;

use App\Http\Controllers\Controller;
use App\Http\Requests\doctor\appointmentSlotsRequest;
use App\Models\Doctor\DoctorSchedule;
use Carbon\Carbon;
use DateTime;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    /**
     * list of doctor appointments
     */
    public function appointmentsList(Request $request)
    {
        return view('doctor.appointments.appointments');
    }

    /**
     * doctor's available timing
     */
    public function doctorAvailableTimings(Request $request)
    {
        // dd('hu');
        $doctorSlotsMonday = DoctorSchedule::where('user_id',$request->user()->id)->where('day','monday')->get();
        return view('doctor.appointments.available-timings',compact('doctorSlotsMonday'));
    }

    /**
     * doctor set appointment slots
     */
    public function setAppointmentSlot(appointmentSlotsRequest $request)
    {
        try {
            //code...
            $startTime = Carbon::createFromFormat('H:i', $request->start_time);
            $endTime = Carbon::createFromFormat('H:i', $request->end_time);
            $slotDuration = $request->appointment_interval;
            // dd($slotDuration);
            if ($startTime->greaterThanOrEqualTo($endTime)) {
                return back()->with('error', 'Start time must be earlier than end time.');
            }
            
            $slots = $this->generateTimeSlots($startTime, $endTime, $slotDuration);
            
            // dd($slots,$request->all());
            // dd($slots);
            foreach ($slots as $slotTime) {
                DoctorSchedule::create([
                    'user_id' => $request->user()->id,
                    'day' => $request->day,
                    'slot_start_time' => $slotTime,
                    'appointment_interval' => $slotDuration,
                    'status' => 'available',  // Initially, slots are available
                ]);
            }
            
            return redirect()->back()->with('success', 'Slots generated successfully.');
        } catch (\Throwable $th) {
            //throw $th;
            return redirect()->back()->with('error', $th->getMessage());
        }
            
    }



    private function generateTimeSlots(Carbon $startTime, Carbon $endTime, $slotDuration)
    {
        $slots = [];
        $currentSlotTime = $startTime;

        // Generate slots until we reach the end time
        while ($currentSlotTime->lessThan($endTime)) {
            // Add the current slot time to the slots array
            $slots[] = $currentSlotTime->format('H:i');
            
            // Move the current slot time forward by the slot duration
            $currentSlotTime->addMinutes((int)$slotDuration);
        }

        return $slots;
    }
}
