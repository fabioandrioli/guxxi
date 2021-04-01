<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

use App\Models\User;
use App\Models\Role;


class UserTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_index_user(){

        $response = $this->get('/api/v1/users');
        $response->assertStatus(200);
    }

    public function test_create_user(){

        //$user = User::factory()->make();
        $user =  [
            'name' => 'Sally',
            'email' => 'teste@teste3.com',
            'password' => bcrypt('12345678'),
            'photo' => 'perfil.jpg',
            'role_id' => Role::factory()->create()->id,
            'datebirth' => '2021-04-01',
        ];

        $response =  $this->postJson('/api/v1/users',$user);
        $response->assertStatus(200);
    }
}
