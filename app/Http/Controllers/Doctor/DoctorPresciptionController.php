<?php

namespace App\Http\Controllers\Doctor;

use App\Http\Controllers\Controller;
use App\Models\Prescription;
use App\Models\User;
use App\Services\DoseSpotService;
use Illuminate\Http\Request;

class DoctorPresciptionController extends Controller
{
    public function index($id = null)
    {
        $doctor = User::where('id', auth()->user()->id)->with('specializations')->first();


        return view('doctor.add-prescription', get_defined_vars());
    }

    public function store(Request $request, DoseSpotService $doseSpotService)
    {
        // dd($request);

        $request->validate([
            'name.*' => 'required',
            'quantity.*' => 'required',
            'days.*' => 'required',
        ]);

        foreach ($request->name as $index => $prescription) {

            $userId = $request->user_id[$index] ?? null;
            $patient = User::find($userId);


            if (!$patient || !$patient->dose_spot_patient_id) {
                continue; // Skip if no valid DoseSpot patient ID
            }


            $data = [
                'doctor_id' => getAuthUser()->id,
                'user_id' =>  $request->user_id[$index] ?? null,
                'name' => $request->name[$index] ?? null,
                'quantity' => $request->quantity[$index] ?? null,
                'days' => $request->days[$index] ?? null,
                'morning' => $request->morning[$index] ?? null,
                'afternoon' => $request->afternoon[$index] ?? null,
                'evening' => $request->evening[$index] ?? null,
                'night' => $request->night[$index] ?? null,

            ];


            $doseSpotResponse = $doseSpotService->createPrescriptionFreetext([
                'DisplayName' => $data['name'],
                'Refills' => 0,
                'DaysSupply' => (int) $data['days'],
                'DispenseUnitId' => 1, // You may need to customize this
                'Quantity' => $data['quantity'],
                'Directions' => ($data['morning'] == 1 ? 1 : 0) . ' - ' .
                    ($data['afternoon'] == 1 ? 1 : 0) . ' - ' .
                    ($data['evening'] == 1 ? 1 : 0) . ' - ' .
                    ($data['night'] == 1 ? 1 : 0),
                'WrittenDate' => now()->toIso8601String(),
                'PatientId' => $patient->dose_spot_patient_id,
                'Status' => 1, // Default "Active"
                'Comment' => 'Prescribed by' . '' . getAuthUser()->name,
            ], $patient->dose_spot_patient_id);


            $data['dose_spot_prescription_id'] = $doseSpotResponse['Id'] ?? null;

            $prescription = Prescription::create($data);
        }


        return redirect()->back()->with('success', 'Presciption added successfully!');
    }

    public function searchMedications(Request $request, DoseSpotService $doseSpotService)
    {
        $q = $request->get('q');

        if (strlen($q) < 3) {
            return response()->json(['Items' => []]); // Enforce 3+ chars
        }

        $results = $doseSpotService->searchMedications($q);
        return response()->json($results);
    }
}
