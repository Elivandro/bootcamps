<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_user()
    {
        $user = User::factory()->create();

        $response = $this->post('/login', [
            'email'     => $user->email,
            'password'  => 'password'
        ]);

        $this->actingAs($user);

        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function test_create_user()
    {

        $response    = $this->post('/login/create', [
            'name'      =>  'admin',
            'email'     => 'admin@example.com',
            'password'  => 'password',
            'is_admin'  => 1,
        ]);

        $response->assertStatus(200);
    }
}
