<?php

namespace App\Repositories;

use App\Interfaces\AccountRepositoryInterface;
use App\Models\Account;
use Carbon\Carbon;

class AccountRepository implements AccountRepositoryInterface
{
    public function all()
    {
        return Account::all();
    }

    public function myAccounts()
    {
        return Account::where('user_id',getAuthUser()->id)->get();
    }

    public function find($id)
    {
        return Account::findOrFail($id);
    }

    public function create(array $data)
    { 
      
        $auth = getAuthUser();
        $data['user_id'] = $auth->id;
        return Account::create($data);
    }

    public function update(array $data,$id)
    {
        $Account=Account::findOrFail($id);
        $Account->update($data);
        return $Account;
    }

    public function delete($id)
    {
        $Account = Account::find($id);
        if ($Account) {
            return $Account->delete();
        }
        return false;
    }

    public function setDefaultAccount($id)
    {
        $Account = Account::find($id);
        if ($Account) {
           
            $Account->default = true;
            Account::where('id', '!=', $id)->update(['default' => false]);
            return $Account->save();
        }
        return false;
    }
}
