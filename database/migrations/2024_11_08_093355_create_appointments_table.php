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
        Schema::create('appointments', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->nullable();  
            $table->unsignedBigInteger('doctor_id')->nullable(); 
            $table->string('title')->nullable(); // Meeting title
            $table->text('description')->nullable(); // Meeting description
            $table->dateTime('start_date')->nullable(); // Start date and time
            $table->dateTime('end_date')->nullable(); // End date and time
            $table->string('email')->nullable(); // Attendee's email
            $table->string('google_meet_link')->nullable();
            $table->string('slot_id')->nullable();
            $table->string('status')->nullable();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('set null'); 
            $table->foreign('doctor_id')->references('id')->on('users')->onDelete('set null');  
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('appointments');
    }
};
