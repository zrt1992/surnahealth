<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('chat_rooms', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user1_id')->constrained('users')->onDelete('cascade');
            $table->foreignId('user2_id')->constrained('users')->onDelete('cascade');
            $table->timestamps();
    
            $table->unique(['user1_id', 'user2_id']); // Prevent duplicate chat rooms
        });
    }
    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('chat_rooms');
    }
};