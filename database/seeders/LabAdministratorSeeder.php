<?php

namespace Database\Seeders;

use App\Models\labAdministrator;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LabAdministratorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
            "name"=> "Surya Alaudin",
            "username"=>"suryaalaudin",
            "email"=> "suryaalaudin@mail.ugm.ac.id",
            "expertise"=> "Machine Learning / Artifisial Intelegence",
            "NIKA"=> "11111132123124",
            "description"=> "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.",
            "password"=> bcrypt("admin"),
            ],
            [
            "name"=> "Vicky Prasetyo",
            "username"=>"vickyprasetyo",
            "email"=> "vickyprasetyo@mail.ugm.ac.id",
            "expertise"=> "Back End Development / DevOps",
            "NIKA"=> "11111132123124",
            "description"=> "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.",
            "password"=> bcrypt("admin"),
            ],
        ];

        foreach( $users as $key => $value ) {
            labAdministrator::create($value);
        }

    }
}
