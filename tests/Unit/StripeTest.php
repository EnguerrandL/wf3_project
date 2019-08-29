<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class StripeTest extends TestCase
{


    const LAST4 = [
        'tok_visa' => '4242',
    ];

    function itworks()
    {
        $stripe = app(Stripe::class);

       $last4 = $stripe->charge('tok_visa', 10 * 100);

       $this->assertEquals(self::LAST4['tok_visa'], $last4);

    }
}
