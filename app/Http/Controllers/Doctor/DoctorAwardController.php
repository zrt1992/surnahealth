<?php

namespace App\Http\Controllers\Doctor;

use App\Http\Controllers\Controller;
use App\Interfaces\DoctorAwardRepositoryInterface;
use App\Models\DoctorAward;
use App\Models\Specialization;
use App\Repositories\DoctorAwardRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class DoctorAwardController extends Controller
{

    private DoctorAwardRepositoryInterface $DoctorAwardRepository;
    public function __construct(DoctorAwardRepositoryInterface $DoctorAwardRepository)
    {
        $this->DoctorAwardRepository = $DoctorAwardRepository;
    }

    public function index()
    {
        $DoctorAwards = $this->DoctorAwardRepository->all();
        $specializations = Specialization::all();
        $auth = getAuthUser();
        return  view('doctor-awards-settings', get_defined_vars());
    }

    public function create()
    {
        return view('DoctorAwards.create');
    }

    public function store(Request $request)
    {
       
        $request->validate([
            'award_name.*' => 'required',
            'year.*' => 'required',
            'description.*' => 'required',
        ]);
        // dd($request);
        foreach ($request->award_name as $index => $award_name) {
            $data = [
                'doctor_id' => getAuthUser()->id,
                'award_name' => $request->award_name[$index] ?? null,
                'year' => $request->year[$index] ?? null,
                'description' => $request->description[$index] ?? null,
            ];
           
            $formType = $request->form_type[$index] ?? null;
            if ($formType === 'update') {
                $this->DoctorAwardRepository->update($index, $data);
            } elseif ($formType === 'create') {
                $this->DoctorAwardRepository->create($data);
            } else {
                Log::warning("Unexpected form type for index {$index}");
            }
        }


        return redirect()->route('doctor-awards-settings')->with('success', 'Doctor award updated successfully!');
    }


    public function show($id)
    {
        $DoctorAward = $this->DoctorAwardRepository->find($id);
        return view('DoctorAwards.show', compact('DoctorAward'));
    }

    public function edit($id)
    {
        $DoctorAward = $this->DoctorAwardRepository->find($id);
        return view('DoctorAwards.edit', compact('DoctorAward'));
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
        $DoctorAward = $this->DoctorAwardRepository->update($id, $input);

        if ($DoctorAward) {
            return redirect()->route('doctor-awards-settings')
                ->with('success', 'Doctor award updated successfully!');
        }

        return back()->with('error', 'Unable to update Doctor award.');
    }

    public function destroy($id)
    {

        $this->DoctorAwardRepository->delete($id);

        return redirect()->route('doctor-awards-settings')->with('success', 'Doctor award deleted successfully!');
    }
}
