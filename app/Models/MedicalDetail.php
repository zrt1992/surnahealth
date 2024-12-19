<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MedicalDetail extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'bmi',
        'heart_rate',
        'weight',
        'height',
        'weight_unit',
        'height_unit',
        'fbc',
        'bp',
        'body_temperature',
        'spo2',
        'end_date',
        'glucose',
        'pregnant',
        'preg_term',
        'existing_medical_conditions',
        'medications_currently_using',
        'primarly_health_concern',
        'allergies',
        'cardiac_history'
       
    ];

    public function user()
    {
        return $this->belongsTo(User::class,'user_id','id');
    }
}
