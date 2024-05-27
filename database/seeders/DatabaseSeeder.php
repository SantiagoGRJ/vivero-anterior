<?php

namespace Database\Seeders;

use App\Models\Evento;
use App\Models\Exposicion;
use App\Models\Fertilizacion;
use App\Models\Planta;
use App\Models\Riego;
use App\Models\User;
use App\Models\Vivere;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        User::factory(5)->create();
        Planta::factory(5)->create();
        Vivere::factory(5)->create();
        Evento::factory(5)->create();
        Riego::factory(5)->create();
        Exposicion::factory(5)->create();
        Fertilizacion::factory(5)->create();


    }
}
