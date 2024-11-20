<?php

namespace App\Repositories;

use App\Interfaces\DoctorEducationRepositoryInterface;
use App\Models\DoctorEducation;

class DoctorEducationRepository implements DoctorEducationRepositoryInterface
{
    protected $model;

    public function __construct(DoctorEducation $DoctorEducation)
    {
        $this->model = $DoctorEducation;
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
        $DoctorEducation = $this->find($id);
        if ($DoctorEducation) {
            $DoctorEducation->update($data);
            return $DoctorEducation;
        }

        return null;
    }

    public function delete($id)
    {
        $DoctorEducation = $this->find($id);
        if ($DoctorEducation) {
            return $DoctorEducation->delete();
        }

        return false;
    }

    public function deleteWhere(array $conditions)
    {
        return $this->model::where($conditions)->delete();
    }
}
