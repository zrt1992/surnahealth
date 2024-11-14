<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SpecializationSeeder extends Seeder
{
    public function run()
    {
        DB::table('specializations')->insert([
            // General Specializations
            ['name' => 'Cardiology'],
            ['name' => 'Dermatology'],
            ['name' => 'Neurology'],
            ['name' => 'Orthopedics'],
            ['name' => 'Pediatrics'],
            ['name' => 'Gynecology'],
            ['name' => 'Ophthalmology'],
            ['name' => 'Psychiatry'],
            ['name' => 'Radiology'],
            ['name' => 'Surgery'],
            
            // Surgical Specializations
            ['name' => 'General Surgery'],
            ['name' => 'Plastic Surgery'],
            ['name' => 'Cardiothoracic Surgery'],
            ['name' => 'Orthopedic Surgery'],
            ['name' => 'Neurosurgery'],
            ['name' => 'Pediatric Surgery'],
            ['name' => 'Urology'],
            ['name' => 'Vascular Surgery'],
            ['name' => 'Trauma Surgery'],
            ['name' => 'Transplant Surgery'],
            
            // Internal Medicine Specializations
            ['name' => 'Internal Medicine'],
            ['name' => 'Endocrinology'],
            ['name' => 'Gastroenterology'],
            ['name' => 'Hematology'],
            ['name' => 'Infectious Diseases'],
            ['name' => 'Nephrology'],
            ['name' => 'Pulmonology'],
            ['name' => 'Rheumatology'],
            ['name' => 'Immunology'],
            ['name' => 'Oncology'],
            
            // Women’s Health Specializations
            ['name' => 'Obstetrics'],
            ['name' => 'Fertility & Reproductive Medicine'],
            ['name' => 'Menopause Care'],
            
            // Pediatric Specializations
            ['name' => 'Pediatric Cardiology'],
            ['name' => 'Pediatric Neurology'],
            ['name' => 'Pediatric Endocrinology'],
            ['name' => 'Pediatric Hematology/Oncology'],
            ['name' => 'Pediatric Infectious Diseases'],
            ['name' => 'Pediatric Rheumatology'],
            
            // Mental Health Specializations
            ['name' => 'Clinical Psychology'],
            ['name' => 'Addiction Psychiatry'],
            ['name' => 'Forensic Psychiatry'],
            ['name' => 'Child Psychiatry'],
            ['name' => 'Geriatric Psychiatry'],
            
            // Diagnostic Specializations
            ['name' => 'Pathology'],
            ['name' => 'Laboratory Medicine'],
            ['name' => 'Nuclear Medicine'],
            
            // Rehabilitation & Therapy Specializations
            ['name' => 'Physical Therapy'],
            ['name' => 'Occupational Therapy'],
            ['name' => 'Speech Therapy'],
            ['name' => 'Sports Medicine'],
            ['name' => 'Pain Management'],
            ['name' => 'Rehabilitation Medicine'],
            
            // Others
            ['name' => 'Anesthesiology'],
            ['name' => 'Emergency Medicine'],
            ['name' => 'Family Medicine'],
            ['name' => 'Geriatrics'],
            ['name' => 'Preventive Medicine'],
            ['name' => 'Toxicology'],
            ['name' => 'Sleep Medicine'],
            ['name' => 'Forensic Medicine'],
            ['name' => 'Clinical Research'],
            ['name' => 'Occupational Medicine'],
        ]);
    }
}
