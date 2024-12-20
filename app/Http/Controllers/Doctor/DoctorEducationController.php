<?php

namespace App\Http\Controllers\Doctor;

use App\Http\Controllers\Controller;
use App\Interfaces\DoctorEducationRepositoryInterface;
use App\Models\DoctorEducation;
use App\Models\Specialization;
use App\Repositories\DoctorEducationRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class DoctorEducationController extends Controller
{

    private DoctorEducationRepositoryInterface $DoctorEducationRepository;
    public function __construct(DoctorEducationRepositoryInterface $DoctorEducationRepository)
    {
        $this->DoctorEducationRepository = $DoctorEducationRepository;
    }

    public function index()
    {
        $DoctorEducations = $this->DoctorEducationRepository->all();
        $specializations = Specialization::all();
        $auth = getAuthUser();
        return  view('doctor.doctor-education-settings', get_defined_vars());
    }

    public function create()
    {
        return view('DoctorEducations.create');
    }

    public function store(Request $request)
    {
        // dd($request);

        $request->validate([
            'certifications.*' => 'nullable|image|mimes:jpg,png,svg|max:4096',
            'medical_school.*' => 'required',
            'residency.*' => 'required',
        ]);

        foreach ($request->medical_school as $index => $medical_school) {

            $data = [
                'doctor_id' => getAuthUser()->id,
                'medical_school' => $request->medical_school[$index] ?? null,
                'residency' => $request->residency[$index] ?? null,
            ];
           
           
            $formType = $request->form_type[$index] ?? null; 
            if ($formType === 'update') {
                $this->DoctorEducationRepository->update($index, $data);
            } elseif ($formType === 'create') {
                $this->DoctorEducationRepository->create($data);
            } else {
                // Handle unexpected cases or log for debugging
                Log::warning("Unexpected form type for index {$index}");
            }
        }


        return redirect()->route('doctor-education-settings')->with('success', 'Doctor education updated successfully!');
    }


    public function show($id)
    {
        $DoctorEducation = $this->DoctorEducationRepository->find($id);
        return view('DoctorEducations.show', compact('DoctorEducation'));
    }

    public function edit($id)
    {
        $DoctorEducation = $this->DoctorEducationRepository->find($id);
        return view('DoctorEducations.edit', compact('DoctorEducation'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'certifications' => 'nullable|image|mimes:jpg,png,svg|max:4096',
            'medical_school' => 'required',
            'residency' => 'required',
        ]);

        $input = $request->all();
        $DoctorEducation = $this->DoctorEducationRepository->update($id, $input);

        if ($DoctorEducation) {
            return redirect()->route('doctor-education-settings')
                ->with('success', 'Doctor education updated successfully!');
        }

        return back()->with('error', 'Unable to update Doctor education.');
    }

    public function destroy($id)
    {

        $this->DoctorEducationRepository->delete($id);

        return redirect()->route('doctor-education-settings')->with('success', 'Doctor education deleted successfully!');
    }
}
