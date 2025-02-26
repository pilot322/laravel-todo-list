<?php

namespace Database\Factories;

use App\Models\Box;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Item>
 */
class ItemFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->realText(30),
            'amount' => fake()->numberBetween(10, 50),
            'box_id' => Box::inRandomOrder()->first()
        ];
    }
}
