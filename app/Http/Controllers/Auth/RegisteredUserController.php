<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Mail\Patient\RegistrationEmail;
use App\Models\Account;
use App\Models\InsuranceInformation;
use App\Models\MedicalDetail;
use App\Models\PatientAppoitmentPreferences;
use App\Models\SubscriptionPlan;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;
use App\Traits\FileUpload;
use Illuminate\Support\Facades\Mail;
use Stripe\Price;
use Stripe\Stripe;
use App\Services\DoseSpotService;

class RegisteredUserController extends Controller
{
    use FileUpload;
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('register');
    }

    public function step1()
    {
        return view('auth.patient.patient-register-step1');
    }

    public function step2()
    {
        return view('auth.patient.patient-register-step2');
    }

    public function step3()
    {
        return view('auth.patient.patient-register-step3');
    }

    public function step4()
    {
        return view('auth.patient.patient-register-step4');
    }



    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        // dd('asd');
        $result = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:' . User::class],
            'phone' => [
                'required',
                'string',
                'regex:/^\d{10}$/', // Accepts exactly 10 digits, US local format
                'unique:' . User::class,
            ],
            'password' => [
                'required',
                'string',
                'confirmed',
                'regex:/^(?=.*[a-zA-Z])(?=.*[0-9])[a-zA-Z0-9]+$/',
                'min:8',
            ],
        ], [
            'password.regex' => 'The password must contain both letters and numbers, and no special characters.',
            'password.confirmed' => 'The password confirmation does not match.',
            'password.min' => 'The password must be at least 8 characters long.',
        ]);
        // dd($request);

        $role = $request->get('role');
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'password' => Hash::make($request->password),
        ]);
        $user->assignRole('patient');
        //        dd('asd');
        // Send patient data to DoseSpot

        event(new Registered($user));

        Auth::login($user);

        return redirect(route('patient-register-step1', absolute: false));
    }

    public function storeStep1(Request $request)
    {
        $request->validate([
            'profile_image' => 'nullable|image|max:2048', // Make it optional
        ]);

        $data = $request->except('_token');

        // Check if a profile image is provided
        if ($request->hasFile('profile_image')) {
            $file = $request->file('profile_image');
            $meta = $this->uploadImage($file, 'profile_images');

            if (isset($meta['dirname'], $meta['basename'])) {
                $full_path = $meta['dirname'] . '/' . $meta['basename'];
                $data['profile_image'] = $full_path; // Only add profile_image if it exists
            }
        }

        $data['registration_step'] = '+2';

        $authUser = auth()->user();
        $authUser->update($data);

        return redirect()->route('patient-register-step2');
    }


    public function storeStep2(Request $request)
    {
        $request->validate([
            'gender' => 'required|in:Male,Female',
            'age' => 'required',
            'city' => 'required',
            'country' => 'required',
            'preferred_language' => 'required',
            'existing_medical_conditions' => 'required',
            'preferred_time' => 'required',
        ]);

        $userData = [
            'gender' => $request->gender,
            'dob' => $request->age,
            'city' => $request->city,
            'country' => $request->country,
            'state' => $request->state,
            'zipcode' => $request->zipcode,
            'address' => $request->address,
            'known_languages' => $request->preferred_language,
            'registration_step' => '+3',
        ];

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

        $authUser = auth()->user();
        $userdata = $authUser->update($userData);
        $medicalDetails = MedicalDetail::create($medicalData);
        $medicalDetails = PatientAppoitmentPreferences::create($appointmentPreferences);

        return redirect()->route('patient-register-step3');
    }

    public function storeStep3(Request $request)
    {
        // $request->validate([
        //     'insurance_provider_name' => 'required',
        //     'insurance_id' => 'required',
        //     'emergency_contact' => 'required',
        //     'name' => 'required',
        //     'relationship' => 'required',
        //     'phone_number' => 'required',
        // ]);

        $userData = [
            'registration_step' => '+4',
        ];

        $authUser = auth()->user();
        $userdata = $authUser->update($userData);
        $medicalDetails = $request->all();
        $medicalDetails['user_id'] = $authUser->id;
        $medicalDetails = InsuranceInformation::create($medicalDetails);

        return redirect()->route('patient-register-step4');
    }

    public function storeStep4(Request $request, DoseSpotService $doseSpot)
    {
        $request->validate([
            'bank_name' => 'required',
            'branch_name' => 'required|string|max:255',
            'account_name' => 'required',
            'account_number' => 'required',
            'term_and_condition' => 'required',
            'g-recaptcha-response' => 'required|recaptchav3:register,0.5',
        ]);

        $userData = [
            'registration_step' => 'completed',
            'term_and_condition' => $request->term_and_condition,
        ];

        $authUser = auth()->user();
        $userdata = $authUser->update($userData);
        $bankDetails = [
            'user_id' => $authUser->id,
            'bank_name' =>  $request->bank_name,
            'branch_name' => $request->branch_name,
            'account_name' => $request->account_name,
            'account_number' => $request->account_number,
            'stripe' => $request->stripe,
            'paypal' => $request->paypal,
            'credit_card' => $request->credit_card,
            'mobile_money' => $request->mobile_money,
            'default' => '1',
        ];
        Account::create($bankDetails);

        if ($userdata) {

            $emailData = [
                'subject' => 'Welcome to Surna TeleHealth-The Future of Telemedicine',
                'greeting' => 'Dear ' . $authUser->name,
                'body' => 'Thank you for signing up. We are excited to have you onboard!',
                'actionText' => 'Get Started',
                'actionURL' => url('/patient/dashboard'),
                'thanks' => 'Thank you for choosing us!',
            ];

            Mail::to($authUser->email)->send(new RegistrationEmail($emailData));
        }

        $response = $doseSpot->createPatient([
            "Prefix" => "Mr.", // Optional
            "FirstName" => explode(' ', $authUser->name)[0],
            "LastName" => explode(' ', $authUser->name)[1] ?? 'Patient',
            "DateOfBirth" => $authUser->dob, // Placeholder, update as needed
            "Gender" => $authUser->gender, // Update as needed
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
            $authUser->dose_spot_patient_id = $response['Id'];
            $authUser->save();
        }
        return redirect()->route('patient-dashboard')->with('success', 'Registration completed!');
    }
}
