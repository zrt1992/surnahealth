<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\DoseSpotService;

class DoseSpotController extends Controller
{
    protected $doseSpotService;

    public function __construct(DoseSpotService $doseSpotService)
    {
        $this->doseSpotService = $doseSpotService;
    }

    /**
     * Fetch and return prescriptions
     */
    public function getPrescriptions()
    {
        $data = $this->doseSpotService->getPrescriptions();
        return response()->json($data);
    }

    /**
     * Create a new prescription
     */
    public function createPrescription(Request $request)
    {
        $data = $request->validate([
            'patient_id' => 'required|integer',
            'medication' => 'required|string',
            'dosage' => 'required|string',
            'frequency' => 'required|string',
        ]);

        $result = $this->doseSpotService->createPrescription($data);
        return response()->json($result);
    }
}
