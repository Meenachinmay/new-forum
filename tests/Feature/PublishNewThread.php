<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class PublishNewThread extends TestCase
{
    use RefreshDatabase;
    /** @test */
    public function an_authenticated_user_can_publish_a_new_thread()
    {
        $user = factory('App\User')->create();

        $this->signIn($user);

        $thread = factory('App\Thread')->make();

        $this->post('/threads/new', $thread->toArray());

        $this->get($thread->path())
            ->assertSee($thread->title)
            ->assertSee($thread->body);
    }
}
