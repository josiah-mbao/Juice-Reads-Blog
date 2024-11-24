<?php

namespace Tests\Feature;

use App\Models\Post;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class PostFeatureTest extends TestCase
{
    use RefreshDatabase; // Automatically resets database after each test

    /** @test */
    public function authenticated_user_can_create_a_post()
    {
        $user = User::factory()->create();
        $this->actingAs($user); // Simulate logged-in user

        $response = $this->post(route('posts.store'), [
            'title' => 'Test Post',
            'duration' => '5',
            'content' => 'This is a test post content.',
        ]);

        $response->assertRedirect('/dashboard');
        $this->assertDatabaseHas('posts', ['title' => 'Test Post']);
    }

    /** @test */
    public function unauthenticated_user_cannot_access_create_post_page()
    {
        $response = $this->get(route('posts.create'));
        $response->assertRedirect(route('login'));
    }
}