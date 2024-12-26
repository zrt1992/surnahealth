<?php

namespace App\Interfaces;

interface BookingRepositoryInterface
{
    public function all();
    public function find($id);
    public function create(array $data);
    public function update($id, array $data);
    public function delete($id);

    public function getDoctorAppointmentRequests();
    public function accept($id);
    public function reject(array $data);

    public function getPatientAppointments($request);
    
}
