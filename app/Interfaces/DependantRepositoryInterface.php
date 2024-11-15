<?php

namespace App\Interfaces;

use App\Models\Dependant;

interface DependantRepositoryInterface
{
    public function all();
    public function find($id);
    public function create(array $data);
    public function update(array $data,$id);
    public function delete(Dependant $dependant);
}
