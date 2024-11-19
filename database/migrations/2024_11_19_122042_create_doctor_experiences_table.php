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
        Schema::create('doctor_experiences', function (Blueprint $table) {
            $table->id();
            $table->foreignId('doctor_id')->constrained('users')->onDelete('cascade');
            $table->string('hospital_logo')->nullable(); 
            $table->string('title')->nullable(); 
            $table->string('hospital')->nullable();
            $table->string('year_of_experience')->nullable();
            $table->string('location')->nullable();
            $table->enum('employment_type', ['full-time', 'part-time', 'contract'])->nullable();
            $table->text('job_description')->nullable();
            $table->string('start_date')->nullable();
            $table->string('end_date')->nullable();
            $table->boolean('currently_working_here')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('doctor_experiences');
    }
};
