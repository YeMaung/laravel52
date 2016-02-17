<?php

use Illuminate\Database\Seeder;
use App\Permission;
use Carbon\Carbon as Carbon;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Permission::truncate();

        $permissions = [
            [
                'name' => 'sys_permission',
                'display_name' => 'Super Admin Permission',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'admin_permission',
                'display_name' => 'User Admin Permission',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]
        ];

        Permission::insert($permissions);
    }
}
