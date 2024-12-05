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
        'user_id',
        'slot_id',
        'status',
    ];

    public function doctor()
    {
        return $this->belongsTo(User::class,'doctor_id','id');
    }

    public function user()
    {
        return $this->belongsTo(User::class,'user_id','id');
    }

    public function slot()
    {
        return $this->belongsTo(AvailableTimming::class,'slot_id','id');
    }
}
