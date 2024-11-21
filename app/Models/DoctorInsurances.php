<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DoctorInsurances extends Model
{
    use HasFactory;
    protected $fillable=[
        'doctor_id',
        'insurance_name',
        'logo',
    ];
}
