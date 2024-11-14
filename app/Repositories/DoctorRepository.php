<?php

namespace App\Repositories;

use App\Interfaces\DoctorRepositoryInterface;
use App\Models\User;

class DoctorRepository implements DoctorRepositoryInterface
{
    protected $model;

    public function __construct(User $user)
    {
        $this->model = $user;
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

    public function update($id, array $data)
    {
        $user = $this->find($id);
        if ($user) {
            $user->update($data);
            return $user;
        }

        return null;
    }

    public function delete($id)
    {
        $user = $this->find($id);
        if ($user) {
            return $user->delete();
        }

        return false;
    }
}
