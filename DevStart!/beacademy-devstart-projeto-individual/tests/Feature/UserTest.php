<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserTest extends TestCase
{

    public function test_login()
    {
        $user = User::factory()->create();

        $response = $this->post('/login', [
            'email'     => $user->email,
            'password'  => 'password',
        ]);

        $this->actingAs($user);

        $response = $this->get('/dashboard');

        $response->assertStatus(200);
    }

    public function test_create_phone()
    {
        $user = User::factory()->create();

        $id = $user->id;

        $response    = $this->post("/phone/{$id}/registered", [
            'phone'         => '69999990000',
            'description'   => 'telefone teste',
            'user_id'       => $id
        ]);

        $this->actingAs($user);

        $response = $this->get('/dashboard');

        $response->assertStatus(200);
    }

    public function test_create_address()
    {

        $user = User::factory()->create();

        $id = $user->id;

        $response    = $this->post("/address/{$id}/registered", [
            'address'   => 'rua das lamentações',
            'district'  => 'bairro das lamentações',
            'zip_code'  => '12345000',
            'city'      => 'cidade',
            'state'     => 'estado',
            'country'   => 'pais',
            'user_id'   => $id
        ]);

        $this->actingAs($user);

        $response = $this->get('/dashboard');

        $response->assertStatus(200);
    }
}
