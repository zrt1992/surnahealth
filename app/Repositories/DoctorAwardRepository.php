<?php

namespace App\Repositories;

use App\Interfaces\DoctorAwardRepositoryInterface;
use App\Models\DoctorAward;

class DoctorAwardRepository implements DoctorAwardRepositoryInterface
{
    protected $model;

    public function __construct(DoctorAward $DoctorAward)
    {
        $this->model = $DoctorAward;
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
        $DoctorAward = $this->find($id);
        if ($DoctorAward) {
            $DoctorAward->update($data);
            return $DoctorAward;
        }

        return null;
    }

    public function delete($id)
    {
        $DoctorAward = $this->find($id);
        if ($DoctorAward) {
            return $DoctorAward->delete();
        }

        return false;
    }

    public function deleteWhere(array $conditions)
    {
        return $this->model::where($conditions)->delete();
    }
}
