<?php

namespace Database\Factories;

use App\Models\Kelas;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Siswa>
 */
class SiswaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'kelas_id' => mt_rand(1,36),
            // 'kelas_id' => Kelas::factory(),
            'nama' => fake()->name(),
            'nis' => fake()->randomNumber(4, true),
            'nisn' => fake()->randomNumber(6, true),
            'fase' => fake()->randomElement(['a', 'b', 'c', 'd', 'e'])
        ];
    }
}
