<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Mail\Doctor\RegistrationEmail;
use App\Models\Account;
use App\Models\ConsultationMode;
use App\Models\DoctorBusinessHour;
use App\Models\DoctorClinic;
use App\Models\DoctorEducation;
use App\Models\Specialization;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use App\Traits\FileUpload;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Http;

class DoctorRegistrationController extends Controller
{
    use FileUpload;

    public function step1()
    {
        return view('auth.doctor.doctor-register-step1');
    }

    public function step2()
    {
        $specializations = Specialization::all();
        return view('auth.doctor.doctor-register-step2', get_defined_vars());
    }

    public function step3()
    {
        return view('auth.doctor.doctor-register-step3');
    }

    public function step4()
    {
        return view('auth.doctor.doctor-register-step4');
    }

    public function store(Request $request)
    {
        $result = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:' . User::class],
            'name' => ['required', 'string', 'max:255', 'unique:' . User::class],
            'password' => ['required', 'string', 'confirmed', Rules\Password::defaults()],
            // 'password' => ['required'],

        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'password' => Hash::make($request->password),
        ]);
        $user->assignRole('doctor');
        Auth::login($user);

        return redirect(route('doctor-register-step1', absolute: false));
    }

    public function storeStep1(Request $request)
    {
        // Validate the request
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

        return redirect()->route('doctor-register-step2');
    }


    public function storeStep2(Request $request)
    {
        $validatedData = $request->validate([
            'medical_licence_number' => 'required',
            'specialization' => 'required|string|max:255',
            'medical_school' => 'required',
            'residency' => 'required',
            'certifications' => 'required|image|max:2048',
        ]);


        $data = $request->except('_token');
        $data['registration_step'] = "+3";
        $authUser = auth()->user();
        $doctor = $authUser->update($data);
        $doctor = $authUser;
        $doctor->specializations()->sync($request->specialization);

        if ($request->file('certifications')) {
            $file = $request->file('certifications');
            $meta = $this->uploadImage($file, 'profile_images');

            if (isset($meta['dirname'], $meta['basename'])) {
                $certificate_full_path = $meta['dirname'] . '/' . $meta['basename'];
            }
        }
        $educationData = [
            'doctor_id' => $authUser->id,
            'medical_school' => $validatedData['medical_school'],
            'residency' => $validatedData['residency'],
            'certifications' => $certificate_full_path,
        ];
        DoctorEducation::create($educationData);

        if ($request->hospital_clinic_affiliation != null) {
            $clinicData = [
                'doctor_id' => $authUser->id,
                'hospital_clinic_affiliation' => $request->hospital_clinic_affiliation,
            ];
            DoctorClinic::create($clinicData);
        }
        return redirect()->route('doctor-register-step3');
    }


    public function storeStep3(Request $request)
    {
        $request->validate([
            'start_time' => 'required',
            'end_time' => 'required',
            'city' => 'required',
            'state' => 'required',
            'language' => 'required',
        ]);
        $authUser = auth()->user();

        $data = $request->all();
        $data['registration_step'] = "+4";
        $data['known_languages'] = $request->language;
        $data['consultation_fees'] = $request->consultation_fees;

        $registration = $authUser->update($data);

        $businessHours = [
            'doctor_id' => $authUser->id,
            'select_business_days' => 'all',
            'start_time' => $request->start_time,
            'end_time' => $request->end_time,
            'time_zone' => $request->time_zone,
        ];
        DoctorBusinessHour::create($businessHours);

        // Save consultation modes
        $consultationModes = $request->consultation_modes;
        foreach ($consultationModes as $mode) {
            ConsultationMode::create([
                'doctor_id' => $authUser->id,
                'consultation_mode' => $mode,
            ]);
        }

        return redirect()->route('doctor-register-step4');
    }

    public function storeStep4(Request $request)
    {
        $request->validate([
            'photo_id' => 'required|image|max:2048',
            'medical_licence' => 'required|image|max:2048',
            'bank_name' => 'required',
            'branch_name' => 'required|string|max:255',
            'account_name' => 'required',
            'account_number' => 'required',
            'term_and_condition' => 'required',
            'g-recaptcha-response' => 'required|recaptchav3:register,0.5',
        ]);

        if ($request->file('photo_id')) {
            $file = $request->file('photo_id');
            $meta = $this->uploadImage($file, 'profile_images');

            if (isset($meta['dirname'], $meta['basename'])) {
                $photoId_full_path = $meta['dirname'] . '/' . $meta['basename'];
            }
        }
        if ($request->file('medical_licence')) {
            $file = $request->file('medical_licence');
            $meta = $this->uploadImage($file, 'profile_images');

            if (isset($meta['dirname'], $meta['basename'])) {
                $medicalLicence_full_path = $meta['dirname'] . '/' . $meta['basename'];
            }
        }

        // Save the profile image path in session along with other data
        $data = $request->except('_token', 'photo_id', 'medical_licence');
        $data['photo_id'] = $photoId_full_path;
        $data['medical_licence'] = $medicalLicence_full_path;
        $data['registration_step'] = "completed";
        $authUser = auth()->user();
        $registration = $authUser->update($data);

        $bankDetails = [
            'user_id' => $authUser->id,
            'bank_name' =>  $request->bank_name,
            'branch_name' => $request->branch_name,
            'account_name' => $request->account_name,
            'account_number' => $request->account_number,
            'stripe' => $request->stripe,
            'paypal' => $request->paypal,
            'default' => '1',
        ];
        Account::create($bankDetails);

        if ($registration) {
            $emailData = [
                'subject' => 'Welcome to Surna TeleHealth-The Future of Telemedicine',
                'greeting' => 'Dear ' . $authUser->name,
                'body' => 'Thank you for signing up. We are excited to have you onboard!',
                'actionText' => 'Get Started',
                'actionURL' => url('/doctor/dashboard'),
                'thanks' => 'Thank you for choosing us!',
            ];
            Mail::to($authUser->email)->send(new RegistrationEmail($emailData));
        }
        return redirect()->route('doctor-dashboard')->with('success', 'Registration completed!');
    }
}
