<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubscriptionPrice extends Model
{
    use HasFactory;

    protected $fillable = ['plan_id', 'interval', 'amount', 'stripe_price_id'];

    public function plan()
    {
        return $this->belongsTo(SubscriptionPlan::class);
    }
}
