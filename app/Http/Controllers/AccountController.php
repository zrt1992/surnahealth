<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Interfaces\AccountRepositoryInterface;
use Illuminate\Http\Request;
use App\Models\Account;

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
        return view('patient.patient-accounts', get_defined_vars());
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
        return redirect()->route('patient-accounts')->with('success', 'Account created successfully.');
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
        return redirect()->route('patient-accounts')->with('success', 'Account updated successfully.');
    }

    public function destroy($id)
    {
        $this->AccountRepo->delete($id);
        return redirect()->route('patient-accounts')->with('success', 'Account deleted successfully.');
    }
}
