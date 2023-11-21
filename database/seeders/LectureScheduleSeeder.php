<?php

namespace Database\Seeders;

use App\Models\lectureSchedule;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LectureScheduleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tgl = "11-21";
        $tgl1 = "11-22";
        $tgl2 = "11-23";
        $schedules = [
            [
                "laboratorium_id"=> "HU105",
                "start_time"=>"2023-".$tgl." 07:15:00",
                "end_time"=>"2023-".$tgl." 10:55:00",
                "lab_admin_id"=> 2,
                "subject_id"=>2,
            ],
            [
                "laboratorium_id"=> "HU101",
                "start_time"=>"2023-".$tgl." 7:15:00",
                "end_time"=>"2023-".$tgl." 10:55:00",
                "lab_admin_id"=> 1,
                "subject_id"=>3,
            ],
            [
                "laboratorium_id"=> "HU101",
                "start_time"=>"2023-".$tgl." 12:15:00",
                "end_time"=>"2023-".$tgl." 15:55:00",
                "lab_admin_id"=> 1,
                "subject_id"=>3,
            ],
            [
                "laboratorium_id"=> "HU103",
                "start_time"=>"2023-".$tgl2." 07:15:00",
                "end_time"=>"2023-".$tgl2." 10:55:00",
                "lab_admin_id"=> 2,
                "subject_id"=>1,
            ],
            [
                "laboratorium_id"=> "HU103",
                "start_time"=>"2023-".$tgl1." 07:15:00",
                "end_time"=>"2023-".$tgl1." 10:55:00",
                "lab_admin_id"=> 2,
                "subject_id"=>1,
            ],
            [
                "laboratorium_id"=> "HU102",
                "start_time"=>"2023-".$tgl1." 07:15:00",
                "end_time"=>"2023-".$tgl1." 10:55:00",
                "lab_admin_id"=> 2,
                "subject_id"=>4,
            ],
            [
                "laboratorium_id"=> "HU105",
                "start_time"=>"2023-".$tgl2." 07:15:00",
                "end_time"=>"2023-".$tgl2." 10:55:00",
                "lab_admin_id"=> 1,
                "subject_id"=>4,
            ],
        ];

        foreach( $schedules as $key => $value ) {
            lectureSchedule::create($value);
        }


    }
}
