<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
<<<<<<< HEAD
=======
use App\Models\User;
use App\Models\Role;
>>>>>>> structure_test

class UserTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_example()
    {
<<<<<<< HEAD
        $response = $this->get('/api/v1/users');
=======
        User::factory()->create();

        $response = $this->get('/');
        $response->dump();
>>>>>>> structure_test

        $response->assertStatus(200);
    }
}
