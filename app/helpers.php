<?php

use App\Mail\RegistrationEmail;
use Illuminate\Support\Facades\Mail;

function sendRegistrationEmail($user)
{
    Mail::to($user->email)->send(new RegistrationEmail($user));
}

// Other custom helper functions can be added here
