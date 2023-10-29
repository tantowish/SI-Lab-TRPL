<?php

namespace Database\Seeders;

use App\Models\Software;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SoftwareSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Software::factory()->count(20)->create();
    }
}
