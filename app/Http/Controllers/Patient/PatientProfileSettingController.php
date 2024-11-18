<?php

namespace App\Http\Controllers\Patient;

use App\Http\Controllers\Controller;
use App\Interfaces\PatientProfileSettingRepositoryInterface;
use Illuminate\Http\Request;
use App\Models\PatientProfileSetting;
use App\Models\User;

class PatientProfileSettingController extends Controller
{
    protected $PatientProfileSettingRepo;

    public function __construct(PatientProfileSettingRepositoryInterface $PatientProfileSettingRepo)
    {
        $this->PatientProfileSettingRepo = $PatientProfileSettingRepo;
    }

    public function index()
    {
        $patientProfileSettings = $this->PatientProfileSettingRepo->myProfileSetting();
        return view('profile-settings', compact('patientProfileSettings'));
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
    
        $this->PatientProfileSettingRepo->create($data);
        return redirect()->route('medical-details')->with('success', 'Medical detail created successfully.');
    }

    public function show($id)
    {
        $PatientProfileSetting = $this->PatientProfileSettingRepo->find($id);
        return view('medical_details.show', compact('PatientProfileSetting'));
    }

    public function edit(User $PatientProfileSetting)
    {
        return view('medical_details.edit', compact('PatientProfileSetting'));
    }

    public function update(Request $request,  $id)
    {
   
        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'dob' => 'required|string|max:255',
            'phone' => 'required|string|max:15',
            'email' => 'required|email|max:255',
            'blood_group' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'city' => 'nullable|string',
            'state' => 'nullable|string',
            'country' => 'nullable|string',
            'pincode' => 'nullable|string',
            'profile_image' => 'nullable|image|mimes:jpg,png,svg|max:4096',
        ]);
     
        $input = $request->all();
        $patientProfileSetting = $this->PatientProfileSettingRepo->update($id, $input);
        if ($patientProfileSetting) {
            return redirect()->route('profile-settings')
                             ->with('success', 'Patient profile updated successfully!');
        }

        return back()->with('error', 'Unable to update Patient profile');
    }

    public function destroy($id)
    {
        $this->PatientProfileSettingRepo->delete($id);
        return redirect()->route('medical-details')->with('success', 'Medical detail deleted successfully.');
    }
}
