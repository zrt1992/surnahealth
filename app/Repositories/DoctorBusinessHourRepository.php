<?php

namespace App\Repositories;

use App\Interfaces\DoctorBusinessHourRepositoryInterface;
use App\Models\DoctorBusinessHour;

class DoctorBusinessHourRepository implements DoctorBusinessHourRepositoryInterface
{
    protected $model;

    public function __construct(DoctorBusinessHour $DoctorBusinessHour)
    {
        $this->model = $DoctorBusinessHour;
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
        $DoctorBusinessHour = $this->find($id);
        if ($DoctorBusinessHour) {
            $DoctorBusinessHour->update($data);
            return $DoctorBusinessHour;
        }

        return null;
    }

    public function updateOrCreate(array $conditions, array $data)
    {
        return DoctorBusinessHour::updateOrCreate($conditions, $data);
    }

    public function delete($id)
    {
        $DoctorBusinessHour = $this->find($id);
        if ($DoctorBusinessHour) {
            return $DoctorBusinessHour->delete();
        }

        return false;
    }

    public function deleteWhere(array $conditions)
    {
        return $this->model::where($conditions)->delete();
    }
}
