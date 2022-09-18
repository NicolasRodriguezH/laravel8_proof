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
        $role1 = Role::create(['name' => 'Superuser']);
        $role2 = Role::create(['name' => 'Teller']);
        $role3 = Role::create(['name' => 'Coordinator']);
        $role4 = Role::create(['name' => 'Consultor']);

        Permission::create(['name' => 'admin.home'])->syncRoles([$role1, $role2, $role3, $role4]);

        Permission::create(['name' => 'admin.superusers.index'])->syncRoles([$role1, $role2, $role3, $role4]);
        Permission::create(['name' => 'admin.superusers.create'])->syncRoles([$role1, $role2, $role3, $role4]);
        Permission::create(['name' => 'admin.superusers.update'])->syncRoles([$role1, $role2, $role3, $role4]);
        Permission::create(['name' => 'admin.superusers.destroy'])->syncRoles([$role1, $role2, $role3, $role4]);

        Permission::create(['name' => 'admin.tellers.index'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'admin.tellers.update'])->syncRoles([$role1, $role2]);

        Permission::create(['name' => 'admin.coordinators.index'])->syncRoles([$role1, $role3]);
        Permission::create(['name' => 'admin.coordinators.update'])->syncRoles([$role1, $role3]);

        Permission::create(['name' => 'admin.consultors.index'])->assignRole($role1);
    }
}
