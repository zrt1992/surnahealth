<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dependant extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'profile_image',
        'name',
        'relationship',
        'dob',
        'gender',
    ];
}
