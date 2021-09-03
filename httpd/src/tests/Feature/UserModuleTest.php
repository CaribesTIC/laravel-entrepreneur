<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use App\Models\User;

class UserModuleTest extends TestCase
{
    use RefreshDatabase;

    public function test_it_shows_the_users_list()
    {
        $this->actingAs(User::factory()->create()); 
        
        User::create([
            "name" => "John",
            "last_name" => "Doe",
            "email" => "johndoe@emal.ext" ,
            "password" => "password"    
        ]);

        $response = $this->get('api/auth/users')
            ->assertStatus(200)
            ->assertSee("John")
            ->assertSee("Doe")
            ->assertSee("johndoe@emal.ext");
    }
}
