<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DoctorEducation extends Model
{
    use HasFactory;

    protected $table = 'qualifications';
    protected $fillable = [
       'doctor_id',
        'medical_school',
        'residency',
       'certifications',
    ];

    // A DoctorEducation belongs to a doctor
    public function doctor()
    {
        return $this->belongsTo(User::class);
    }
}
