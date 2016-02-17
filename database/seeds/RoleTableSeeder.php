<?php

use Illuminate\Database\Seeder;
use App\Role;
use Carbon\Carbon as Carbon;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::truncate();

        $roles = [
            [
                'name' => 'super_admin',
                'display_name' => 'Super Admin',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'user_admin',
                'display_name' => 'User Admin',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]
        ];

        Role::insert($roles);
    }
}
