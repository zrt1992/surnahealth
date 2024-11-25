<?php

namespace App\Repositories;

use App\Interfaces\DoctorInsurancesRepositoryInterface;
use App\Models\DoctorInsurances;

class DoctorInsurancesRepository implements DoctorInsurancesRepositoryInterface
{
    protected $model;

    public function __construct(DoctorInsurances $DoctorInsurances)
    {
        $this->model = $DoctorInsurances;
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
        $DoctorInsurances = $this->find($id);
        if ($DoctorInsurances) {
            $DoctorInsurances->update($data);
            return $DoctorInsurances;
        }

        return null;
    }

    public function delete($id)
    {
        $DoctorInsurances = $this->find($id);
        if ($DoctorInsurances) {
            return $DoctorInsurances->delete();
        }

        return false;
    }

    public function deleteWhere(array $conditions)
    {
        return $this->model::where($conditions)->delete();
    }
}
