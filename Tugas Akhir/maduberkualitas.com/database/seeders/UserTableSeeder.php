<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder,
    App\Models\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::insert([
            'name' => 'faiz0',
            'email' => 'faiz0@gmail.com',
            'password' => bcrypt('09870'),
            'name' => 'faiz9',
            'email' => 'faiz9@gmail.com',
            'password' => bcrypt('09879'),
        ]);
    }
}