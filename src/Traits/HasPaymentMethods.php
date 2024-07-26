<?php

namespace Wilbere\Stripe\Traits;

use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Database\Eloquent\Relations\MorphOne;
use Wilbere\Stripe\Models\PaymentMethod;

trait HasPaymentMethods
{
    /**
     * A Model may have one paument methods
     */
    public function paymentMethod(): MorphOne
    {
        return $this->morphOne(PaymentMethod::class, 'assignable');
    }

    /**
     * A Model may have one api stripe
     */
    public function paymentMethods(): MorphMany
    {
        return $this->morphMany(PaymentMethod::class, 'assignable');
    }
}