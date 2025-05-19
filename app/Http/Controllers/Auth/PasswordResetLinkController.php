<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Mail\OtpVerificationEmail;
use App\Models\Otp;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Password;
use Illuminate\View\View;

class PasswordResetLinkController extends Controller
{
    /**
     * Display the password reset link request view.
     */
    public function create(): View
    {
        return view('forgot-password');
    }

    /**
     * Handle an incoming password reset link request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $request->validate([
            'email' => ['required', 'email', 'exists:users,email'],
        ]);

        $otp = rand(100000, 999999);

        // Store or update the OTP in password_resets table
        // Store or update OTP
        Otp::updateOrCreate(
            ['email' => $request->email],
            [
                'otp' => $otp,
                'expires_at' => now()->addMinutes(10), // optional expiry
            ]
        );

        // Send OTP via email
        $emailData = [
    'subject' => 'Reset Password OTP',
    'greeting' => 'Hello!',
    'otp' => $otp, // ✅ Add this line
    'body' => "Your OTP to reset password is: $otp",
    'thanks' => 'Thanks for using our service!',
    'actionURL' => url('/'), // Optional
];

        Mail::to($request->email)->send(new OtpVerificationEmail($emailData));


        // Redirect to OTP verification page
        return redirect()->route('otp.verification')->with('email', $request->email);
    }

     public function otpVerification(): View
    {
        return view('otp-verification');
    }

    public function verifyOtp(Request $request)
    {
        $request->validate([
            'otp' => 'required',
        ]);

        $record = Otp::where('otp', $request->otp)->first();

        if ($record) {
            return redirect()->route('password.reset')->with('email', $record->email);
        }

        return back()->withErrors(['otp' => 'Invalid or expired OTP']);
    }

    public function resetPassword(): View
    {
        return view('reset-password');
    }

    public function resetPasswordStore(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => ['required', 'confirmed'],
        ]);

        $user = User::where('email', $request->email)->firstOrFail();
        $user->password = Hash::make($request->password);
        $user->save();

        Otp::where('email', $request->email)->delete();

        return redirect()->route('login')->with('status', 'Password has been reset successfully.');
    }
}
