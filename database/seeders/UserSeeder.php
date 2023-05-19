<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'email' => 'superadmin@gmail.com',
            'username' => 'admin',
            'password' => Hash::make('admin'),
            'nama' => 'Admin',
            'role' => '1'
        ]);

        User::create([
            'email' => 'user1@gmail.com',
            'username' => 'usersatu',
            'password' => Hash::make('usersatu'),
            'nama' => 'User Satu',
            'role' => '3'
        ]);

        User::create([
            'email' => 'user2@gmail.com',
            'username' => 'userdua',
            'password' => Hash::make('userdua'),
            'nama' => 'User Dua',
            'role' => '3'
        ]);

        User::create([
            'email' => 'user3@gmail.com',
            'username' => 'usertiga',
            'password' => Hash::make('usertiga'),
            'nama' => 'User Tiga',
            'role' => '3'
        ]);
    }
}
