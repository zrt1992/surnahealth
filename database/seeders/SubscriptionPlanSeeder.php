<?php

namespace Database\Seeders;

use App\Models\SubscriptionPlan;
use App\Models\SubscriptionPrice;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Stripe\Price;
use Stripe\Product;
use Stripe\Stripe;

class SubscriptionPlanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Set the Stripe API key
        Stripe::setApiKey(config('services.stripe.secret'));

        $plans = [
            [
                'name' => 'Regular Subscription',
                'description' => 'Platform access with personalized treatment plans, E-prescription services, basic health analytics, access to general health blogs and articles, family plan option.',
                'prices' => [
                    ['amount' => 1500, 'interval' => 'month'], // $15/month
                    ['amount' => 4000, 'interval' => 'quarter'], // $40/quarter
                    ['amount' => 15000, 'interval' => 'year'], // $150/year
                    ['amount' => 3000, 'interval' => 'month', 'family' => true], // Family plan: $30/month
                ],
            ],
            [
                'name' => 'Premium Subscription',
                'description' => 'Everything in Regular Subscription, priority scheduling, free consultation, in-depth health analytics, exclusive health content.',
                'prices' => [
                    ['amount' => 3500, 'interval' => 'month'], // $35/month
                    ['amount' => 10000, 'interval' => 'quarter'], // $100/quarter
                    ['amount' => 35000, 'interval' => 'year'], // $350/year
                ],
            ],
        ];

        foreach ($plans as $planData) {
            // Create a product in Stripe
            $product = Product::create([
                'name' => $planData['name'],
                'description' => $planData['description'],
            ]);

            // Save the plan to the database
            $plan = SubscriptionPlan::create([
                'name' => $planData['name'],
                'description' => $planData['description'],
                'stripe_product_id' => $product->id,
            ]);

            // Create prices for the product
            foreach ($planData['prices'] as $priceData) {
                $interval = $priceData['interval'] === 'quarter' ? 'month' : $priceData['interval'];
                $intervalCount = $priceData['interval'] === 'quarter' ? 3 : 1;
            
                $price = Price::create([
                    'unit_amount' => $priceData['amount'],
                    'currency' => 'usd',
                    'recurring' => [
                        'interval' => $interval,
                        'interval_count' => $intervalCount,
                    ],
                    'product' => $product->id,
                ]);
            
                // Save the price to the database
                SubscriptionPrice::create([
                    'plan_id' => $plan->id,
                    'interval' => $priceData['interval'], // Keep the original interval for reference
                    'amount' => $priceData['amount'],
                    'stripe_price_id' => $price->id,
                ]);
            }
            
        }
    }
}
