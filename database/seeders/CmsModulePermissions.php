<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\CmsModulePermission;

class CmsModulePermissions extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        CmsModulePermission::truncate();
        $permissions = [
            // Super Admin Role
            ['role_id' => 1, 'module_id' => 1, 'is_add' => 0, 'is_view' => 1, 'is_update' => 0, 'is_delete' => 0], // Dashboard
            ['role_id' => 1, 'module_id' => 2, 'is_add' => 1, 'is_view' => 1, 'is_update' => 1, 'is_delete' => 1], // Users
            ['role_id' => 1, 'module_id' => 3, 'is_add' => 1, 'is_view' => 1, 'is_update' => 1, 'is_delete' => 1], // Memberships
            // submenus
            ['role_id' => 1, 'module_id' => 4, 'is_add' => 0, 'is_view' => 1, 'is_update' => 1, 'is_delete' => 0], // Users List
            ['role_id' => 1, 'module_id' => 5, 'is_add' => 1, 'is_view' => 1, 'is_update' => 0, 'is_delete' => 0], // Add Users
            ['role_id' => 1, 'module_id' => 6, 'is_add' => 0, 'is_view' => 1, 'is_update' => 1, 'is_delete' => 0], // Memberships List
            ['role_id' => 1, 'module_id' => 7, 'is_add' => 1, 'is_view' => 1, 'is_update' => 0, 'is_delete' => 0], // Add Memberships

            // Company Admin Role
            ['role_id' => 2, 'module_id' => 1, 'is_add' => 0, 'is_view' => 1, 'is_update' => 0, 'is_delete' => 0], // Dashboard
            ['role_id' => 2, 'module_id' => 2, 'is_add' => 0, 'is_view' => 0, 'is_update' => 0, 'is_delete' => 0], // Users
            ['role_id' => 2, 'module_id' => 3, 'is_add' => 1, 'is_view' => 1, 'is_update' => 1, 'is_delete' => 1], // Users
            ['role_id' => 2, 'module_id' => 4, 'is_add' => 0, 'is_view' => 0, 'is_update' => 0, 'is_delete' => 0], // Memberships
            // submenus
            ['role_id' => 2, 'module_id' => 5, 'is_add' => 0, 'is_view' => 1, 'is_update' => 0, 'is_delete' => 0], // Users List
            ['role_id' => 2, 'module_id' => 6, 'is_add' => 1, 'is_view' => 1, 'is_update' => 0, 'is_delete' => 0], // Add Memberships
            ['role_id' => 2, 'module_id' => 7, 'is_add' => 0, 'is_view' => 1, 'is_update' => 0, 'is_delete' => 0], // Memberships List
            ['role_id' => 2, 'module_id' => 8, 'is_add' => 1, 'is_view' => 1, 'is_update' => 0, 'is_delete' => 0], // Add Memberships

            // Project Manager Role
            ['role_id' => 3, 'module_id' => 1, 'is_add' => 0, 'is_view' => 1, 'is_update' => 0, 'is_delete' => 0], // Dashboard
            ['role_id' => 3, 'module_id' => 2, 'is_add' => 0, 'is_view' => 0, 'is_update' => 0, 'is_delete' => 0], // Users
            ['role_id' => 3, 'module_id' => 3, 'is_add' => 0, 'is_view' => 0, 'is_update' => 0, 'is_delete' => 0], // Users
            ['role_id' => 3, 'module_id' => 4, 'is_add' => 0, 'is_view' => 0, 'is_update' => 0, 'is_delete' => 0], // Memberships
            // submenus
            ['role_id' => 3, 'module_id' => 5, 'is_add' => 0, 'is_view' => 1, 'is_update' => 0, 'is_delete' => 0], // Users List
            ['role_id' => 3, 'module_id' => 6, 'is_add' => 1, 'is_view' => 1, 'is_update' => 0, 'is_delete' => 0], // Add Memberships
            ['role_id' => 3, 'module_id' => 7, 'is_add' => 0, 'is_view' => 1, 'is_update' => 0, 'is_delete' => 0], // Memberships List
            ['role_id' => 3, 'module_id' => 8, 'is_add' => 1, 'is_view' => 1, 'is_update' => 0, 'is_delete' => 0], // Add Memberships
        ];

        foreach ($permissions as $perm) {
            CmsModulePermission::firstOrCreate(
                [
                    'role_id' => $perm['role_id'],
                    'module_id' => $perm['module_id']
                ],
                $perm
            );
        }
    }
}
