<?php

namespace App\Http\Controllers\Doctor;

use App\Http\Controllers\Controller;
use App\Interfaces\DoctorExperienceRepositoryInterface;
use App\Models\DoctorExperience;
use App\Models\Specialization;
use App\Repositories\DoctorExperienceRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class DoctorExperienceController extends Controller
{

    private DoctorExperienceRepositoryInterface $DoctorExperienceRepository;
    public function __construct(DoctorExperienceRepositoryInterface $DoctorExperienceRepository)
    {
        $this->DoctorExperienceRepository = $DoctorExperienceRepository;
    }

    public function index()
    {
        $DoctorExperiences = $this->DoctorExperienceRepository->all();
        $specializations = Specialization::all();
        $auth = getAuthUser();
        return  view('doctor.doctor-experience-settings', get_defined_vars());
    }

    public function create()
    {
        return view('DoctorExperiences.create');
    }

    public function store(Request $request)
    {
        // dd($request);

        $request->validate([
            'hospital_logo.*' => 'nullable|image|mimes:jpg,png,svg|max:4096',
            'hospital.*' => 'required',
            'year_of_experience.*' => 'required',
            'location.*' => 'required',
            'job_description.*' => 'required',
            'start_date.*' => 'required',
        ]);

        foreach ($request->hospital as $index => $hospital) {

            $data = [
                'doctor_id' => getAuthUser()->id,
                'title' => $request->title[$index] ?? null,
                'hospital' => $request->hospital[$index] ?? null,
                'year_of_experience' => $request->year_of_experience[$index] ?? null,
                'location' => $request->location[$index] ?? null,
                'employment_type' => $request->employment_type[$index] ?? null,
                'job_description' => $request->job_description[$index] ?? null,
                'start_date' => $request->start_date[$index] ?? null,
                'end_date' => $request->end_date[$index] ?? null,
            ];
            // $data['row_index'] = $index;
           
            $formType = $request->form_type[$index] ?? null; // Match by $index directly
            if ($formType === 'update') {
                // Update existing record
                $this->DoctorExperienceRepository->update($index, $data);
            } elseif ($formType === 'create') {
                // Create new record
                $this->DoctorExperienceRepository->create($data);
            } else {
                // Handle unexpected cases or log for debugging
                Log::warning("Unexpected form type for index {$index}");
            }
        }


        return redirect()->route('doctor-experience-settings')->with('success', 'Doctor experience updated successfully!');
    }


    public function show($id)
    {
        $DoctorExperience = $this->DoctorExperienceRepository->find($id);
        return view('DoctorExperiences.show', compact('DoctorExperience'));
    }

    public function edit($id)
    {
        $DoctorExperience = $this->DoctorExperienceRepository->find($id);
        return view('DoctorExperiences.edit', compact('DoctorExperience'));
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
        $DoctorExperience = $this->DoctorExperienceRepository->update($id, $input);

        if ($DoctorExperience) {
            return redirect()->route('doctor-experience-settings')
                ->with('success', 'Doctor experience updated successfully!');
        }

        return back()->with('error', 'Unable to update Doctor experience.');
    }

    public function destroy($id)
    {

        $this->DoctorExperienceRepository->delete($id);

        return redirect()->route('doctor-experience-settings')->with('success', 'Doctor experience deleted successfully!');
    }
}
