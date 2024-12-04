<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\Storage;
use App\Traits\FileUpload;

class DoctorRegistrationController extends Controller
{
    use FileUpload;
    public function store(Request $request)
    {
        $result = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:' . User::class],
            'password' => ['required', 'string', 'confirmed', Rules\Password::defaults()],
            // 'password' => ['required'],

        ]);
      
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
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
        'profile_image' => 'required|image|max:2048',
    ]);

    // Handle file upload
    $file = $request->file('profile_image');
    $meta = $this->uploadImage($file, 'profile_images');
    $full_path = isset($meta['dirname'], $meta['basename']) ? $meta['dirname'] . '/' . $meta['basename'] : null;

    // Update the authenticated user's record
    $authUser = auth()->user();
    $authUser->update([
        'profile_image' => $full_path,
        'registration_step' => "+2",
    ]);

    return redirect()->route('doctor-register-step2');
}


    public function storeStep2(Request $request)
    {
        $request->validate([
            'gender' => 'required|in:Male,Female',
            'address' => 'required|string|max:255',
            'zipcode' => 'required|numeric',
            'quali_certificate' => 'required',
            'photo_id' => 'required',
            'clinical_employment' => 'required',
            'age' => 'required',
        ]);

        if ($request->file('quali_certificate')) {
            $file = $request->file('quali_certificate');
            $meta = $this->uploadImage($file, 'profile_images');

            if (isset($meta['dirname'], $meta['basename'])) {
                $qCertificate_full_path = $meta['dirname'] . '/' . $meta['basename'];
            }
        }
        if ($request->file('photo_id')) {
            $file = $request->file('photo_id');
            $meta = $this->uploadImage($file, 'profile_images');

            if (isset($meta['dirname'], $meta['basename'])) {
                $photoId_full_path = $meta['dirname'] . '/' . $meta['basename'];
            }
        }
        if ($request->file('clinical_employment')) {
            $file = $request->file('clinical_employment');
            $meta = $this->uploadImage($file, 'profile_images');

            if (isset($meta['dirname'], $meta['basename'])) {
                $clinicalEmployment_full_path = $meta['dirname'] . '/' . $meta['basename'];
            }
        }

        // Save the profile image path in session along with other data
        $data = $request->except('_token', 'quali_certificate', 'photo_id', 'clinical_employment');
        $data['quali_certificate'] = $qCertificate_full_path;
        $data['photo_id'] = $photoId_full_path;
        $data['clinical_employment'] = $clinicalEmployment_full_path;
        $data['dob'] = $request->age;
        $data['registration_step'] = "+3";
        $authUser = auth()->user();
        $authUser->update($data);
        // Merge with step1 session data
        // $data = array_merge(session('registration.step1', []), $data);
        // session(['registration.step2' => $data]);

        return redirect()->route('doctor-register-step3');
    }


    public function storeStep3(Request $request)
    {
        $request->validate([
            'city' => 'required',
            'state' => 'required',
        ]);
        $data = $request->all();
        $data['registration_step'] = "completed";
        $authUser = auth()->user();
        $authUser->update($data);
    
        session()->forget('registration');

        return redirect()->route('doctor-dashboard')->with('success', 'Registration completed!');
    }
}
