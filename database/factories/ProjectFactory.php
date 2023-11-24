<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Project>
 */
class ProjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $start_month = str_pad(mt_rand(1, 12), 2, '0', STR_PAD_LEFT);
        $start_day = str_pad(mt_rand(1, 28), 2, '0', STR_PAD_LEFT);
        return [
            "project_name"=>$this->faker->sentence(mt_rand(4,7)),
            "start_date"=>"2023-" . $start_month . "-" . $start_day,
            "end_date"=>"2024-" . $start_month . "-" . $start_day,
            "applicant"=>mt_rand(1,6),
            "description"=>$this->faker->paragraph(mt_rand(5,10)),
            "document_link"=>"www.lipsum.com"
        ];
    }
}
