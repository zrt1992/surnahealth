<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Interfaces\AccountRepositoryInterface;
use Illuminate\Http\Request;
use App\Models\Account;
use Spatie\Permission\Models\Role;

class AccountController extends Controller
{
    protected $AccountRepo;

    public function __construct(AccountRepositoryInterface $AccountRepo)
    {
        $this->AccountRepo = $AccountRepo;
    }

    public function index()
    {
        $accounts = $this->AccountRepo->myAccounts();
        $totalBalance = $accounts->where('default',1)->first();
        if (getAuthUser()->hasRole('patient')) {
            return view('patient.patient-accounts', get_defined_vars());
        } else {
            return view('accounts',get_defined_vars());
        }  
    }

    public function create()
    {
        return view('medical_details.create');
    }

    public function store(Request $request)
    {
     
        $data = $request->validate([
            'bank_name' => 'required',
            'branch_name' => 'required',
            'account_number' => 'required',
            'account_name' => 'required',
        ]);
    
        $this->AccountRepo->create($data);
        return redirect()->back()->with('success', 'Account created successfully.');
    }

    
    public function update(Request $request, Account $Account)
    {
        $data = $request->validate([
            'bank_name' => 'required',
            'branch_name' => 'required',
            'account_number' => 'required',
            'account_name' => 'required',
        ]);
        $this->AccountRepo->update($data, $Account);
        return redirect()->back()->with('success', 'Account updated successfully.');
    }

    public function destroy($id)
    {
        $this->AccountRepo->delete($id);
        return redirect()->back()->with('success', 'Account deleted successfully.');
    }

    public function setDefault($id)
{
    $this->AccountRepo->setDefaultAccount($id);
    return redirect()->back()->with('success', 'Default account updated successfully.');
}
}
