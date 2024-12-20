<?php

namespace App\Http\Controllers\Doctor;

use App\Http\Controllers\Controller;
use App\Interfaces\DoctorRepositoryInterface;
use App\Models\Specialization;
use App\Repositories\DoctorRepository;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
   
    private DoctorRepositoryInterface $doctorRepository;

    // Inject the DoctorRepository
    public function __construct(DoctorRepositoryInterface $doctorRepository)
    {
        $this->doctorRepository = $doctorRepository;
    }

    /**
     * Display a listing of the doctors.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $doctors = $this->doctorRepository->all();
        $specializations = Specialization::all(); 
        $auth=getAuthUser();
        return view('doctor.doctor-profile-settings',get_defined_vars());
    }

    /**
     * Show the form for creating a new doctor.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('doctors.create');
    }

    /**
     * Store a newly created doctor in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validate request data
        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'designation' => 'required|string|max:255',
            'phone' => 'required|string|max:15',
            'email' => 'required|email|max:255',
            'known_languages' => 'nullable|string',
            'profile_image' => 'nullable|image|mimes:jpg,png,svg|max:4096',
        ]);

        // Use the repository to create a new doctor
        $this->doctorRepository->create($request->all());

        return redirect()->route('doctors.index')->with('success', 'Doctor created successfully!');
    }

    /**
     * Display the specified doctor.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $doctor = $this->doctorRepository->find($id);
        return view('doctors.show', compact('doctor'));
    }

    /**
     * Show the form for editing the specified doctor.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $doctor = $this->doctorRepository->find($id);
        return view('doctors.edit', compact('doctor'));
    }

    /**
     * Update the specified doctor in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'designation' => 'required|string|max:255',
            'phone' => 'required|string|max:15',
            'email' => 'required|email|max:255',
            'known_languages' => 'nullable|string',
            'profile_image' => 'nullable|image|mimes:jpg,png,svg|max:4096',
        ]);

        $input = $request->all();
        $doctor = $this->doctorRepository->update($id, $input);
        $doctor->specializations()->sync($request->designation);
    
        if ($doctor) {
            return redirect()->route('doctor-profile-settings.index', $id)
                             ->with('success', 'Doctor profile updated successfully!');
        }
    
        return back()->with('error', 'Unable to update doctor profile.');
    }
    

    /**
     * Remove the specified doctor from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // Use the repository to delete the doctor
        $this->doctorRepository->delete($id);

        return redirect()->route('doctors.index')->with('success', 'Doctor deleted successfully!');
    }
}
