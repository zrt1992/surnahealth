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
        Schema::table('available_timmings', function (Blueprint $table) {
            $table->decimal('appointment_fees', 8, 2)->nullable()->after('availability_day'); // Replace 'column_name' with the column after which you want this to appear
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('available_timmings', function (Blueprint $table) {
            $table->dropColumn('appointment_fees');
        });
    }
};
