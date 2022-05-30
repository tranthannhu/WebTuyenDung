<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /* create admin, author and user */
        /* password for these users is password */

        $factoryUsers = [
            
            [
                'name' => 'author user',
                'email' => 'author@author.com',
                'password' => '12341234', // password
                'role' => 'author'
            ],

            [
                'name' => 'simple user',
                'email' => 'user@user.com',
                'password' => '12341234', // password
                'role' => 'user'
            ],
            [
                'name' => 'simple 2 user',
                'email' => 'user2@user2.com',
                'password' => '12341234', // password
                'role' => 'user'
            ],
            [
                'name' => 'admin user',
                'email' => 'admin@admin.com',
                'password' => '12341234', // password
                'role' => 'admin'
            ],

        ];

        foreach ($factoryUsers as $user) {
            $newUser =  User::factory()->create([
                'name' => $user['name'],
                'email' => $user['email'],
                'password' => $user['password'],
            ]);
            $newUser->assignRole($user['role']);
        }
    }
}
