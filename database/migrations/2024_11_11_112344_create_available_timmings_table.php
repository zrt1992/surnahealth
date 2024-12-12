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
        Schema::create('available_timmings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->string('availability_type')->nullable();
            $table->string('select_clinic')->nullable();
            $table->string('start_time')->nullable();
            $table->string('end_time')->nullable();
            $table->integer('appointment_intervals')->nullable();
            $table->integer('appointment_duration')->nullable();
           $table->string('availability_day')->nullable();
           $table->decimal('appointment_fees', 8, 2)->nullable();
           $table->string('availability_fees')->nullable();
            $table->integer('space_1')->default(0);
            $table->integer('space_2')->default(0);
            $table->integer('space_3')->default(0);
            $table->integer('space_4')->default(0);
           
            $table->timestamps();
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('available_timmings');
    }
};
