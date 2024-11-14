<?php

namespace App\Http\Controllers\Patient;

use App\Http\Controllers\Controller;
use App\Interfaces\DependantRepositoryInterface;
use Illuminate\Http\Request;
use App\Models\Dependant;

class DependantController extends Controller
{
    protected $dependantRepo;

    public function __construct(DependantRepositoryInterface $dependantRepo)
    {
        $this->dependantRepo = $dependantRepo;
    }

    public function index()
    {
        $dependants = $this->dependantRepo->all();
        return view('dependent', compact('dependants'));
    }

    public function create()
    {
        return view('dependants.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string',
            'relationship' => 'required|string',
            'dob' => 'required',
            'gender' => 'required|string|in:male,female,other',
        ]);
        $this->dependantRepo->create($data);
        return redirect()->route('dependent')->with('success', 'Dependant created successfully.');
    }

    public function show($id)
    {
        $dependant = $this->dependantRepo->find($id);
        return view('dependants.show', compact('dependant'));
    }

    public function edit(Dependant $dependant)
    {
        return view('dependants.edit', compact('dependant'));
    }

    public function update(Request $request, $id)
    {
      
        $data = $request->validate([
            'profile_image' => 'string|nullable',
            'name' => 'string',
            'relationship' => 'string',
            'dob' => 'required',
            'gender' => 'string|in:male,female,other',
        ]);
        
        $this->dependantRepo->update($data, $id);
        return redirect()->route('dependent')->with('success', 'Dependant updated successfully.');
    }

    public function destroy(Dependant $dependant)
    {
        $this->dependantRepo->delete($dependant);
        return redirect()->route('dependent')->with('success', 'Dependant deleted successfully.');
    }
}
