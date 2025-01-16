<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Services\StripeService;
use Carbon\Carbon;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    protected $stripeService;

    // Inject the bookingRepository
    public function __construct( StripeService $stripeService)
    {
        $this->stripeService = $stripeService;
    }

    public function search()
    {
        $allDoctors =  User::role('doctor')->with('doctorSpecialization','doctorEducation','doctorClinic.gallery','availableTimings','appointmentRequests')->get();
      
        return view('front-end.search', get_defined_vars());
    }

    public function doctorProfile($id = null)
    {
        $doctor =  User::with('doctorSpecialization','doctorEducation','doctorExperiences','doctorAwards','doctorClinic.gallery','doctorBusinessHour','availableTimings','appointmentRequests')->find($id);
        return view('front-end.doctor-profile-2', get_defined_vars());
    }

    public function showBookingForm($doctorId = null)
    {
       
        // Fetch doctor and their available timings
        $doctor = User::with('availableTimings')->find($doctorId);
        $currentDate = Carbon::now()->format('d F Y');  // e.g., "11 November 2023"
        $currentDay = Carbon::now()->format('l'); 
        return view('front-end.booking',get_defined_vars());
    }

    public function blogDetails()
    {
        return view('front-end.blog-details', get_defined_vars());
    }

    public function breastCancer()
    {
        return view('front-end.breast-cancer', get_defined_vars());
    }

    public function createCheckoutSession(Request $request)
    {
        $validated = $request->validate([
            'payment_amount' => 'required|numeric|min:1',
            'success_url' => 'required',
        ]);

        $amount = $validated['payment_amount']; // Amount in cents
        $successUrl = $validated['success_url'] . '?session_id={CHECKOUT_SESSION_ID}';
        $cancelUrl = url('/');

       
        try {
            // Create Stripe session
            $sessionId = $this->stripeService->createCheckoutSession(
                'Assesment Risk',
                $amount,
                $successUrl,
                $cancelUrl,
            );
            return response()->json(['id' => $sessionId]);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }
}
