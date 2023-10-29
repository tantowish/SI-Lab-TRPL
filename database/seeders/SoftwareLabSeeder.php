<?php

namespace Database\Seeders;

use App\Models\SoftwareLab;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SoftwareLabSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        SoftwareLab::factory(50)->create();
    }
}
