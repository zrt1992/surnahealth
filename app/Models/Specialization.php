<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Specialization extends Model
{
    protected $fillable = ['name'];

    // A specialization can belong to many doctors
    // public function doctors()
    // {
    //     return $this->belongsToMany(User::class, 'doctor_specialization');
    // }

    public function doctors()
    {
        return $this->belongsToMany(User::class, 'doctor_specializations', 'specialization_id', 'user_id')
                    ->withTimestamps();
    }
}
