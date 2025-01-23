<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('subscription_prices', function (Blueprint $table) {
            $table->id();
            $table->foreignId('plan_id')->constrained('subscription_plans')->onDelete('cascade');
            $table->string('interval'); // e.g., month, quarter, year
            $table->integer('amount'); // Amount in cents
            $table->string('stripe_price_id'); // Stripe price ID
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('subscription_prices');
    }
};
