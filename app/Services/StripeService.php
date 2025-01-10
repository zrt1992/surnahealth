<?php

namespace App\Services;

use Stripe\Stripe;
use Stripe\Checkout\Session;

class StripeService
{
    public function __construct()
    {
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
    public function createCheckoutSession(string $productName, int $amount, string $successUrl, string $cancelUrl, $customerEmail,  array $metadata): string
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
}
