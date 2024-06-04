<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Riego>
 */
class RiegoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'id_plantas' => fake()->numberBetween(1,5),
            'metodo' => fake()->randomElement(['goteo','aspersion']),
            'frecuencia' => fake()->randomElement(['diaria','semanal']),
            'cantidad' => fake()->numberBetween(1,10),
        ];
    }
}
