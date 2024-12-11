<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ConsultationMode extends Model
{
    use HasFactory;
    protected $fillable = ['doctor_id', 'consultation_mode'];

    public function doctor()
    {
        return $this->belongsTo(User::class, 'doctor_id');
    }
}
