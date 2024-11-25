<?php

namespace App\Repositories;

use App\Interfaces\DoctorExperienceRepositoryInterface;
use App\Models\DoctorExperience;

class DoctorExperienceRepository implements DoctorExperienceRepositoryInterface
{
    protected $model;

    public function __construct(DoctorExperience $DoctorExperience)
    {
        $this->model = $DoctorExperience;
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
        // dd($data);
        return $this->model::create($data);
    }

    public function update($id, array $data)
    {
        $DoctorExperience = $this->find($id);
        if ($DoctorExperience) {
            $DoctorExperience->update($data);
            return $DoctorExperience;
        }

        return null;
    }

    public function delete($id)
    {
        $DoctorExperience = $this->find($id);
        if ($DoctorExperience) {
            return $DoctorExperience->delete();
        }

        return false;
    }

    public function deleteWhere(array $conditions)
    {
        return $this->model::where($conditions)->delete();
    }
}
