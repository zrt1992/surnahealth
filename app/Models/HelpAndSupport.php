<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HelpAndSupport extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'ticket_title',
        'ticket_detail',
        'ticket_status',
        'ticket_return',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
