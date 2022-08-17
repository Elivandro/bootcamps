<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;

class UserTest extends TestCase
{
    public function test_user()
    {
        $user = User::factory()->create();

        $response = $this->post('/login', [
            'email' => $user->email,
            'password' => 'password'
        ]);

        $this->actingAs($user);

        $response = $this->get('/dashboard');

        $response->assertStatus(200);
    }

    public function test_create_redirect()
    {
        $response = $this->post('/user/registrado', [
            'name' => 'Usuário',
            'email' => 'Raaaquel@gmail.com',
            'password' => '817845678',
            'birthday' => '2008-02-24',
            'cpf' => '78847855458',
            'address' => 'maria',
            'district' => 'pedra',
            'country' => 'United States',
            'postal_code' => '49212303',
            'user_id' => '1',
            'city' => 'aracaju',
            'state' => 'sergipe',
            'phone' => '79988965623',

        ]) ;

        $response = $this->get('/user/entrar');
        $response->assertStatus(200);

    }
}
