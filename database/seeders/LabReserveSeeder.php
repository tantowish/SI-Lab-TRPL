<?php

namespace Database\Seeders;

use App\Models\LabReserve;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LabReserveSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $labreserves = [
            [
                "reserve_id"=>1,
                "status"=>"waiting",
            ],
            [
                "reserve_id"=>2,
                "status"=>"waiting",
            ],
        ];

        foreach( $labreserves as $key => $value ) {
            LabReserve::create($value);
        }
    }
}
