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
            [
                "name"=> "Tantowi Shah Hanif",
                "username"=>"tantowishahhanif",
                "email"=> "tantowishahhanif@mail.ugm.ac.id",
                "password"=> bcrypt("123"),
                "role"=> "mahasiswa",
            ],
            [
                "name"=> "Fabih Nugraha",
                "username"=>"fabihnugraha",
                "email"=> "fabihnugraha@mail.ugm.ac.id",
                "password"=> bcrypt("123"),
                "role"=> "dosen",
            ],
            [
                "name"=> "Said Syafiq",
                "username"=>"said2004",
                "email"=> "said2004@mail.ugm.ac.id",
                "password"=> bcrypt("123"),
                "role"=> "dosen",
            ],
            [
                "name"=> "Faadhil Suryo",
                "username"=>"fadhilsuryoatmojo",
                "email"=> "fadhilsuryoatmojo@mail.ugm.ac.id",
                "password"=> bcrypt("123"),
                "role"=> "mahasiswa",
            ],
            [
                "name"=> "Naufal Tri Subakti",
                "username"=>"naufaltrisubakti",
                "email"=> "naufaltrisubakti@mail.ugm.ac.id",
                "password"=> bcrypt("123"),
                "role"=> "mahasiswa",
            ],
            [
                "name"=> "Nikita Willy",
                "username"=>"nikitawilly",
                "email"=> "nikitawilly@mail.ugm.ac.id",
                "password"=> bcrypt("123"),
                "role"=> "dosen",
            ],
        ];

        foreach( $users as $key => $value ) {
            User::create($value);
        }
    }
}
