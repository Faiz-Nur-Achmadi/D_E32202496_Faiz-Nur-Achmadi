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
            'name' => 'faiz',
            'email' => 'faiz@gmail.com',
            'password' => bcrypt('0987'),
        ]);
    }
}