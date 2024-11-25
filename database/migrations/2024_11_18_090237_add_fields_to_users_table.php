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
            $table->string('dob')->nullable()->after('email'); // Date of Birth
            $table->string('blood_group', 3)->nullable()->after('dob'); // Blood Group
            $table->string('country', 100)->nullable()->after('blood_group'); // Country
            $table->string('pincode', 20)->nullable()->after('country'); // Pincode
            $table->string('city', 100)->nullable()->after('pincode'); // City
            $table->string('state', 100)->nullable()->after('city'); // State
            $table->string('address', 255)->nullable()->after('state'); // Address
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn([
                'dob',
                'blood_group',
                'country',
                'pincode',
                'city',
                'state',
                'address',
            ]);
        });
    }
};
