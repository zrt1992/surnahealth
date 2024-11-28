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
            $table->string('gender')->nullable()->after('phone')->change();
            $table->string('height')->nullable()->after('gender');
            $table->string('weight')->nullable()->after('height');
            $table->string('quali_certificate')->nullable()->after('profile_image');
            $table->string('photo_id')->nullable()->after('quali_certificate');
            $table->string('clinical_employment')->nullable()->after('photo_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
};
