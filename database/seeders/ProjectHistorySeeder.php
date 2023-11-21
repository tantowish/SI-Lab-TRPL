<?php

namespace Database\Seeders;

use App\Models\ProjectHistory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProjectHistorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $projectHistories = [
            [
                "project_id"=>1,
                "user_id"=>1
            ],
            [
                "project_id"=>2,
                "user_id"=>2
            ],
            [
                "project_id"=>2,
                "user_id"=>4
            ],
            [
                "project_id"=>3,
                "user_id"=>1
            ],
            [
                "project_id"=>3,
                "user_id"=>1
            ],
        ];

        foreach($projectHistories as $key => $value ) {
            ProjectHistory::create($value);
        } 
    }
}
