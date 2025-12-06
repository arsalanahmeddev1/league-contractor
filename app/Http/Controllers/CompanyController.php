<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;

class CompanyController extends Controller
{
    public function index()
    {
        return view('screens.admin.complete-profile.index');
    }
    public function store(Request $request)
    {
        $request->validate([
            'business_name' => 'required|string|max:255',
            'license' => 'required|string|max:255',
            'insurance' => 'required|string|max:255',
        ]);
        $company = Company::firstOrCreate(
            [
                'user_id' => $request->user_id,
                'business_name' => $request->business_name,
                'license'       => $request->license,
                'insurance'     => $request->insurance,
                'is_profile_completed' => true,
                'is_profile_approved' => false,
            ]
        );
        return response()->json([
            'success' => true,
            'message' => 'Company profile completed successfully'
        ]);
    }
}
