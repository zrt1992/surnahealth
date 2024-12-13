<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prescription extends Model
{
    use HasFactory;

    protected $fillable = [
        'doctor_id',
        'user_id',
        'date',
        'name',
        'quantity',
        'days',
        'morning',
        'afternoon',
        'evening',
        'night',
        'doctor_sign'
    ];

    public function doctor()
    {
        return $this->belongsTo(User::class,'doctor_id','id');
    }

    public function user()
    {
        return $this->belongsTo(User::class,'user_id','id');
    }
}
