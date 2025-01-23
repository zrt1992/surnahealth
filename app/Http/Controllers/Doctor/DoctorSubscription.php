<?php

namespace App\Http\Controllers\Doctor;

use App\Http\Controllers\Controller;
use App\Models\SubscriptionPlan;
use App\Services\StripeService;
use Illuminate\Http\Request;
use Stripe\Checkout\Session;

class DoctorSubscription extends Controller
{
    protected $stripeService;

    // Inject the bookingRepository
    public function __construct(StripeService $stripeService)
    {
        $this->stripeService = $stripeService;
    }
    public function doctorPaymentMethodStep()
    {
        
        return view('auth.doctor.doctor-register-step5', get_defined_vars());
    }
    
    public function doctorSubscriptionPlansStep()
    {
        $plans = SubscriptionPlan::with('prices')->get();

        $regularSubscription = $plans->where('name','Regular Subscription')->first();
        $premiumSubscription = $plans->where('name','Premium Subscription')->first();
       
        return view('auth.doctor.doctor-register-step6', get_defined_vars());
    }

    public function createSubscriptionCheckoutSession(Request $request, StripeService $stripeService)
    {
        $validated = $request->validate([
            'price_id' => 'required|string',
        ]);

        try {

            $user = auth()->user();
            $successUrl = url('doctor-subscription-success') . '?session_id={CHECKOUT_SESSION_ID}';
            $session = $stripeService->subscribe($user, $validated['price_id'], $successUrl);
            $session = Session::retrieve($session->id);

            return response()->json(['id' => $session->id]);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    public function subscriptionSuccessModal(Request $request)
    {
        $sessionId = $request->query('session_id');

        if (!$sessionId) {
            return redirect('/')->with('error', 'Payment failed or canceled.');
        }
        try {

            $session = Session::retrieve($sessionId);

            if ($session->payment_status !== 'paid') {
                return redirect('/')->with('error', 'Payment not completed. Please try again.');
            }
            $data = auth()->user()->update([
                'subscription_active' => 1,
            ]);

            return view('doctor.doctor-subscription-success', get_defined_vars())->with('success', 'Payment successful!');
        } catch (\Exception $e) {
            return redirect('/')->with('error', 'Failed to Subscribe. ' . $e->getMessage());
        }
    }
}