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
        Schema::create('medical_details', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->float('bmi')->nullable();
            $table->integer('heart_rate')->nullable();
            $table->string('glucose')->nullable(); // Add column
            $table->string('bp')->nullable(); // Add column
            $table->string('fbc')->nullable(); // Full blood count or similar metric
            $table->string('body_temperature')->nullable();
            $table->string('spo2')->nullable();
            $table->float('weight')->nullable();
            $table->string('weight_unit')->nullable(); // Add column
            $table->string('height')->nullable(); // Add column
            $table->string('height_unit')->nullable(); // Add column
            $table->string('pregnant')->nullable(); // Add column
            $table->string('preg_term')->nullable(); // Add column
            $table->string('existing_medical_conditions')->nullable();
            $table->string('medications_currently_using')->nullable();
            $table->string('primarly_health_concern')->nullable();
            $table->string('allergies')->nullable();
            $table->string('cardiac_history')->nullable();
            $table->string('end_date')->nullable();
          
           

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('medical_details');
    }
};
