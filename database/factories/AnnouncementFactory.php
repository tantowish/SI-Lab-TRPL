<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Announcement>
 */
class AnnouncementFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "lab_admin_id"=>$this->faker->numberBetween(1,2),
            "description"=>$this->faker->paragraph(mt_rand(1,2)),
            "title"=>$this->faker->sentence(mt_rand(2,5)),
        ];
    }
}
