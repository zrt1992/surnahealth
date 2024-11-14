<?php

namespace App\Repositories;

use App\Interfaces\MedicalRecordRepositoryInterface;
use App\Models\MedicalRecord;
use Carbon\Carbon;

class MedicalRecordRepository implements MedicalRecordRepositoryInterface
{
    public function all()
    {
        return MedicalRecord::all();
    }

    public function find($id)
    {
        return MedicalRecord::findOrFail($id);
    }

    public function create(array $data)
    { 
      
        $auth = getAuthUser();
        $formattedDob = Carbon::createFromFormat('d/m/Y', $data['start_date'])->format('Y-m-d');
        $data['user_id'] = $auth->id;
        $data['start_date'] = $formattedDob;
       
        return MedicalRecord::create($data);
    }

    public function update(array $data,$id)
    {
        $formattedDob = Carbon::createFromFormat('d/m/Y', $data['start_date'])->format('Y-m-d');
        $data['start_date'] = $formattedDob;
        $medicalRecord=MedicalRecord::findOrFail($id);
        $medicalRecord->update($data);
        return $medicalRecord;
    }

    public function delete($id)
    {
        $medicalRecord = MedicalRecord::find($id);
        if ($medicalRecord) {
            return $medicalRecord->delete();
        }
        return false;
    }
}
