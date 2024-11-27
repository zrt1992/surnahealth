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
        Schema::table('medical_details', function (Blueprint $table) {
            $table->string('weight_unit')->nullable()->after('weight')->change();
            $table->string('height')->nullable()->after('weight_unit')->change();
            $table->string('height_unit')->nullable()->after('height')->change();
            $table->string('glucose')->nullable()->after('height_unit')->change();
            $table->string('bp')->nullable()->after('fbc')->change();
            $table->string('pregnant')->nullable()->after('bp')->change();
            $table->string('preg_term')->nullable()->after('pregnant')->change();
            $table->string('cancer')->nullable()->after('preg_term')->change();
            $table->string('conditions')->nullable()->after('cancer')->change();
            $table->string('medicine')->nullable()->after('conditions')->change();
            $table->string('medicine_name')->nullable()->after('medicine')->change();
            $table->string('dosage')->nullable()->after('medicine_name')->change();
            $table->string('allergies')->nullable()->after('dosage')->change();
            $table->string('end_date')->nullable()->change();
        });
    }
    
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('medical_details', function (Blueprint $table) {
            //
        });
    }
};
