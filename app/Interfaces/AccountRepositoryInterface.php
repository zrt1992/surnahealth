<?php

namespace App\Interfaces;

interface AccountRepositoryInterface
{
    public function all();
    public function myAccounts();
    public function find($id);
    public function create(array $data);
    public function update(array $data,$id);
    public function delete($id);
    public function setDefaultAccount($id);
    
}
