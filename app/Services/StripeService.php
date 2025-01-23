<?php

namespace App\Services;

use Stripe\Stripe;
use Stripe\Checkout\Session;
use Stripe\StripeClient;

class StripeService
{
    protected $stripe;

    public function __construct()
    {
        $this->stripe = new StripeClient(config('services.stripe.secret'));
        Stripe::setApiKey(config('services.stripe.secret'));
    }

    /**
     * Create a Stripe Checkout Session.
     *
     * @param string $productName
     * @param int $amount
     * @param string $successUrl
     * @param string $cancelUrl
     * @return string
     */
    public function createCheckoutSession(string $productName, int $amount, string $successUrl, string $cancelUrl, $customerEmail = null,  array $metadata = null): string
    {
        $session = Session::create([
            'payment_method_types' => ['card'],
            'line_items' => [[
                'price_data' => [
                    'currency' => 'usd',
                    'product_data' => [
                        'name' => $productName,
                    ],
                    'unit_amount' => $amount * 100,
                ],
                'quantity' => 1,
            ]],
            'metadata' => $metadata,
            'mode' => 'payment',
            'success_url' => $successUrl,
            'cancel_url' => $cancelUrl,
            'customer_email' => $customerEmail,
        ]);

        return $session->id;
    }

    public function subscribe($user, string $priceId,string $successUrl)
    {
        try {

            if (!$user->stripe_customer_id) {
                $customer = $this->createCustomer($user);
            }

            $customerId = $user->stripe_customer_id;

            $stripe = new \Stripe\StripeClient(config('services.stripe.secret'));
            $session = $stripe->checkout->sessions->create([
                'payment_method_types' => ['card'],
                'line_items' => [[
                    'price' => $priceId,
                    'quantity' => 1,
                ]],
                'mode' => 'subscription',
                'customer' => $customerId,
                'success_url' => $successUrl,
                'cancel_url' => route('subscription.cancel'),
            ]);

            return $session;
        } catch (\Exception $e) {
            return [
                'status' => 'error',
                'message' => $e->getMessage(),
            ];
        }
    }

    private function createCustomer($user): string
    {
        $stripeCustomer = $this->stripe->customers->create([
            'email' => $user->email,
            'name' => $user->name,
        ]);

        $user->update(['stripe_customer_id' => $stripeCustomer->id]);

        return $stripeCustomer->id;
    }

    /**
     * Attach a payment method to a customer and set it as default.
     *
     * @param string $customerId
     * @param string $paymentMethodId
     * @return void
     */
    private function attachPaymentMethod(string $customerId, string $paymentMethodId): void
    {
        // Attach payment method to customer
        $this->stripe->paymentMethods->attach($paymentMethodId, [
            'customer' => $customerId,
        ]);

        // Set as default payment method
        $this->stripe->customers->update($customerId, [
            'invoice_settings' => [
                'default_payment_method' => $paymentMethodId,
            ],
        ]);
    }
}
