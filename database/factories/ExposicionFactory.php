<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Exposicion>
 */
class ExposicionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'id_planta' => fake()->numberBetween(1,5),
            'horas_directa' => fake()->numberBetween(1,50),
            'horas_indirecta' => fake()->numberBetween(1,50),
        ];
    }
}
