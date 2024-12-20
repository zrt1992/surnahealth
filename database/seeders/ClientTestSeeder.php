<?php

namespace Database\Seeders;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class ClientTestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       
        $doctor = User::create([
            'name' => 'Hallen Doctor',
            'email' => 'hallendoctor@gmail.com',
            'phone' => '+12015550123',
            'gender' => 'female',
            'known_languages' => 'english',
            'dob' => '1990-10-10',
            'city' => 'New York',
            'state' => 'US',
            'country' => 'USA',
            'years_of_experience' => '5',
            'consultation_fees' => '2000',
            'medical_licence_number' => '00878',            
            'registration_step' => 'completed',
            'term_and_condition' => '1',
            'password' => Hash::make('123456789'),
            'created_at' => now(),
            'updated_at' => now(),

        ]);
        $doctor->assignRole('doctor');
        // Insert related data into the specialization table
        DB::table('doctor_specialization')->insert([
            'user_id' => $doctor->id,
            'specialization_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

         // Insert related data into the experience table
        DB::table('doctor_experiences')->insert([
            'doctor_id' => $doctor->id,
            'hospital_logo' => 'hospital_logo.png',
            'title' => 'Senior Dermatologist',
            'hospital' => 'General Hospital',
            'year_of_experience' => 8,
            'location' => 'New York, NY',
            'employment_type' => 'Full-Time',
            'job_description' => 'Providing dermatology services and supervising junior doctors.',
            'start_date' => '2015-06-01',
            'end_date' => '2023-06-01',
            'currently_working_here' => false,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Insert related data into the education table
        DB::table('qualifications')->insert([
            'doctor_id' => $doctor->id,
            'medical_school' => 'Harvard Medical School',
            'residency' => 'New York Presbyterian Hospital',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Insert related data into the availability_time table
        DB::table('available_timmings')->insert([
            'user_id' => $doctor->id,
            'availability_type' => 'global',
            'start_time' => '16:00 PM',
            'end_time' => '20:00 PM',
            'appointment_intervals' => 30,
            'appointment_duration' => 30,
            'availability_day' => 'Monday',
            'appointment_fees' => 100.00,
            'availability_fees' => 50.00,
            'space_1' => '1',
            'space_2' => 0,
            'space_3' => 0,
            'space_4' => 0,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        $patient = User::create([
            'name' => 'Hallen Patient',
            'email' => 'hallenpatient@gmail.com',
            'phone' => '+12015550007',
            'gender' => 'female',
            'known_languages' => 'english',
            'dob' => '1990-10-10',
            'city' => 'New York',
            'state' => 'US',
            'country' => 'USA',  
            'registration_step' => 'completed',
            'term_and_condition' => '1',
            'password' => Hash::make('123456789'),
            'created_at' => now(),
            'updated_at' => now(),

        ]);
        $patient->assignRole('patient');
    }
}
