<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContractorController extends Controller
{
    public function index() {
        return view('screens.admin.contractors.index');
    }
    public function create() {
        return view('screens.admin.contractors.create');
    }
}
