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
        Schema::create('patient_appoitment_preferences', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->string('preferred_doctor')->nullable(); 
            $table->string('preferred_consultation_mode')->nullable(); 
            $table->string('preferred_time')->nullable();
            $table->integer('video_call')->nullable();
            $table->integer('audio_call')->nullable();
            $table->integer('chat')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('patient_appoitment_preferences');
    }
};
