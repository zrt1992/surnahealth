<?php

namespace App\Http\Controllers\Doctor;

use App\Http\Controllers\Controller;
use App\Interfaces\DoctorInsurancesRepositoryInterface;
use App\Models\Specialization;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class DoctorInsurancesController extends Controller
{

    private DoctorInsurancesRepositoryInterface $DoctorInsurancesRepository;
    public function __construct(DoctorInsurancesRepositoryInterface $DoctorInsurancesRepository)
    {
        $this->DoctorInsurancesRepository = $DoctorInsurancesRepository;
    }

    public function index()
    {
        $DoctorInsurances = $this->DoctorInsurancesRepository->all();
        $auth = getAuthUser();
        return  view('doctor-insurance-settings', get_defined_vars());
    }

    public function create()
    {
        return view('DoctorInsurancess.create');
    }

    public function store(Request $request)
    {
        // dd($request);

        $request->validate([
            'logo.*' => 'nullable|image|mimes:jpg,png,svg|max:4096',
            'insurance_name.*' => 'required',
        ]);

        foreach ($request->insurance_name as $index => $insurance_name) {
            $data = [
                'doctor_id' => getAuthUser()->id,
                'insurance_name' => $request->insurance_name[$index] ?? null,
            ];
           
            $formType = $request->form_type[$index] ?? null; 
            if ($formType === 'update') {
                $this->DoctorInsurancesRepository->update($index, $data);
            } elseif ($formType === 'create') {
                $this->DoctorInsurancesRepository->create($data);
            } else {
                Log::warning("Unexpected form type for index {$index}");
            }
        }


        return redirect()->route('doctor-insurance-settings')->with('success', 'Doctor insurance updated successfully!');
    }


    public function show($id)
    {
        $DoctorInsurances = $this->DoctorInsurancesRepository->find($id);
        return view('DoctorInsurancess.show', compact('DoctorInsurances'));
    }

    public function edit($id)
    {
        $DoctorInsurances = $this->DoctorInsurancesRepository->find($id);
        return view('DoctorInsurancess.edit', compact('DoctorInsurances'));
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
        $DoctorInsurances = $this->DoctorInsurancesRepository->update($id, $input);

        if ($DoctorInsurances) {
            return redirect()->route('doctor-insurance-settings')
                ->with('success', 'Doctor insurance updated successfully!');
        }

        return back()->with('error', 'Unable to update Doctor insurance.');
    }

    public function destroy($id)
    {

        $this->DoctorInsurancesRepository->delete($id);

        return redirect()->route('doctor-insurance-settings')->with('success', 'Doctor insurance deleted successfully!');
    }
}
