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
        'fbc',
        'end_date',
    ];

    public function user()
    {
        return $this->belongsTo(User::class,'user_id','id');
    }
}
