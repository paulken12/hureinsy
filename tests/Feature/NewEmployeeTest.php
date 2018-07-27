<?php

namespace Tests\Feature;

use App\Mail\ConfirmEmail;
use App\User;
use Illuminate\Support\Facades\Mail;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class NewEmployeeTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    function a_confirmation_email_is_sent()
    {
        Mail::fake();

        $this->post(route('register'), [
            'name' => 'John',
            'email' => 'john@example.com',
            'password' => 'foobar',
            'password_confirmation' => 'foobar'
        ]);

        Mail::assertQueued(ConfirmEmail::class);
    }

    /** @test */
    function user_can_fully_confirm_their_email_addresses()
    {
        Mail::fake();

        $this->post(route('register'), [
            'name' => 'John',
            'email' => 'john@example.com',
            'password' => 'foobar',
            'password_confirmation' => 'foobar'
        ]);

        $user = User::whereName('John')->first();

        $this->assertFalse($user->verified);
        $this->assertNotNull($user->verification_token);

        $this->get(route('register.confirm', ['token' => $user->verification_token]))
            ->assertRedirect(route('dashboard'));

        tap($user->fresh(), function ($user) {
            $this->assertTrue($user->verified);
            $this->assertNull($user->verification_token);
        });
    }

    /** @test */
    function confirming_an_invalid_token()
    {

        $this->withExceptionHandling()->signIn();

        $this->get(route('register.confirm', ['token' => 'invalid']))
            ->assertRedirect(route('login'))
            ->assertSessionHas('flash', 'Unknown token.');
    }

}
