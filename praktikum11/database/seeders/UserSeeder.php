<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\WithoutModelEvents;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('admin1234'),
            'is_admin' => 1
        ]);


        User::create([
            'name' => 'user',
            'email' => 'user@gmail.com',
            'password' => Hash::make('user1234'),
            'is_admin' => 0
        ]);
    }
}
