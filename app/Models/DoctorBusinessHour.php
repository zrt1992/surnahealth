<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DoctorBusinessHour extends Model
{
    use HasFactory;

    protected $fillable=[
        'doctor_id',
        'select_business_days',
        'start_time',
        'end_time',
        'time_zone'
    ];
}
