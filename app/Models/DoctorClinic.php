<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DoctorClinic extends Model
{
    use HasFactory;

    protected $fillable = [
        'doctor_id',
        'clinic_name',
        'location',
        'address',
        'hospital_clinic_affiliation',
    ];

    public function gallery()
    {
        return $this->hasMany(DoctorClinicGallery::class, 'clinic_id', 'id');
    }
}
