<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DoctorExperience extends Model
{
    use HasFactory;

    protected $fillable = [
        'doctor_id',
        'hospital_logo',
        'title',
        'hospital',
        'year_of_experience',
        'location',
        'employment_type',
        'job_description',
        'start_date',
        'end_date',
        'currently_working_here',
    ];
}
