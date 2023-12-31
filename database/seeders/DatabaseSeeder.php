<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(UserSeeder::class);
        $this->call(LabAdministratorSeeder::class);
        $this->call(LaboratoriumSeeder::class);
        $this->call(SubjectSeeder::class);
        $this->call(InventorySeeder::class);
        $this->call(SoftwareSeeder::class);
        $this->call(SoftwareLabSeeder::class);
        $this->call(AnnouncementSeeder::class);
        $this->call(LectureScheduleSeeder::class);
        $this->call(FieldSeeder::class);
        $this->call(ReserveSeeder::class);
        $this->call(LabReserveSeeder::class);
        $this->call(ProjectSeeder::class);
        $this->call(ProjectFieldSeeder::class);
        $this->call(ProjectHistorySeeder::class);
        $this->call(AssistantLecturerSeeder::class);
        $this->call(AttendanceSeeder::class);
    }
}
