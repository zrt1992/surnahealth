<?php

namespace App\Http\Controllers\Doctor;

use App\Http\Controllers\Controller;
use App\Models\Prescription;
use App\Models\User;
use Illuminate\Http\Request;

class DoctorPresciptionController extends Controller
{
    public function index($id = null)
    {
        $doctor = User::where('id',auth()->user()->id)->with('specializations')->first();
       
        return view('doctor.add-prescription',get_defined_vars());
    }

    public function store(Request $request)
    {
        // dd($request);

        $request->validate([
            'name.*' => 'required',
            'quantity.*' => 'required',
            'days.*' => 'required',
        ]);

        foreach ($request->name as $index => $prescription) {

            $data = [
                'doctor_id' => getAuthUser()->id,
                'user_id' =>  $request->user_id[$index] ?? null,
                'name' => $request->title[$index] ?? null,
                'quantity' => $request->hospital[$index] ?? null,
                'days' => $request->year_of_experience[$index] ?? null,
                'morning' => $request->morning[$index] ?? null,
                'afternoon' => $request->afternoon[$index] ?? null,
                'evening' => $request->evening[$index] ?? null,
                'night' => $request->night[$index] ?? null,
               
            ];
        //    dd($data);
                $prescription = Prescription::create($data);  
        }


        return redirect()->back()->with('success', 'Presciption added successfully!');
    }
}
