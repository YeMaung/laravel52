<?php

use Illuminate\Database\Seeder;
use App\Role;
use App\Permission;
use App\PermissionRole;

class PermissionRoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PermissionRole::truncate();

        //Assign super admin permission to super admin role
        $role = Role::findOrFail(1);
        $permission = Permission::findOrFail(1);
        $role->permissions()->save($permission);

        //Assign user admin permission to user admin role
        $role = Role::findOrFail(2);
        $permission = Permission::findOrFail(2);
		$role->permissions()->save($permission);
    }
}
