<?php

namespace Tests\Feature;

use App\EmpBasicInfo;
use App\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class UserProfileTest extends TestCase
{
    /** @test */
    function a_user_has_a_profile()
    {

        $user = User::find(136);
        $this->signIn();
        $this->get("profiles/{$user->name}")
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
}
