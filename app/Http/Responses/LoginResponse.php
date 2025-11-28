<?php 

namespace App\Http\Responses;

use Laravel\Fortify\Contracts\LoginResponse as LoginResponseContract;

class LoginResponse implements LoginResponseContract
{
    public function toResponse($request)
    {
        $user = auth()->user();
        $role = $user->getRoleNames()->first();

        if ($role === 'admin') {
            return redirect()->to('/admin/dashboard');
        }

        if ($role === 'contractor') {
            return redirect()->to('/contractor/dashboard');
        }

        return redirect()->to('/visitor/dashboard');
    }
}

?>