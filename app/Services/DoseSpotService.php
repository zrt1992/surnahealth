<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class DoseSpotService
{
    protected $baseUrl;
    protected $clientId;
    protected $clinicKey;
    protected $userId;
    protected $clientKey;

    public function __construct()
    {
        $this->baseUrl = env('DOSESPOT_BASE_URL');
        $this->clientId = env('DOSESPOT_CLIENT_ID');
        $this->clinicKey = env('DOSESPOT_CLINIC_KEY');
        $this->userId = env('DOSESPOT_USER_ID');
        $this->clientKey = env('DOSESPOT_CLIENT_KEY');
    }

    /**
     * Generate an authentication token
     */
    public function authenticate()
    {
        $response = Http::asForm()
            ->withHeaders([
                'Subscription-Key' => $this->clientKey,
            ])
            ->post("{$this->baseUrl}/webapi/v2/connect/token", [
                'grant_type'    => 'password',
                'client_id'     => $this->clientId,
                'client_secret' => $this->clinicKey,
                'username'      => $this->userId,
                'password'      => $this->clinicKey,
                'scope'         => 'api',
                // 'acr_values'    => "OnBehalfOfUserId={$this->userId}", // Optional
            ]);
    
        if ($response->successful()) {
            return $response->json()['access_token'];
        }
    
        Log::error('DoseSpot authentication failed', [
            'status' => $response->status(),
            'body' => $response->body()
        ]);
    
        return null;
    }
    
    public function createPatient(array $data)
    {
        $token = $this->authenticate();
   
        if (!$token) {
            return ['error' => 'Authentication failed'];
        }
    
        $patientData = array_merge([
            'Prefix' => 'Mr.',
            'FirstName' => '',
            'LastName' => '',
            'DateOfBirth' => '1990-01-01T00:00:00Z',
            'Gender' => 'Male',
            'Email' => '',
            'PrimaryPhone' => '',
            'PrimaryPhoneType' => 'Mobile',
            'Active' => true
        ], $data);
    
        $response = Http::withHeaders([
            'Authorization' => "Bearer {$token}",
            'X-ClinicId' => $this->clientId,
            'X-ClinicKey' => $this->clinicKey,
            'X-UserId' => $this->userId,
            'Subscription-Key' => $this->clientKey,
            'Accept' => 'application/json',
            'Content-Type' => 'application/json',
        ])->post("{$this->baseUrl}/webapi/v2/api/patients", $patientData);
    
        if (!$response->ok()) {
            Log::error('Patient creation failed', [
                'status' => $response->status(),
                'body' => $response->body()
            ]);
            return [
                'error' => 'Patient creation failed',
                'details' => $response->json() ?? $response->body(),
                'status_code' => $response->status()
            ];
        }
    
        return $response->json();
    }
    /**
     * Fetch a list of prescriptions
     */
    public function getPrescriptions()
    {
        $token = $this->authenticate();

        if (!$token) {
            return ['error' => 'Authentication failed'];
        }

        $response = Http::withHeaders([
            'Authorization' => "Bearer $token",
        ])->get("{$this->baseUrl}/prescriptions");

        return $response->json();
    }

    /**
     * Create a new prescription
     */
   public function createPrescriptionFreetext(array $data, $patientId)
{
    $token = $this->authenticate();

    if (!$token) {
        return ['error' => 'Authentication failed'];
    }

    $url = "{$this->baseUrl}/webapi/v2/api/patients/{$patientId}/selfReportedMedications/freetext";

    $response = Http::withHeaders([
        'Authorization' => "Bearer $token",
        'X-ClinicId' => $this->clientId,
        'X-ClinicKey' => $this->clinicKey,
        'X-UserId' => $this->userId,
        'Subscription-Key' => $this->clientKey,
        'Accept' => 'application/json',
        'Content-Type' => 'application/json',
    ])->post($url, $data);

    if (!$response->ok()) {
        Log::error('Prescription creation failed', [
            'status' => $response->status(),
            'body' => $response->body()
        ]);
        return [
            'error' => 'Prescription creation failed',
            'details' => $response->json() ?? $response->body(),
            'status_code' => $response->status()
        ];
    }

    return $response->json();
}

public function getPrescriptionById(int $patientId, int $prescriptionId)
{
    $token = $this->authenticate();

    if (!$token) {
        return ['error' => 'Authentication failed'];
    }

    $url = "{$this->baseUrl}/webapi/v2/api/patients/{$patientId}/prescriptions/{$prescriptionId}";

    $response = Http::withHeaders([
        'Authorization' => "Bearer $token",
        'X-ClinicId' => $this->clientId,
        'X-ClinicKey' => $this->clinicKey,
        'X-UserId' => $this->userId,
        'Subscription-Key' => $this->clientKey,
        'Accept' => 'application/json',
    ])->get($url);

    if (!$response->ok()) {
        Log::error('Failed to fetch prescription', [
            'status' => $response->status(),
            'body' => $response->body()
        ]);
        return [
            'error' => 'Prescription fetch failed',
            'details' => $response->json() ?? $response->body(),
            'status_code' => $response->status()
        ];
    }

    return $response->json();
}

public function getSelfReportedMedications(int $patientId, string $startDate, string $endDate)
{
    $token = $this->authenticate();

    if (!$token) {
        return ['error' => 'Authentication failed'];
    }

    $url = "{$this->baseUrl}/webapi/v2/api/patients/{$patientId}/selfReportedMedications";
    $query = http_build_query([
        'startDate' => $startDate,
        'endDate' => $endDate
    ]);

    $response = Http::withHeaders([
        'Authorization' => "Bearer $token",
        'X-ClinicId' => $this->clientId,
        'X-ClinicKey' => $this->clinicKey,
        'X-UserId' => $this->userId,
        'Subscription-Key' => $this->clientKey,
        'Accept' => 'application/json',
    ])->get("{$url}?{$query}");

    if (!$response->ok()) {
        Log::error('Failed to fetch self-reported medications', [
            'status' => $response->status(),
            'body' => $response->body()
        ]);
        return [
            'error' => 'Fetch failed',
            'details' => $response->json() ?? $response->body(),
            'status_code' => $response->status()
        ];
    }

    return $response->json();
}

public function getPrescriptionsByDateRange(int $patientId, string $startDate, string $endDate)
{
    $token = $this->authenticate();

    if (!$token) {
        return ['error' => 'Authentication failed'];
    }

    $url = "{$this->baseUrl}/webapi/v2/api/patients/{$patientId}/prescriptions";
    $query = http_build_query([
        'startDate' => $startDate,
        'endDate' => $endDate
    ]);

    $response = Http::withHeaders([
        'Authorization' => "Bearer $token",
        'X-ClinicId' => $this->clientId,
        'X-ClinicKey' => $this->clinicKey,
        'X-UserId' => $this->userId,
        'Subscription-Key' => $this->clientKey,
        'Accept' => 'application/json',
    ])->get("{$url}?{$query}");

    if (!$response->ok()) {
        Log::error('Failed to fetch prescriptions', [
            'status' => $response->status(),
            'body' => $response->body()
        ]);
        return [
            'error' => 'Fetch failed',
            'details' => $response->json() ?? $response->body(),
            'status_code' => $response->status()
        ];
    }

    return $response->json();
}


public function searchAllergies(string $query)
{
    $token = $this->authenticate();

    if (!$token) {
        return ['error' => 'Authentication failed'];
    }

    $url = "{$this->baseUrl}/webapi/v2/api/allergies/search?q=" . urlencode($query);

    $response = Http::withHeaders([
        'Authorization' => "Bearer $token",
        'X-ClinicId' => $this->clientId,
        'X-ClinicKey' => $this->clinicKey,
        'X-UserId' => $this->userId,
        'Subscription-Key' => $this->clientKey,
        'Accept' => 'application/json',
    ])->get($url);

    if (!$response->ok()) {
        Log::error('Allergy search failed', [
            'status' => $response->status(),
            'body' => $response->body(),
        ]);
        return [
            'error' => 'Allergy search failed',
            'details' => $response->json() ?? $response->body(),
            'status_code' => $response->status(),
        ];
    }

    return $response->json();
}

public function searchMedications(string $query)
{
    $token = $this->authenticate();

    if (!$token) {
        return ['error' => 'Authentication failed'];
    }

    $url = "{$this->baseUrl}/webapi/v2/api/medications/search?name=" . urlencode($query);

    $response = Http::withHeaders([
        'Authorization' => "Bearer $token",
        'X-ClinicId' => $this->clientId,
        'X-ClinicKey' => $this->clinicKey,
        'X-UserId' => $this->userId,
        'Subscription-Key' => $this->clientKey,
        'Accept' => 'application/json',
    ])->get($url);

    if (!$response->ok()) {
        Log::error('Allergy search failed', [
            'status' => $response->status(),
            'body' => $response->body(),
        ]);
        return [
            'error' => 'Allergy search failed',
            'details' => $response->json() ?? $response->body(),
            'status_code' => $response->status(),
        ];
    }

    return $response->json();
}

public function addPatientAllergy(int $patientId, array $data)
{
    $token = $this->authenticate();

    if (!$token) {
        return ['error' => 'Authentication failed'];
    }

    $url = "{$this->baseUrl}/webapi/v2/api/patients/{$patientId}/allergies";

    $response = Http::withHeaders([
        'Authorization' => "Bearer $token",
        'X-ClinicId' => $this->clientId,
        'X-ClinicKey' => $this->clinicKey,
        'X-UserId' => $this->userId,
        'Subscription-Key' => $this->clientKey,
        'Accept' => 'application/json',
        'Content-Type' => 'application/json',
    ])->post($url, $data);

    if (!$response->ok()) {
        Log::error('Add allergy failed', [
            'status' => $response->status(),
            'body' => $response->body(),
        ]);
        return [
            'error' => 'Add allergy failed',
            'details' => $response->json() ?? $response->body(),
            'status_code' => $response->status(),
        ];
    }

    return $response->json();
}

    
    
}
