<?php

namespace App\Http\Controllers\Doctor;

use App\Http\Controllers\Controller;
use App\Interfaces\DoctorExperienceRepositoryInterface;
use App\Models\Specialization;
use App\Repositories\DoctorExperienceRepository;
use Illuminate\Http\Request;

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
        $auth=getAuthUser();
        return  view('doctor-experience-settings',get_defined_vars());
    }

    public function create()
    {
        return view('DoctorExperiences.create');
    }

    public function store(Request $request)
    {
        dd($request);
        $request->validate([
            'hospital_logo' => 'nullable|image|mimes:jpg,png,svg|max:4096',
            'hospital'=> 'required',
            'year_of_experience'=> 'required',
            'location'=> 'required',
            'job_description'=> 'required',
            'start_date'=> 'required', 
        ]);
        $this->DoctorExperienceRepository->create($request->all());

        return redirect()->route('doctor-experience-settings')->with('success', 'Doctor experience created successfully!');
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
            'hospital'=> 'required',
            'year_of_experience'=> 'required',
            'location'=> 'required',
            'job_description'=> 'required',
            'start_date'=> 'required', 
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
