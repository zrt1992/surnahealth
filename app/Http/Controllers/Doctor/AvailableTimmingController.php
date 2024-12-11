<?php

namespace App\Http\Controllers\Doctor;

use App\Http\Controllers\Controller;
use App\Interfaces\AvailableTimmingRepositoryInterface;
use App\Models\AvailableTimming;
use App\Models\Specialization;
use App\Models\User;
use App\Repositories\AvailableTimmingRepository;
use Illuminate\Http\Request;

class AvailableTimmingController extends Controller
{

    private AvailableTimmingRepositoryInterface $AvailableTimmingRepository;

    // Inject the AvailableTimmingRepository
    public function __construct(AvailableTimmingRepositoryInterface $AvailableTimmingRepository)
    {
        $this->AvailableTimmingRepository = $AvailableTimmingRepository;
    }

    /**
     * Display a listing of the doctors.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = $this->AvailableTimmingRepository->all();
    
        $auth = getAuthUser();
        return view('available-timings', get_defined_vars());
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
        // Validate the form data
        $validated = $request->validate([
            'start_time' => 'required|string',
            'end_time' => 'required|string',
            'appointment_intervals' => 'required|integer',
            'appointment_duration' => 'required|integer',
            'space' => 'required|integer',
            'selected_day' => 'required|string',
            'availability_type' => 'required|string',

        ]);

        // Create a new available timing record
     

        AvailableTimming::create([
            'user_id' => auth()->id(), // Assuming you're associating with a user
            'start_time' => $request->start_time,
            'end_time' => $request->end_time,
            'appointment_intervals' => $request->appointment_intervals,
            'appointment_duration' => $request->appointment_duration,
            'space' => $request->space,
            'availability_day' => $request->selected_day,
            'availability_type' => $request->availability_type,
        ]);

        // Redirect back or to a success page
        return redirect()->route('available-timings');
    }

    /**
     * Display the specified doctor.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $doctor = $this->AvailableTimmingRepository->find($id);
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
        $doctor = $this->AvailableTimmingRepository->find($id);
        return view('doctors.edit', compact('doctor'));
    }

    /**
     * Update the specified doctor in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $request->validate([
            'consultation_fees' => 'required',
        ]);

        $input = $request->except('consultation_fees');
        $doctor = $this->AvailableTimmingRepository->update($input);
        if ($doctor) {

            $updateConsultationFees = User::where('id', auth()->user()->id)->update(['consultation_fees' => $request->consultation_fees]);
        
            return redirect()->route('available-timings')->with('success', 'Available timming updated successfully!');
        }

        return back()->with('error', 'Unable to update Available timming.');
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
        $this->AvailableTimmingRepository->delete($id);

        return redirect()->route('doctors.index')->with('success', 'Doctor deleted successfully!');
    }
}
