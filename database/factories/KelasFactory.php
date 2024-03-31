<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Kelas>
 */
class KelasFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => fake()->unique()->numberBetween(1, 50),
            // 'user_id' => mt_rand(1,50),
            // 'user_id' => User::factory(),
            'tingkat' => mt_rand(10,12),
            'jurusan' => fake()->word(),
            'abjad' => fake()->randomElement(['A', 'B', 'C', 'D', 'E'])
        ];
    }
}
