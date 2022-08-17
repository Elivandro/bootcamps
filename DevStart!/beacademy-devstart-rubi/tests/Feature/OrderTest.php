<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class OrderTest extends TestCase
{
    public function test_if_order_index_redirect_to_login_without_authenticated()
    {
        $response = $this->get('/order/index');
        $response->assertRedirect('/user/entrar');
        $response->assertStatus(302);
    }
}
