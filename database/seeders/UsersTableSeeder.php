<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'admin',
            'password' => Hash::make('mihara369'),
        ]);

        User::create([
            'name' => 'runfree_admin',
            'password' => Hash::make('mihara369'),
        ]);
    }
}
