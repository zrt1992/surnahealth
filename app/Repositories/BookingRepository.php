<?php

namespace App\Repositories;

use App\Interfaces\BookingRepositoryInterface;
use App\Models\Appointment;
use App\Models\AppointmentRequests;
use App\Models\User;

class BookingRepository implements BookingRepositoryInterface
{
    protected $model;

    public function __construct(AppointmentRequests $user)
    {
        $this->model = $user;
    }

    public function all()
    {
        return $this->model::all();
    }

    public function find($id)
    {
        return $this->model::find($id);
    }

    public function create(array $data)
    {
        $check = $this->model::where('user_id',getAuthUser()->id)->where('doctor_id',$data['doctor_id'])->first();
        if($check){
            return $message = 'You already have an appointment request for this doctor.';
        }
        
        $this->model::create($data);
        return  $message = 'Appointment requested successfully.';
    }

    public function update($id, array $data)
    {
        $data['status'] = 'pending';
        $user = $this->find($id);
        if ($user) {
            $user->update($data);
            return $user;
        }

        return null;
    }

    public function delete($id)
    {
        $user = $this->find($id);
        if ($user) {
            return $user->delete();
        }

        return false;
    }

    public function getDoctorAppointmentRequests()
    {
        return $this->model::where('doctor_id',getAuthUser()->id)->with('user','doctor','slot')->get();
    }

    public function accept($id)
    {
        $appointment = AppointmentRequests::findOrFail($id);
        if ($appointment) {
            $appointment->update([
                'status' => 'accepted',
            ]);
            return $message = 'Appointment rejected successfully.';
        }
       return null;
    }

    public function reject(array $data)
    {
        $data['status'] = 'rejected';
        $appointment = AppointmentRequests::findOrFail($data['appointment_request_id']);
      
        if ($appointment) {
            $appointment->update($data);
            return $message = 'Appointment rejected successfully.';
        }
        return  $error = 'Not Found';
    }

    public function getPatientAppointments($request)
    {
        $query = Appointment::where('user_id', getAuthUser()->id)
        ->with('doctor', 'user');

    // Apply search and filters dynamically
    if ($request->filled('search')) {
        $search = $request->input('search');
        $query->where(function ($q) use ($search) {
            $q->whereHas('doctor', function ($subQuery) use ($search) {
                $subQuery->where('name', 'LIKE', '%' . $search . '%');
            })->orWhereHas('user', function ($subQuery) use ($search) {
                $subQuery->where('name', 'LIKE', '%' . $search . '%');
            });
        });
    }

    if ($request->filled('status')) {
        $query->whereIn('status', $request->input('status'));
    }

    if ($request->filled('date_range')) {
        $dates = explode(' - ', $request->input('date_range'));
        $query->whereBetween('appointment_date', [$dates[0], $dates[1]]);
    }

    // Execute the query to get filtered appointments
    return $data = $query->paginate(10);
         
    }


}
