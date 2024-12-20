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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('display_name', 255)->nullable();
            $table->string('phone', 15)->nullable();
            $table->text('gender')->nullable();
            $table->text('known_languages')->nullable();
            $table->string('profile_image')->nullable();
            $table->string('dob')->nullable(); // Date of Birth
            $table->string('blood_group', 3)->nullable(); // Blood Group
            $table->string('country', 100)->nullable(); // Country
            $table->string('pincode', 20)->nullable(); // Pincode
            $table->string('city', 100)->nullable(); // City
            $table->string('state', 100)->nullable(); // State
            $table->string('address', 255)->nullable(); // Address
            $table->string('years_of_experience')->nullable();
            $table->string('medical_licence_number')->nullable();
            $table->string('consultation_fees')->nullable();
            $table->string('height')->nullable();
            $table->string('weight')->nullable();
            $table->string('photo_id')->nullable();
            $table->string('medical_licence')->nullable();
            $table->string('registration_step')->default("+1");
            $table->string('referral_code')->nullable();
            $table->string('term_and_condition')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });

        Schema::create('password_reset_tokens', function (Blueprint $table) {
            $table->string('email')->primary();
            $table->string('token');
            $table->timestamp('created_at')->nullable();
        });

        Schema::create('sessions', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->foreignId('user_id')->nullable()->index();
            $table->string('ip_address', 45)->nullable();
            $table->text('user_agent')->nullable();
            $table->longText('payload');
            $table->integer('last_activity')->index();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
        Schema::dropIfExists('password_reset_tokens');
        Schema::dropIfExists('sessions');
    }
};
