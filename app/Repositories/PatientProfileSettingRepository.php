<?php

namespace App\Repositories;

use App\Interfaces\PatientProfileSettingRepositoryInterface;
use App\Models\PatientProfileSetting;
use App\Models\User;
use Carbon\Carbon;

class PatientProfileSettingRepository implements PatientProfileSettingRepositoryInterface
{
    public function all()
    {
        return User::all();
    }

    public function myProfileSetting()
    {
        return User::where('id',getAuthUser()->id)->first();
    }

    public function find($id)
    {
        return User::findOrFail($id);
    }

    public function create(array $data)
    {
        $auth = getAuthUser();
        $formattedDate = Carbon::createFromFormat('d/m/Y', $data['end_date'])->format('Y-m-d');
        $data['user_id'] = $auth->id;
        $data['end_date'] = $formattedDate;
        // dd($data);
        return User::create($data);
    }

    public function update($id, array $data)
{
    $patientProfile = User::find($id);
    if (!$patientProfile) {
        return false;
    }
    return $patientProfile->update($data);
}

    public function delete($id)
    {
        $PatientProfileSetting = User::find($id);
        if ($PatientProfileSetting) {
            return $PatientProfileSetting->delete();
        }
        return false;
    }
}
