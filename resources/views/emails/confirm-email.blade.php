@component('mail::message')
# Please Confirm Your Email

We just need to confirm your email address to prove that you're a human.

Email: {{$user->email}} <br>
Password: {{$password}}

@component('mail::button', ['url' => url('/register/confirm?token='. $user->verification_token)])
    Confirm
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
