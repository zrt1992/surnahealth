<?php

namespace App\Repositories;

use App\Interfaces\DoctorClinicsRepositoryInterface;
use App\Models\DoctorClinic;
use App\Models\DoctorClinicGallery;

class DoctorClinicsRepository implements DoctorClinicsRepositoryInterface
{
    protected $model;

    public function __construct(DoctorClinic $DoctorClinics)
    {
        $this->model = $DoctorClinics;
    }

    public function all()
    {
        return $this->model::all();
    }

    public function myClinics()
    {
        return $this->model::where('doctor_id',getAuthUser()->id)->with('gallery')->get();
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
        $DoctorClinics = $this->find($id);
        if ($DoctorClinics) {
            $DoctorClinics->update($data);
            return $DoctorClinics;
        }

        return null;
    }

    public function delete($id)
    {
        $DoctorClinics = $this->find($id);
        if ($DoctorClinics) {
          
            $DoctorClinics->gallery()->delete();
            return $DoctorClinics->delete();
        }

        return false;
    }

    public function removeGallery($id)
    {
        $DoctorClinicsGallery = DoctorClinicGallery::find($id);
        if ($DoctorClinicsGallery) {
            return $DoctorClinicsGallery->delete();
        }

        return false;
    }

    public function deleteWhere(array $conditions)
    {
        return $this->model::where($conditions)->delete();
    }
}
