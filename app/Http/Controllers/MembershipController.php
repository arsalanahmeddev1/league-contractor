<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MembershipController extends Controller
{
    public function index() {
        return view('screens.admin.memberships.index');
    }
}
