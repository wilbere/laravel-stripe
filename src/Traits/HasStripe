<?php

namespace Wilbere\Stripe\Traits;

use Illuminate\Database\Eloquent\Relations\MorphOne;
use Wilbere\Stripe\Models\ApiStripe;

class HasStripe
{
    /**
     * A Model may have one api stripe
     */
    public function apiStripe(): MorphOne
    {
        return $this->morphOne(ApiStripe::class, 'stripeable');
    }
}