<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;
use App\Models\Post;

class PostTest extends TestCase
{
    use RefreshDatabase;

    public function test_guest_cannot_access_posts_index(){
        $response = $this->get(route('posts.index'));
        $response->assertRedirect(route('login'));
    }

    public function test_user_can_access_posts_index() {
        $user = User::factory()->create();
        $post = 
    }
}
