<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon as Carbon;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();

        $users = [
            [
                'name' => 'Super Admin',
                'email' => 'sys@email.com',
                'password' => bcrypt('sys123'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'user_type' => 'sys',
                'confirmed' => '1',
                'confirmation_code' => '',
            ],
            [
                'name' => 'User Admin',
                'email' => 'admin@email.com',
                'password' => bcrypt('admin123'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'user_type' => 'admin',
                'confirmed' => '1',
                'confirmation_code' => '',
            ]
        ];

        User::insert($users);
    }
}
