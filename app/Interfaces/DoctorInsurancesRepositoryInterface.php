<?php

namespace App\Interfaces;

interface DoctorInsurancesRepositoryInterface
{
    public function all();
    public function find($id);
    public function create(array $data);
    public function update($id, array $data);
    public function delete($id);
    public function deleteWhere(array $data);

}
