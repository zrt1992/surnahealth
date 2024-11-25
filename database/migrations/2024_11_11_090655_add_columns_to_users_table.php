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
        Schema::table('users', function (Blueprint $table) {
            $table->string('display_name', 255)->nullable()->after('email');
            $table->string('phone', 15)->nullable()->after('display_name');
            $table->text('gender')->nullable()->after('phone');
            $table->text('known_languages')->nullable()->after('phone');
            $table->string('profile_image')->nullable()->after('known_languages');
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn([
                'display_name', 
                'phone', 
                'known_languages', 
                'profile_image',
            ]);
        });
    }
};
