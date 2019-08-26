<?php

namespace Tests\Feature;
namespace App\GiftCard;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ShowGiftCardsTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testExample()
    {
      $giftcards = factory(GiftCards::class, 3)->create();

      $this->get('/')
      ->assertSuccessful()
      ->assertViewIs('giftcards.index')
      ->assertViewHas('giftcards', $giftcards);
    }
}
