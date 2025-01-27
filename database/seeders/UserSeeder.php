<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => 'Admin User',
                'email' => 'admin@gmail.com',
                'password' => Hash::make('admin123'),
                'email_verified_at' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // [
            //     'name' => 'Regular User',
            //     'email' => 'user@example.com',
            //     'password' => Hash::make('password'),
            //     'email_verified_at' => now(),
            //     'created_at' => now(),
            //     'updated_at' => now(),
            // ],
        ]);
    }
}
