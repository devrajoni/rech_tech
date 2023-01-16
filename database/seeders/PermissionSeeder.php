<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\PermissionRegistrar;
use App\Models\User;
use Hash;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Permission::create(['name' => 'Roles create'  , 'guard_name' => 'web',]);
        Permission::create(['name' => 'Roles edit'  , 'guard_name' => 'web',]);
        Permission::create(['name' => 'Roles update'  , 'guard_name' => 'web',]);
        Permission::create(['name' => 'Roles delete'  , 'guard_name' => 'web',]);
        
    }
}
