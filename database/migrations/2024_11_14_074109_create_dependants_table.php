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
        Schema::create('dependants', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->string('profile_image')->nullable(); // Path to the profile image
            $table->string('name');
            $table->string('relationship');
            $table->date('dob'); // Date of Birth
            $table->enum('gender', ['male', 'female', 'other']);
            $table->timestamps();;
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dependants');
    }
};
