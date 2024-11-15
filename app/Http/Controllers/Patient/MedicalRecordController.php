<?php

namespace App\Http\Controllers\Patient;

use App\Http\Controllers\Controller;
use App\Interfaces\MedicalRecordRepositoryInterface;
use Illuminate\Http\Request;
use App\Models\MedicalRecord;

class MedicalRecordController extends Controller
{
    protected $medicalRecordRepo;

    public function __construct(MedicalRecordRepositoryInterface $medicalRecordRepo)
    {
        $this->medicalRecordRepo = $medicalRecordRepo;
    }

    public function index()
    {
        $medicalRecords = $this->medicalRecordRepo->all();
        return view('medical-records', compact('medicalRecords'));
    }

    public function create()
    {
        return view('medical_records.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|string',
            'patient' => 'required',
            'start_date' => 'required',
            'hospital_name' => 'nullable|string',
            'symptoms' => 'required|string',
            
        ]);
        $this->medicalRecordRepo->create($data);
        return redirect()->route('medical-records')->with('success', 'Medical record created successfully.');
    }

    public function show($id)
    {
        $medicalRecord = $this->medicalRecordRepo->find($id);
        return view('medical_records.show', compact('medicalRecord'));
    }

    public function edit(MedicalRecord $medicalRecord)
    {
        return view('medical_records.edit', compact('medicalRecord'));
    }

    public function update(Request $request,$id)
    {
        $data = $request->validate([
            'title' => 'string',
            'patient_id' => 'exists:patients,id',
            'start_date' => 'date',
            'hospital_name' => 'string|nullable',
            'symptoms' => 'string',
            'report' => 'string|nullable',
        ]);

        $this->medicalRecordRepo->update($data, $id);
        return redirect()->route('medical-records')->with('success', 'Medical record updated successfully.');
    }

    public function destroy($id)
    {
        $this->medicalRecordRepo->delete($id);
        return redirect()->route('medical-records')->with('success', 'Medical record deleted successfully.');
    }
}
