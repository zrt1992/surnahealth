<?php

namespace App\Interfaces;
use App\Models\User;

interface PatientProfileSettingRepositoryInterface
{
    public function all();
    public function myProfileSetting();
    public function find($id);
    public function create(array $data);
    public function update($id, array $data);
    public function delete($id);
}
