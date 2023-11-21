<?php

namespace Database\Seeders;

use App\Models\ProjectField;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProjectFieldSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $projectFields = [
            [
                "project_id"=>1,
                "field_id"=>2
            ],
            [
                "project_id"=>1,
                "field_id"=>5
            ],
            [
                "project_id"=>2,
                "field_id"=>6
            ],
            [
                "project_id"=>2,
                "field_id"=>5
            ],
            [
                "project_id"=>3,
                "field_id"=>2
            ],
        ];

        foreach($projectFields as $key => $value ) {
            ProjectField::create($value);
        } 
    }
}
