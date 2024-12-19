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
        $medicalDetail = $this->medicalDetailRepo->myMedicalDetail();

        return view('medical-details', get_defined_vars());
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

    public function update(Request $request,  $medicalDetailId = null)
    {
        $data = $request->validate([
            'bp' => 'string|nullable',
            'heart_rate' => 'integer|nullable',
            'glucose' => 'string|nullable',
            'body_temperature' => 'numeric|nullable',
            'spo2' => 'string|nullable',
            'bmi' => 'string|nullable',
            'existing_medical_conditions' => 'string|nullable',
            'medications_currently_using' => 'string|nullable',
            'primarly_health_concern' => 'string|nullable',
            'allergies' => 'string|nullable',
            'cardiac_history' => 'string|nullable',
        ]);

        $medicalDetail =  MedicalDetail::find($medicalDetailId);
        if ($medicalDetail) {
            $medicalDetail->update($data);
        } else {
            $data['user_id'] = auth()->id();
            MedicalDetail::create($data);
        }

        return redirect()->route('medical-details')->with('success', 'Medical detail saved successfully.');
    }


    public function destroy($id)
    {
        $this->medicalDetailRepo->delete($id);
        return redirect()->route('medical-details')->with('success', 'Medical detail deleted successfully.');
    }
}
