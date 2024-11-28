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
            $table->string('weight_unit')->nullable()->after('weight'); // Add column
            $table->string('height')->nullable()->after('weight_unit'); // Add column
            $table->string('height_unit')->nullable()->after('height'); // Add column
            $table->string('glucose')->nullable()->after('height_unit'); // Add column
            $table->string('bp')->nullable()->after('fbc'); // Add column
            $table->string('pregnant')->nullable()->after('bp'); // Add column
            $table->string('preg_term')->nullable()->after('pregnant'); // Add column
            $table->string('cancer')->nullable()->after('preg_term'); // Add column
            $table->string('conditions')->nullable()->after('cancer'); // Add column
            $table->string('medicine')->nullable()->after('conditions'); // Add column
            $table->string('medicine_name')->nullable()->after('medicine'); // Add column
            $table->string('dosage')->nullable()->after('medicine_name'); // Add column
            $table->string('allergies')->nullable()->after('dosage'); // Add column
            $table->string('end_date')->nullable()->change(); // Modify column
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('medical_details', function (Blueprint $table) {
            $table->dropColumn([
                'weight_unit',
                'height',
                'height_unit',
                'glucose',
                'bp',
                'pregnant',
                'preg_term',
                'cancer',
                'conditions',
                'medicine',
                'medicine_name',
                'dosage',
                'allergies',
                'end_date',
            ]);
        });
    }
};

