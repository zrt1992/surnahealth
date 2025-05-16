<?php

namespace App\Http\Controllers\Patient;

use App\Http\Controllers\Controller;
use App\Models\Prescription;
use App\Models\User;
use App\Services\DoseSpotService;
use Carbon\Carbon;
use Illuminate\Http\Request;

class PatientPresciptionController extends Controller
{
    public function index(DoseSpotService $doseSpotService)
    {
        // $prescriptions =  Prescription::where('user_id',auth()->user()->id)->with('user','doctor')->paginate(10);

        $authUser = getAuthUser();
        $patientId = $authUser->dose_spot_patient_id;
        $startDate = now()->subMonth()->toIso8601String();
        $endDate = now()->toIso8601String();

        $prescriptions = Prescription::where('user_id', auth()->id())
            ->with('doctor')
            ->get()
            ->keyBy('dose_spot_prescription_id'); // Make it easy to match

        // Step 2: Get DoseSpot items
        if (!$patientId) {
            $response = $doseSpotService->createPatient([
                "Prefix" => "Mr.", // Optional
                "FirstName" => explode(' ', $authUser->name)[0],
                "LastName" => explode(' ', $authUser->name)[1] ?? 'Patient',
                "DateOfBirth" => $authUser->dob,
                "Gender" => $authUser->gender,
                "Email" => $authUser->email,
                "PrimaryPhone" => $authUser->phone,
                "PrimaryPhoneType" => "4",
                "Address1" => $authUser->address,
                "City" => $authUser->city,
                "State" => $authUser->state,
                "ZipCode" => $authUser->zipcode,
                "Active" => true
            ]);

            if (isset($response['Id'])) {
                $patientId = $response['Id'];
                $authUser->dose_spot_patient_id = $patientId;
                $authUser->save();
            }
        }
        if ($patientId) {
            $selfReported = $doseSpotService->getSelfReportedMedications($patientId, $startDate, $endDate);

            if ($selfReported) {
                $items = collect($selfReported['Items'] ?? []);

                // Step 3: Map items to add doctor name if match found
                $itemsWithDoctor = $items->map(function ($item) use ($prescriptions) {
                    $doseSpotId = $item['SelfReportedMedicationId'] ?? null;

                    if ($doseSpotId && isset($prescriptions[$doseSpotId])) {
                        $doctor = $prescriptions[$doseSpotId]->doctor;
                        $item['doctor_name'] = $doctor?->name ?? 'Unknown';
                    } else {
                        $item['doctor_name'] = 'Not Linked';
                    }

                    return $item;
                });

                // Step 4: Group by date
                $grouped = $itemsWithDoctor->groupBy(function ($item) {
                    return Carbon::parse($item['DatePrescribed'])->format('Y-m-d');
                });

                $formatted = $grouped->map(function ($itemsForDate, $date) use ($prescriptions) {
                    $firstItemWithMatch = $itemsForDate->first(function ($item) use ($prescriptions) {
                        return isset($prescriptions[$item['SelfReportedMedicationId'] ?? null]);
                    });

                    if ($firstItemWithMatch) {
                        $prescription = $prescriptions[$firstItemWithMatch['SelfReportedMedicationId']];
                        $doctorName = $prescription->doctor?->name ?? 'Unknown';
                    } else {
                        $doctorName = 'Not Linked';
                    }

                    return [
                        'date' => $date,
                        'doctor_name' => $doctorName,
                        'items' => $itemsForDate->values(), // keep items without doctor_name
                    ];
                })->values(); // reindex for a clean array
            }
        }
        return view('patient.patient-prescriptions', get_defined_vars());
    }
}
