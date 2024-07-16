<?php

namespace Wilbere\Stripe\Services;

use Stripe\StripeClient;

class StripeServices
{

    protected $client;

    public function __construct(string $secret_key)
    {
        // Connect to Stripe API
        // You can use the Stripe PHP library

        $this->client = new StripeClient($secret_key);



    }
}