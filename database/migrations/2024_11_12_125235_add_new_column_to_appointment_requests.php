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
        Schema::table('appointment_requests', function (Blueprint $table) {
            $table->string('cancel_reason')->nullable();
            $table->string('cancel_with')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('appointment_requests', function (Blueprint $table) {
            $table->dropColumn('cancel_reason');
            $table->dropColumn('cancel_with');

        });
    }
};
