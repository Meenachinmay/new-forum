<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ParticipateInThreads extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function an_unauthenticated_user_should_not_add_a_reply()
    {
        $this->expectException('Illuminate\Auth\AuthenticationException');

        $this->post('/threads/1/replies', []);
    }

    /** @test */
    public function a_authenticated_user_may_participate_in_forum()
    {
        // have a user
        $user = factory('App\User')->create();
        // sign in a user
        $this->signIn($user);
        // create a thread
        $thread = factory('App\Thread')->create();
        //create a reply
        $reply = factory('App\Reply')->make();
        // post a reply
        $this->post($thread->path() . '/replies', $reply->toArray());
        // when visit to thread page user should see that reply
        $this->get($thread->path())
            ->assertSee($reply->body);

    }
}
