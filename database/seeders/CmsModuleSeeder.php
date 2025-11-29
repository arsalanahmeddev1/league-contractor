<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\CmsModule;

class CmsModuleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        CmsModule::truncate();

        // Parent modules
        $dashboard = CmsModule::firstOrCreate([
            'route_name' => 'admin.dashboard'
        ], [
            'name' => 'Dashboard',
            'icon' => 'fa-regular fa-house',
            'sort_order' => 1,
            'status' => 'active',
            'parent_id' => 0,
        ]);

        $users = CmsModule::firstOrCreate([
            'route_name' => 'users'
        ], [
            'name' => 'Users',
            'icon' => 'fa-solid fa-users',
            'sort_order' => 2,
            'status' => 'active',
            'parent_id' => 0,
        ]);

        $memberships = CmsModule::firstOrCreate([
            'route_name' => 'memberships'
        ], [
            'name' => 'Memberships',
            'icon' => 'fa-solid fa-users-gear',
            'sort_order' => 3,
            'status' => 'active',
            'parent_id' => 0,
        ]);

        $payments = CmsModule::firstOrCreate([
            'route_name' => 'payments'
        ], [
            'name' => 'Payments',
            'icon' => 'fa-solid fa-credit-card',
            'sort_order' => 4,
            'status' => 'active',
            'parent_id' => 0,
        ]);

        $referrals = CmsModule::firstOrCreate([
            'route_name' => 'referral-system'
        ], [
            'name' => 'Referrals',
            'icon' => 'fa-solid fa-share-nodes',
            'sort_order' => 5,
            'status' => 'active',
            'parent_id' => 0,
        ]);


        // submenus 
        // users submenu start
        CmsModule::firstOrCreate([
            'route_name' => 'users.index'
        ], [
            'name' => 'Users List',
            'icon' => 'fa-solid fa-list-ul',
            'sort_order' => 1,
            'status' => 'active',
            'parent_id' => $users->id,
        ]);

        // users submenu end
        CmsModule::firstOrCreate([
            'route_name' => 'memberships.create'
        ], [
            'name' => 'Add User',
            'icon' => 'fa-solid fa-circle-plus',
            'sort_order' => 2,
            'status' => 'active',
            'parent_id' => $memberships->id,
        ]);

        CmsModule::firstOrCreate([
            'route_name' => 'payments.create'
        ], [
            'name' => 'Add Payment',
            'icon' => 'fa-solid fa-credit-card',
            'sort_order' => 2,
            'status' => 'active',
            'parent_id' => $payments->id,
        ]);

        CmsModule::firstOrCreate([
            'route_name' => 'referrals.create'
        ], [
            'name' => 'Add Referral',
            'icon' => 'fa-solid fa-share-nodes',
            'sort_order' => 2,
            'status' => 'active',
            'parent_id' => $referrals->id,
        ]);
    }
}
