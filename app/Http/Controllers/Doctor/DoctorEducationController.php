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
        return  view('doctor-education-settings', get_defined_vars());
    }

    public function create()
    {
        return view('DoctorEducations.create');
    }

    public function store(Request $request)
    {
        // dd($request);

        $request->validate([
            'logo.*' => 'nullable|image|mimes:jpg,png,svg|max:4096',
            'name_of_institution.*' => 'required',
            'course.*' => 'required',
            'start_date.*' => 'required',
            'no_of_years.*' => 'required',
            'description.*' => 'required',
        ]);

        foreach ($request->name_of_institution as $index => $name_of_institution) {

            $data = [
                'doctor_id' => getAuthUser()->id,
                'name_of_institution' => $request->name_of_institution[$index] ?? null,
                'course' => $request->course[$index] ?? null,
                'start_date' => $request->start_date[$index] ?? null,
                'end_date' => $request->end_date[$index] ?? null,
                'no_of_years' => $request->no_of_years[$index] ?? null,
                'description' => $request->description[$index] ?? null,
            ];
            // $data['row_index'] = $index;
           
            $formType = $request->form_type[$index] ?? null; // Match by $index directly
            if ($formType === 'update') {
                // Update existing record
                $this->DoctorEducationRepository->update($index, $data);
            } elseif ($formType === 'create') {
                // Create new record
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
            'hospital_logo' => 'nullable|image|mimes:jpg,png,svg|max:4096',
            'hospital' => 'required',
            'year_of_experience' => 'required',
            'location' => 'required',
            'job_description' => 'required',
            'start_date' => 'required',
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
