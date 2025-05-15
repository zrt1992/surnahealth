<?php

namespace App\Http\Controllers\Patient;

use App\Http\Controllers\Controller;
use App\Interfaces\PatientProfileSettingRepositoryInterface;
use App\Models\MedicalDetail;
use App\Models\PatientAppoitmentPreferences;
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
      
        return view('profile-settings', get_defined_vars());
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
            
            'phone' => 'required|string|max:15',
            'email' => 'required|email|max:255',
            'profile_image' => 'nullable|image|mimes:jpg,png,svg|max:4096',
        ]);
     
        $input = $request->all();
        $patientProfileSetting = $this->PatientProfileSettingRepo->update($id, $input);
        if ($patientProfileSetting) {
            
            $medicalData = [
                'user_id' => auth()->user()->id,
                'existing_medical_conditions' => $request->existing_medical_conditions,
                'medications_currently_using' => $request->medications_currently_using,
                'primarly_health_concern' => $request->primarly_health_concern,
            ];
            $appointmentPreferences = [
                'user_id' => auth()->user()->id,
                'preferred_doctor' => $request->preferred_doctor,
                'video_call' => $request->video_call,
                'audio_call' => $request->audio_call,
                'chat' => $request->chat,
                'preferred_time' => $request->preferred_time,
            ];
            $medicalDetails = MedicalDetail::where('user_id',auth()->user()->id)->update($medicalData);
            $medicalDetails = PatientAppoitmentPreferences::where('user_id',auth()->user()->id)->update($appointmentPreferences);
           
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
