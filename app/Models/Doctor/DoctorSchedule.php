<?php

namespace App\Models\Doctor;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DoctorSchedule extends Model
{
    use HasFactory;

    protected $table='doctor_time_slots';
    protected $guarded = [];
    // protected $fillable = ['user_id','day','slot_start_time','appointment_interval','status'];

}