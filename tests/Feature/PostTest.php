<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class PostTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_posts_page_can_be_rendered()
    {
        $response = $this->get('/posts');

        $response->assertSuccessful();
    }

    public function test_create_post_page_can_not_be_rendered_by_not_authenticated_user()
    {
        $response = $this->get('/posts/create');

        $response->assertStatus(302);
    }

    public function test_create_post_page_can_be_rendered_by_authenticated_user()
    {
        $user = User::factory()->create();

        $response = $this->actingAs($user)
                        ->get('/posts/create');

        $response->assertSuccessful();
    }
}
