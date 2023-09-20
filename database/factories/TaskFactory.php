<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Task>
 */
class TaskFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => fake()->numberBetween(2, 11), // random user id based on seeder
            'title' => fake()->catchPhrase(),
            'description' => fake()->realText(),
            'completed' => fake()->boolean(),
        ];
    }
}
