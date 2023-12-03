<?php

namespace Database\Seeders;

use App\Models\AssistantLecturer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AssistantLecturerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $assistants = [
            [
                "assistant_id"=> 1,
                "user_id"=> 1,
                'subject_id'=>2,
                'interest'=>'Web Programming, Machine Learning'
            ],
            [
                "assistant_id"=> 2,
                "user_id"=> 4,
                'subject_id'=>5,
            ],

        ];

        foreach( $assistants as $key => $value ) {
            AssistantLecturer::create($value);
        }
    }
}
