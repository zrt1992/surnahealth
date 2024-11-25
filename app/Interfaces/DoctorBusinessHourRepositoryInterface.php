<?php

namespace App\Interfaces;

interface DoctorBusinessHourRepositoryInterface
{
    public function all();
    public function find($id);
    public function create(array $data);
    public function update($id, array $data);
    public function updateOrCreate(array $condition,array $data);
    public function delete($id);
    public function deleteWhere(array $data);

}
