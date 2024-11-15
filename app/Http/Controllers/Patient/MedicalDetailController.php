<?php

namespace App\Http\Controllers\Patient;

use App\Http\Controllers\Controller;
use App\Interfaces\MedicalDetailRepositoryInterface;
use Illuminate\Http\Request;
use App\Models\MedicalDetail;

class MedicalDetailController extends Controller
{
    protected $medicalDetailRepo;

    public function __construct(MedicalDetailRepositoryInterface $medicalDetailRepo)
    {
        $this->medicalDetailRepo = $medicalDetailRepo;
    }

    public function index()
    {
        $medicalDetails = $this->medicalDetailRepo->myMedicalDetail();
        return view('medical-details', compact('medicalDetails'));
    }

    public function create()
    {
        return view('medical_details.create');
    }

    public function store(Request $request)
    {
     
        $data = $request->validate([
            'bmi' => 'required',
            'heart_rate' => 'required',
            'weight' => 'required',
            'fbc' => 'required',
            'end_date' => 'required',
        ]);
    
        $this->medicalDetailRepo->create($data);
        return redirect()->route('medical-details')->with('success', 'Medical detail created successfully.');
    }

    public function show($id)
    {
        $medicalDetail = $this->medicalDetailRepo->find($id);
        return view('medical_details.show', compact('medicalDetail'));
    }

    public function edit(MedicalDetail $medicalDetail)
    {
        return view('medical_details.edit', compact('medicalDetail'));
    }

    public function update(Request $request, MedicalDetail $medicalDetail)
    {
        $data = $request->validate([
            'patient_id' => 'exists:patients,id',
            'bmi' => 'numeric|nullable',
            'heart_rate' => 'integer|nullable',
            'weight' => 'numeric|nullable',
            'fbc' => 'string|nullable',
            'end_date' => 'date',
        ]);

        $this->medicalDetailRepo->update($data, $medicalDetail);
        return redirect()->route('medical-details')->with('success', 'Medical detail updated successfully.');
    }

    public function destroy($id)
    {
        $this->medicalDetailRepo->delete($id);
        return redirect()->route('medical-details')->with('success', 'Medical detail deleted successfully.');
    }
}
