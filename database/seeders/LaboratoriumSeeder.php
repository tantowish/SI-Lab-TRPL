<?php

namespace Database\Seeders;

use App\Models\Laboratorium;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LaboratoriumSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $labs = [
            [
                "laboratorium_id"=>"HU101",
                "laboratorium_name"=> "Laboratorium Android",
                "capacity"=>26,
                "watt_power"=>1200,
                "length"=>18,
                "wide"=>5,
                "photo"=>"1.jpg"
            ],
            [
                "laboratorium_id"=>"HU102",
                "laboratorium_name"=> "Laboratorium Fabih",
                "capacity"=>24,
                "watt_power"=>900,
                "length"=>18,
                "wide"=>6,
                "photo"=>"2.jpg"
            ],
            [
                "laboratorium_id"=>"HU103",
                "laboratorium_name"=> "Laboratorium Web",
                "capacity"=>27,
                "watt_power"=>1200,
                "length"=>20,
                "wide"=>5,
                "photo"=>"3.jpg"
            ],
            [
                "laboratorium_id"=>"HU104",
                "laboratorium_name"=> "Laboratorium Technopreneur",
                "capacity"=>16,
                "watt_power"=>900,
                "length"=>20,
                "wide"=>10,
                "photo"=>"4.jpg"
            ],
            [
                "laboratorium_id"=>"HU105",
                "laboratorium_name"=> "Laboratorium Animasi",
                "capacity"=>50,
                "watt_power"=>1600,
                "length"=>35,
                "wide"=>10,
                "photo"=>"5.jpg"
            ],
        ];

        foreach( $labs as $key => $value ) {
            Laboratorium::create($value);
        }
    }
}
