<?php

namespace Tests\Feature;

use App\Models\User;
use Tests\TestCase;

class UserTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_example(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    /**
     * A basic feature test example.
     */
    public function test_middleware(): void
    {
        $response = $this->getJson('/api/news');

        $response->assertStatus(401);
    }

    /**
     * A basic feature test example.
     */
    public function test_my_courses(): void
    {
        $user = User::find(17);

        $token = \Tymon\JWTAuth\Facades\JWTAuth::fromUser($user);

        $response = $this->getJson('/api/my-courses', [
            'Authorization' => 'Bearer ' . $token,
        ]);

        $response->assertStatus(200);
        $response->assertJsonFragment(['title' => 'backend']);
        $response->assertJsonFragment(['title' => 'english']);
    }

    /**
     * A basic feature test example.
     */
    public function test_my_courses_second(): void
    {
        $user = User::find(19);

        $token = \Tymon\JWTAuth\Facades\JWTAuth::fromUser($user);

        $response = $this->getJson('/api/my-courses', [
            'Authorization' => 'Bearer ' . $token,
        ]);

        $response->assertStatus(200);
        $response->assertJsonFragment(['title' => 'singing']);
        $response->assertJsonFragment(['title' => 'backend']);
    }
}
