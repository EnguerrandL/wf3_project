<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CartTest extends TestCase
{

 function itworks()

 {
     $response = $this->get('/cart');

     $response->assertSuccessful()
     ->assertViewHas('productsWithQuantitties', function($productsWithQuantitties){
          return $productsWithQuantitties->isEmpty();
     });
 }
}
