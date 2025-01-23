<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubscriptionPlan extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description', 'stripe_product_id'];

    public function prices()
    {
        return $this->hasMany(SubscriptionPrice::class, 'plan_id');
    }
}
