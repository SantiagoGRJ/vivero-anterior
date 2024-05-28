<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Planta extends Model
{
    use HasFactory;

    protected $fillable = [
        "nombre_cientifico",
        "nombre_comun",
        "descripcion",
        "foto",
        "tipo",
        "necesidad_riego",
        "necesidad_solar",
        "necesidad_fertilizacion",
    ];

    protected function casts() : array
    {
        return [

        ];

    }
}
