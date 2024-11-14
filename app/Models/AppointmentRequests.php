<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AppointmentRequests extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'doctor_id', 'slot_id', 'booking_date', 'status','cancel_reason', 
    'cancel_with'];

    // Define relationships

    // User who made the appointment request
    public function user()
    {
        return $this->belongsTo(User::class,'user_id','id');
    }

    // Doctor associated with the appointment request
    public function doctor()
    {
        return $this->belongsTo(User::class,'doctor_id','id');
    }

    // Slot for the appointment request
    public function slot()
    {
        return $this->belongsTo(AvailableTimming::class);
    }
}
