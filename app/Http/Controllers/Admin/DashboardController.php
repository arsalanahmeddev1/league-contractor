<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;


class DashboardController extends Controller
{
    public function index()
   {
      $user = Auth::user();
      $rolesById = $user->roles->first()->id;
      $authUser = auth()->user();
      $totalUsers = User::where('id', '!=', $authUser->id)->count();
      if ($rolesById === 1) {
         return view('screens.admin.dashboard.admin', compact('totalUsers'));
      } elseif ($rolesById === 2) {
         return view('screens.admin.dashboard.contractor', compact('totalUsers'));
      } elseif ($rolesById === 3) {
         return view('screens.admin.dashboard.customer', compact('totalUsers'));
      } elseif ($rolesById === 4) {
         return view('screens.admin.dashboard.league-contractor', compact('totalUsers'));
      }
      return redirect()->route('login');
   }
}
