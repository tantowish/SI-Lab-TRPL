<?php

namespace Database\Seeders;

use App\Models\Subject;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SubjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $subjects = [
            [
                "subject_name"=> "Praktikum Pemrograman Web",
                "lecturer"=> 2,
            ],
            [
                "subject_name"=> "Praktikum Pemrograman Komputer",
                "lecturer"=> 2,
            ],
            [
                "subject_name"=> "Praktikum Pemrograman Perangkat Bergerak",
                "lecturer"=> 3,
            ],
            [
                "subject_name"=> "Praktikum Desain Perangkat Lunak",
                "lecturer"=> 5,
            ],
        ];

        foreach( $subjects as $key => $value ) {
            Subject::create($value);
        }
    }
}
