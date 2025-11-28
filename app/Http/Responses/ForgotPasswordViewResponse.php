<?php

namespace App\Http\Responses;

use Laravel\Fortify\Contracts\PasswordResetLinkViewResponse;

class ForgotPasswordViewResponse implements PasswordResetLinkViewResponse
{
    public function toResponse($request)
    {
        return view('screens.auth.forgot-password');
    }
}
