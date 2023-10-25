<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            "name"=> "Tantowi Shah Hanif",
            "username"=>"tantowishahhanif",
            "email"=> "tantowishahhanif@mail.ugm.ac.id",
            "password"=> bcrypt("123"),
            "role"=> "mahasiswa",
        ];

        User::create($users);
    }
}
