<?php

use Illuminate\Database\Seeder;
use App\User;

class UserTableSeeder extends Seeder
{

    public function run()
    {
        DB::table('users')->truncate();
        {

            User::create([
                'name' => 'Admin',
                'email' => 'admin@email.com',
                'password' => bcrypt('123123'),
                'admin' => 1,
            ]);

            User::create([
                'name' => 'User',
                'email' => 'user@email.com',
                'password' => bcrypt('123123'),
                'admin' => 0,
            ]);

        }
    }
}
