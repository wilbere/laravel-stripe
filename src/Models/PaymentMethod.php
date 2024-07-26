<?php

namespace Wilbere\Stripe\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class PaymentMethod extends Model
{
    protected $fillable = [
        'name', 
        'number', 
        'expiry', 
        'cvv', 
        'isPrimary', 
    ];

    protected $hidden = [
        'cvv',
    ];

    public function assignable(): MorphTo
    {
        return $this->morphTo();
    }
}