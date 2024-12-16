<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InsuranceInformation extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'insurance_provider_name',
        'insurance_id',
        'emergency_contact',
        'name',
        'relationship',
        'phone_number',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
