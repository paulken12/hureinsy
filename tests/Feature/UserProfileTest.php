<?php

namespace Tests\Feature;

use App\EmpBasicInfo;
use App\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class UserProfileTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    function a_user_has_a_profile()
    {

        $user = create('App\User');
        $this->signIn();
        $this->get("/profile/{$user->name}")
            ->assertSee($user->name);
    }

    function profile_can_only_see_by_the_creator()
    {

    }

    /** @test */
    function profiles_display_all_threads_created_by_the_associated_user()
    {

        $info = create(EmpBasicInfo::class, ['user_id' => auth()->id()]);

        $this->get("profiles/" . auth()->user()->name)
            ->assertSee($info->name);

    }

    /** @test*/
    function authenticated_user_must_verified_their_email()
    {
        $user = create('App\User');

        $this->assertRedirect("/profiles/{$user->name}")
            ->assertSee($user->name);

        $this->assertRedirect('profile/'.$user->name.'/basic')
            ->assertSessionHas('flush','Confirm email address first');

    }
}
