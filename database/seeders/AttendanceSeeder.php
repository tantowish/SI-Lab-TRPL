<?php

namespace Database\Seeders;

use App\Models\Attendance;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AttendanceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $attendances = [
            [
                'schedule_id'=>1,
                'assistant_id'=>1,
            ],
            [
                'schedule_id'=>8,
                'assistant_id'=>2
            ]
        ];

        foreach( $attendances as $key => $value ) {
            Attendance::create($value);
        }
    }
}
