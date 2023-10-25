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
            "name"=> "Surya Alaudin",
            "username"=>"suryaalaudin",
            "email"=> "suryaalaudin@mail.ugm.ac.id",
            "password"=> bcrypt("password"),
        ];

        labAdministrator::create($users);
    }
}
