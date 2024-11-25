<?php

namespace App\Interfaces;

interface DoctorClinicsRepositoryInterface
{
    public function all();
    public function myClinics();
    public function find($id);
    public function create(array $data);
    public function update($id, array $data);
    public function delete($id);
    public function removeGallery($id);
    public function deleteWhere(array $data);

}
