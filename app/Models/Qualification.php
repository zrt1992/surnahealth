<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Qualification extends Model
{
    use HasFactory;

    protected $fillable = [
       'doctor_id',
        'name_of_institution',
        'course',
       'start_date',
       'end_date',
       'no_of_years',
       'description',
    ];

    // A qualification belongs to a doctor
    public function doctor()
    {
        return $this->belongsTo(User::class);
    }
}
