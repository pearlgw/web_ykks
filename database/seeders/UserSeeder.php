<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                "name" => "admin",
                "email" => "admin@gmail.com",
                "password" => bcrypt("password"),
                "role" => "admin"
            ],
            [
                "name" => "staff1",
                "email" => "staff1@gmail.com",
                "password" => bcrypt("password"),
                "role" => "staff"
            ],
            [
                "name" => "staff2",
                "email" => "staff2@gmail.com",
                "password" => bcrypt("password"),
                "role" => "staff"
            ],
        ];

        foreach ($users as $user) {
            User::create($user);
        }
    }
}
