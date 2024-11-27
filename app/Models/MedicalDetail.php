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
        'end_date',
        'allergies',
        'glucose',
        'pregnant',
        'preg_term',
        'conditions',
        'cancer',
        'medicine',
        'medicine_name',
        'dosage',
    ];

    public function user()
    {
        return $this->belongsTo(User::class,'user_id','id');
    }
}
