<?php

namespace App\Http\Controllers\Doctor;

use App\Http\Controllers\Controller;
use App\Interfaces\DoctorBusinessHourRepositoryInterface;
use App\Models\DoctorBusinessHour;
use App\Models\Specialization;
use App\Repositories\DoctorBusinessHourRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class DoctorBusinessHourController extends Controller
{

    private DoctorBusinessHourRepositoryInterface $DoctorBusinessHourRepository;
    public function __construct(DoctorBusinessHourRepositoryInterface $DoctorBusinessHourRepository)
    {
        $this->DoctorBusinessHourRepository = $DoctorBusinessHourRepository;
    }

    public function index()
    {
        $DoctorBusinessHours = $this->DoctorBusinessHourRepository->all();
        $businessSettings = $DoctorBusinessHours->keyBy('select_business_days')->toArray();
        $auth = getAuthUser();
        return  view('doctor.doctor-business-settings', get_defined_vars());
    }

    public function create()
    {
        return view('DoctorBusinessHours.create');
    }

    public function store(Request $request)
    {
   
        // Validate the input for business days
        // $request->merge([
        //     'business_days' => collect($request->input('business_days'))->map(function ($day) {
        //         if (isset($day['from']) && isset($day['to'])) {
        //             $day['from'] = date('H:i A', strtotime($day['from']));
        //             $day['to'] = date('H:i A', strtotime($day['to']));
        //         }
        //         return $day;
        //     })->toArray()
        // ]);
       
        $validated = $request->validate([
            'business_days' => 'required|array',
            'business_days.*.active' => 'nullable|boolean',
            'business_days.*.from' => 'nullable|string', 
            'business_days.*.to' => 'nullable|string',
        ]);
      
        // Loop through the business days
        foreach ($validated['business_days'] as $day => $settings) {
        
                // dd($validated['business_days']);
                $data = [
                    'doctor_id' => auth()->id(),
                    'select_business_days' => $day,
                    'start_time' => $settings['from'],
                    'end_time' => $settings['to'],
                ];
                $this->DoctorBusinessHourRepository->updateOrCreate(
                    [
                        'doctor_id' => $data['doctor_id'],
                        'select_business_days' => $data['select_business_days'],
                    ],
                    $data
                );
           
        }
    
        return redirect()->route('doctor-business-settings')->with('success', 'Business hours updated successfully!');
    }
    



    public function show($id)
    {
        $DoctorBusinessHour = $this->DoctorBusinessHourRepository->find($id);
        return view('DoctorBusinessHours.show', compact('DoctorBusinessHour'));
    }

    public function edit($id)
    {
        $DoctorBusinessHour = $this->DoctorBusinessHourRepository->find($id);
        return view('DoctorBusinessHours.edit', compact('DoctorBusinessHour'));
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
        $DoctorBusinessHour = $this->DoctorBusinessHourRepository->update($id, $input);

        if ($DoctorBusinessHour) {
            return redirect()->route('doctor-business-settings')
                ->with('success', 'Doctor award updated successfully!');
        }

        return back()->with('error', 'Unable to update Doctor award.');
    }

    public function destroy($id)
    {

        $this->DoctorBusinessHourRepository->delete($id);

        return redirect()->route('doctor-business-settings')->with('success', 'Doctor award deleted successfully!');
    }
}
