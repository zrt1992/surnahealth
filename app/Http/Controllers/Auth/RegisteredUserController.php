<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\MedicalDetail;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;
use App\Traits\FileUpload;

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
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'phone' => ['required', 'string', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);
      
        $role = $request->get('role');
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'password' => Hash::make($request->password),
        ]);
        $user->assignRole('patient');
//        dd('asd');


        event(new Registered($user));

        Auth::login($user);

        return redirect(route('patient-register-step1', absolute: false));
    }

    public function storeStep1(Request $request)
    {
        $request->validate([
            'profile_image' => 'required|image|max:2048',
        ]);

        $file = $request->file('profile_image');
        $meta = $this->uploadImage($file, 'profile_images');

        if (isset($meta['dirname'], $meta['basename'])) {
            $full_path = $meta['dirname'] . '/' . $meta['basename'];
        }

        $data = $request->except('_token');
        $data['profile_image'] = $full_path;
        $data['registration_step'] = '+2';

        $authUser = auth()->user();
        $authUser->update($data);
        return redirect()->route('patient-register-step2');
    }

    public function storeStep2(Request $request)
{
    $request->validate([
        'gender' => 'required|in:Male,Female',
        'blood_group' => 'required|string|max:255',
        'age' => 'required|numeric',
        'weight' => 'required',
        'height' => 'required',
        'glucose' => 'required',
        'bp' => 'required',
        'heart_rate' => 'required',
    ]);
    $userData = array_merge(
        $request->only(['gender', 'blood_group','age',])
    );

    $medicalData = $request->only([
        'weight',
         'weight_unit',
        'height',
       'height_unit',
        'allergies',
        'glucose',
        'bp',
        'heart_rate',
        'pregnant',
        'preg_term',
        'cancer',
        'conditions',
        'medicine',
        'medicine_name',
        'dosage',
    ]);
    // dd($medicalData);
    $medicalData['user_id'] = auth()->user()->id;
    $medicalData['conditions'] = json_encode($medicalData['conditions']);
    $medicalData['medicine_name'] = json_encode($medicalData['medicine_name']);
    $medicalData['dosage'] = json_encode($medicalData['dosage']);

    $authUser = auth()->user();
    $authUser['registration_step'] = 'completed';
    $authUser->update($userData);

   
    $request['user_id'] = auth()->user()->id;
    // dd($medicalData);
    $medicalDetails = MedicalDetail::create($medicalData);

    return redirect()->route('patient-dashboard')->with('success', 'Registration completed!');
}

}
