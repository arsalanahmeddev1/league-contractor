<?php 

namespace App\Http\Responses;

use Laravel\Fortify\Contracts\LoginResponse as LoginResponseContract;

class LoginResponse implements LoginResponseContract
{
    public function toResponse($request)
    {
        $user = auth()->user();
        $role = $user->getRoleNames()->first();

        if (!$role) {
            return redirect('/');
        }

        // if ($role === 'admin') {
        //     return redirect()->to('/admin/dashboard');
        // }

        if ($user->hasRole('super_admin')) {
            return redirect('/admin');
        }
        if ($user->hasRole('contractor')) {
            return redirect('/admin');
        }
        if ($user->hasRole('customer')) {
            return redirect('/admin');
        }
        if ($user->hasRole('league_contractor')) {
            return redirect('/admin');
        }

        return redirect('/');
    }
}

?>