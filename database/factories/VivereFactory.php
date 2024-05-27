<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Vivere>
 */
class VivereFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nombre' => fake()->word(),
            'cantidad' => fake()->numberBetween(0,100),
            'udm' => fake()->randomElement(['a', 'b', 'c', 'd', 'e']),
            'fecha_compra' => fake()->date('Y_m_d'),
            'fecha_caducidad' => fake()->date('Y_m_d'),
        ];
    }
}
