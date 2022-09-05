<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role1 = Role::create(['name' => 'superuser']);
        $role2 = Role::create(['name' => 'teller']);
        $role3 = Role::create(['name' => 'coordinator']);
        $role4 = Role::create(['name' => 'consultor']);

        Permission::create(['name' => 'admin.home']);

        Permission::create(['name' => 'admin.superusers.index']);
        Permission::create(['name' => 'admin.superusers.create']);
        Permission::create(['name' => 'admin.superusers.update']);
        Permission::create(['name' => 'admin.superusers.destroy']);

        Permission::create(['name' => 'admin.tellers.index']);
        Permission::create(['name' => 'admin.tellers.update']);

        Permission::create(['name' => 'admin.coordinators.index']);
        Permission::create(['name' => 'admin.coordinators.update']);

        Permission::create(['name' => 'admin.consultors.index']);
    }
}
