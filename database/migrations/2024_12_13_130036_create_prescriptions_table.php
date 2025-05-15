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
        Schema::create('prescriptions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('doctor_id')->constrained('users')->onDelete('cascade');
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->string('date')->nullable(); 
            $table->string('name')->nullable(); 
            $table->integer('quantity')->nullable();
            $table->integer('days')->nullable();
            $table->integer('morning')->nullable();
            $table->integer('afternoon')->nullable();
            $table->integer('evening')->nullable();
            $table->integer('night')->nullable();
            $table->string('doctor_sign')->nullable();
            $table->string('dose_spot_prescription_id')->nullable();


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('prescriptions');
    }
};
