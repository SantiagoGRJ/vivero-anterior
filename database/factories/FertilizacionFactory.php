<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Fertilizacion>
 */
class FertilizacionFactory extends Factory
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
            'nombre' => fake()->word(),
            'tipo' => fake()->randomElement(['organico','quimico']),
            'frecuencia' => fake()->randomElement(['mensual','bimestral']),
            'metodo' => fake()->randomElement(['diluido en agua','directamente en el suelo']),
            'cantidad' => fake()->numberBetween(1, 100),
            'fecha_ultima_aplicacion' => fake()->date('Y_m_d'),
            'proxima_aplicacion' => fake()->date('Y_m_d'),
        ];
    }
}
