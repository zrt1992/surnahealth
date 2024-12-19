<?php

namespace App\Repositories;

use App\Interfaces\MedicalDetailRepositoryInterface;
use App\Models\MedicalDetail;
use Carbon\Carbon;

class MedicalDetailRepository implements MedicalDetailRepositoryInterface
{
    public function all()
    {
        return MedicalDetail::all();
    }

    public function myMedicalDetail()
    {
        // MedicalDetail::where('user_id',getAuthUser()->id)->with('user')->get();
        $medicalDetail = MedicalDetail::where('user_id',auth()->user()->id)->first();
        return $medicalDetail;
    }

    public function find($id)
    {
        return MedicalDetail::findOrFail($id);
    }

    public function create(array $data)
    {
        $auth = getAuthUser();
        $formattedDate = Carbon::createFromFormat('d/m/Y', $data['end_date'])->format('Y-m-d');
        $data['user_id'] = $auth->id;
        $data['end_date'] = $formattedDate;
        // dd($data);
        return MedicalDetail::create($data);
    }

    public function update(array $data, MedicalDetail $medicalDetail)
    {
        $medicalDetail->update($data);
        return $medicalDetail;
    }

    public function delete($id)
    {
        $medicalDetail = MedicalDetail::find($id);
        if ($medicalDetail) {
            return $medicalDetail->delete();
        }
        return false;
    }
}
