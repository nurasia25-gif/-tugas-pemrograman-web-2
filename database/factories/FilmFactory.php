<?php

namespace Database\Factories;

use App\Models\Film;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Film>
 */
class FilmFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'judul' => fake()->sentence(3),
            'genre' => fake()->randomElement(['Action', 'Horror', 'Comedy', 'Romance', 'Drama']),
            'sutradara' => fake()->name(),
            'tahun_rilis' => fake()->year(),
            'durasi' => fake()->numberBetween(80, 180),
        ];
    }
}
