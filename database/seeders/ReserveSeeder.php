<?php

namespace Database\Seeders;

use App\Models\Reserve;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ReserveSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tgl = "11-21";
        $reserves = [
            [
                "laboratorium_id"=> "HU105",
                "start_time"=>"2023-".$tgl." 07:15:00",
                "end_time"=>"2023-".$tgl." 10:55:00",
                "user_id"=> 2,
                "file"=>"file/permohonan/2IYDek9htpNHQKiEvvLlsummMu3rdLM2j8DrPYKj.pdf",
            ],
            [
                "laboratorium_id"=> "HU105",
                "start_time"=>"2023-".$tgl." 07:15:00",
                "end_time"=>"2023-".$tgl." 10:55:00",
                "user_id"=> 1,
                "file"=>"file/permohonan/dX0R8neEgI1SPFqhmtKujk4P6C1gLd5Yyq9Ih7QQ.pdf",
            ],
        ];

        foreach( $reserves as $key => $value ) {
            Reserve::create($value);
        }
    }
}
