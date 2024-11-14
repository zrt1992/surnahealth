<?php

namespace App\Repositories;

use App\Interfaces\DependantRepositoryInterface;
use App\Models\Dependant;
use Carbon\Carbon;

class DependantRepository implements DependantRepositoryInterface
{
    public function all()
    {
        return Dependant::all();
    }

    public function find($id)
    {
        return Dependant::findOrFail($id);
    }

    public function create(array $data)
    {

        $auth = getAuthUser();
        $formattedDob = Carbon::createFromFormat('d/m/Y', $data['dob'])->format('Y-m-d');
        $data['dob'] = $formattedDob;
        $data['user_id'] = $auth->id;

        return Dependant::create($data);
    }

    public function update(array $data,$id)
    {
        $formattedDob = Carbon::createFromFormat('d/m/Y', $data['dob'])->format('Y-m-d');
        $data['dob'] = $formattedDob;
        $dependant=Dependant::findOrFail($id);
        $dependant->update($data);
        return $dependant;
    }

    public function delete(Dependant $dependant)
    {
        $dependant->delete();
    }
}
