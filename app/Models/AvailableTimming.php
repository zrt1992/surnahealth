<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AvailableTimming extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'availability_type',
        'select_clinic',
        'start_time',
        'end_time',
        'appointment_intervals',
        'appointment_duration',
        'availability_day',
        'appointment_fees',
        'space_1',
        'space_2',
        'space_3',
        'space_4',
    ];

    public function doctor()
{
    return $this->belongsTo(User::class); // Assuming `User` model represents a doctor
}
}
