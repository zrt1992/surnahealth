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
        Schema::create('accounts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->string('bank_name')->nullable(); 
            $table->string('branch_name')->nullable(); 
            $table->string('account_number')->nullable();
            $table->string('account_name')->nullable();
            $table->decimal('total_balance', 10, 2)->default(0);
            $table->string('stripe')->nullable();
            $table->string('paypal')->nullable();
            $table->string('credit_card')->nullable();
            $table->string('mobile_money')->nullable();
            $table->string('default')->nullable();
            $table->string('status')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('accounts');
    }
};
