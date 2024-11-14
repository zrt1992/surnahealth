<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MedicalRecord extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'title',
        'user_id',
        'patient',
        'start_date',
        'hospital_name',
        'symptoms',
        'report',
    ];
}
