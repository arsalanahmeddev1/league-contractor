<?php
use App\Models\CmsModule;
use App\Models\CmsModulePermission;

use Illuminate\Support\Facades\Auth;


if (!function_exists('dynamic_sidebar')) {
    function dynamic_sidebar($role_id) {

        return CmsModule::getModules($role_id);
    }
}