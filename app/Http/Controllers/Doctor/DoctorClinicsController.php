<?php

namespace App\Http\Controllers\Doctor;

use App\Http\Controllers\Controller;
use App\Interfaces\DoctorClinicsRepositoryInterface;
use App\Models\Specialization;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class DoctorClinicsController extends Controller
{

    private DoctorClinicsRepositoryInterface $DoctorClinicsRepository;
    public function __construct(DoctorClinicsRepositoryInterface $DoctorClinicsRepository)
    {
        $this->DoctorClinicsRepository = $DoctorClinicsRepository;
    }

    public function index()
    {
        $doctorClinics = $this->DoctorClinicsRepository->myClinics();
        $auth = getAuthUser();
        return  view('doctor-clinics-settings', get_defined_vars());
    }

    public function create()
    {
        return view('DoctorClinicss.create');
    }

    public function store(Request $request)
    {
        

        $request->validate([
            'logo.*' => 'nullable|image|mimes:jpg,png,svg|max:4096',
            'clinic_name.*' => 'required',
            'location.*' => 'required',
            'address.*' => 'required',
        ]);
     
        foreach ($request->clinic_name as $index => $clinic_name) {
          
            $data = [
                'doctor_id' => getAuthUser()->id,
                'clinic_name' => $request->clinic_name[$index] ?? null,
                'location' => $request->location[$index] ?? null,
                'address' => $request->address[$index] ?? null,
            ];
          
            $formType = $request->form_type[$index] ?? null; 
            if ($formType === 'update') {
                $this->DoctorClinicsRepository->update($index, $data);
            } elseif ($formType === 'create') {
                $this->DoctorClinicsRepository->create($data);
            } else {
                Log::warning("Unexpected form type for index {$index}");
            }
        }


        return redirect()->route('doctor-clinics-settings')->with('success', 'Doctor clinics updated successfully!');
    }


    public function show($id)
    {
        $doctorClinics = $this->DoctorClinicsRepository->find($id);
        return view('DoctorClinicss.show', compact('DoctorClinics'));
    }

    public function edit($id)
    {
        $doctorClinics = $this->DoctorClinicsRepository->find($id);
        return view('DoctorClinicss.edit', compact('DoctorClinics'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'logo' => 'nullable|image|mimes:jpg,png,svg|max:4096',
            'insurance_name' => 'required',
            'year_of_experience' => 'required',
            'location' => 'required',
            'job_description' => 'required',
            'start_date' => 'required',
        ]);

        $input = $request->all();
        $doctorClinics = $this->DoctorClinicsRepository->update($id, $input);

        if ($doctorClinics) {
            return redirect()->route('doctor-clinics-settings')
                ->with('success', 'Doctor clinics updated successfully!');
        }

        return back()->with('error', 'Unable to update Doctor clinics.');
    }

    public function destroy($id)
    {

        $this->DoctorClinicsRepository->delete($id);

        return redirect()->route('doctor-clinics-settings')->with('success', 'Doctor clinics deleted successfully!');
    }

    public function removeGallery($id)
    {

        $this->DoctorClinicsRepository->removeGallery($id);

        return redirect()->route('doctor-clinics-settings')->with('success', 'Doctor clinics deleted successfully!');
    }
}
