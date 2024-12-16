<?php

namespace App\Repositories;

use App\Interfaces\AvailableTimmingRepositoryInterface;
use App\Models\AvailableTimming;

class AvailableTimmingRepository implements AvailableTimmingRepositoryInterface
{
    protected $model;

    public function __construct(AvailableTimming $availableTimming)
    {
        $this->model = $availableTimming;
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
        return $this->model::create($data);
    }

    public function update( array $data)
{
    unset($data['_token']);
    if (isset($data['select_clinic']) && $data['select_clinic']) {
      
        $updated = $this->model::where('user_id', getAuthUser()->id)
                        ->where('availability_type', 'clinic')
                        ->update($data);
    } else {
       
        $updated =  $this->model::where('user_id', getAuthUser()->id)
                        ->where('availability_type', '!=', 'clinic')
                        ->update($data);
    }
   
   


   
    return $updated;
}


    public function delete($id)
    {
        $availableTimming = $this->find($id);
        if ($availableTimming) {
            return $availableTimming->delete();
        }

        return false;
    }
}
