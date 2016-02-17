<?php

use Illuminate\Database\Seeder;

class RoleUserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\RoleUser::truncate();

        //Assign super admin role to super admin
        $user = App\User::findOrFail(1);
        $role = App\Role::findOrFail(1);
        $user->assign($role);

        //Assign user admin role to user admin
        $user = App\User::findOrFail(2);
        $role = App\Role::findOrFail(2);
        $user->assign($role);
    }
}
