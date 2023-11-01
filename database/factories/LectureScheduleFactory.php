<?php

namespace Database\Factories;

use DateInterval;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\LectureSchedule>
 */
class LectureScheduleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        // $randomHour = $this->faker->numberBetween(7, 12);
        
        // $randomInterval = $this->faker->numberBetween(0, 3); // 0, 1, 2, or 3

        // $startDateTime = \Carbon\Carbon::create(2023, 10, 5, $randomHour, 15)->addHours($randomInterval);

        // $endDateTime = $startDateTime->copy()->addHours(4);

        // return [
        //     'laboratorium_id' => 'HU10' . $this->faker->numberBetween(1, 5),
        //     'start_time' => $startDateTime,
        //     'end_time' => $endDateTime,
        //     'lab_admin_id' => $this->faker->numberBetween(1, 2),
        //     'subject_id' => $this->faker->numberBetween(1, 3),
        // ];
        return [
            //
        ];
    }
    
}
