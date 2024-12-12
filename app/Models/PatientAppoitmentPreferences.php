<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PatientAppoitmentPreferences extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'preferred_doctor',
        'preferred_consultation_mode',
        'preferred_time',
        'video_call',
        'audio_call',
        'chat',
    ];
}
