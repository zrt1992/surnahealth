<?php

namespace App\Interfaces;

use App\Models\MedicalDetail;

interface MedicalDetailRepositoryInterface
{
    public function all();
    public function myMedicalDetail();
    public function find($id);
    public function create(array $data);
    public function update(array $data, MedicalDetail $medicalDetail);
    public function delete($id);
}
