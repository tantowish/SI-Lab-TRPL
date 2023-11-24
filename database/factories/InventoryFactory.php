<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Inventory>
 */
class InventoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "laboratorium_id"=> "HU10".$this->faker->numberBetween(1,5),
            "item_name"=>$this->faker->text(mt_rand(5,25)),
            "no_item"=>"INV".mt_rand(1000,2000),
            "good"=>mt_rand(20,30),
            "bad"=>mt_rand(20,30),
            "information"=>$this->faker->sentence(mt_rand(1,2))         
        ];
    }
}
