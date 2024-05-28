<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Planta>
 */
class PlantaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nombre_cientifico'=>fake()->word(),
            'nombre_comun' => fake()->word(),
            'descripcion' => fake()->sentence(5),
            'foto' => fake()->word(),
            'tipo' => fake()->word(),
            'necesidad_riego' => fake()->boolean(),
            'necesidad_solar'=> fake()->boolean(),
            'necesidad_fertilizacion'=> fake()->boolean(),
        ];
    }
}
