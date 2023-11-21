<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $projects = [
            [
                "project_name"=> "Sistem Informasi Laboratorium TRPL",
                "start_date"=>"2023-08-24",
                "end_date"=>"2023-12-12",
                "applicant"=>1,
                "description"=> "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.",
                "document_link"=>"www.lipsum.com",
            ],
            [
                "project_name"=> "Sistem Informasi Ternak Ayam",
                "start_date"=>"2023-09-02",
                "end_date"=>"2023-12-14",
                "applicant"=>2,
                "description"=> "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.",
                "document_link"=>"www.lipsum.com",
            ],
            [
                "project_name"=> "Sistem Informasi Monitoring RSGM Universitas Jendral Soedirman",
                "start_date"=>"2024-01-12",
                "end_date"=>"2023-09-24",
                "applicant"=>1,
                "description"=> "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.",
                "document_link"=>"www.lipsum.com",
            ],
        ];

        foreach( $projects as $key => $value ) {
            Project::create($value);
        } 
    }
}
