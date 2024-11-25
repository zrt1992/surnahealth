<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DoctorAward extends Model
{
    use HasFactory;

    protected $fillable=[
        'doctor_id',
        'award_name',
        'year',
        'description'
    ];
}
