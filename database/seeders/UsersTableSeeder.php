<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => 'admin',
                'email' => 'admin@example.com',
                'password' => Hash::make('password'),
                'role' => 'admin',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'runfree_admin',
                'email' => 'runfree_admin@example.com',
                'password' => Hash::make('password'),
                'role' => 'runfree_admin',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
