<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Evento>
 */
class EventoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //'id_plantas' => fake()->numberBetween(1,5),
            'id_user' => fake()->numberBetween(1,5),
            'id_riego' => fake()->numberBetween(1,5),
            'id_exposicion' => fake()->numberBetween(1,5),
            'id_fertilizacion' => fake()->numberBetween(1,5),
            //'nombre' => fake()->randomElement(['riego','exposicion','fertilizacion']),
        ];
    }
}
