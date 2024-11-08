<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    use HasFactory;

    protected $table = 'appointments';

    // Define the fillable attributes to allow mass assignment
    protected $fillable = [
        'title',
        'description',
        'start_date',
        'end_date',
        'email',
        'google_meet_link',
        'doctor_id', 
    ];
}
