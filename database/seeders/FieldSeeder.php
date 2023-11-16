<?php

namespace Database\Seeders;

use App\Models\Field;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class FieldSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $fields = [
            [
                "field_name"=>'Cyber Security',
                'description'=> 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
            ],
            [
                "field_name"=>'Web Programming',
                'description'=> 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
            ],
            [
                "field_name"=>'Data Science',
                'description'=> 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
            ],
            [
                "field_name"=>'Mobile Programming',
                'description'=> 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
            ],
            [
                "field_name"=>'UI/UX',
                'description'=> 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
            ],
        ];

        foreach( $fields as $key => $value ) {
            Field::create($value);
        }
    }
}
