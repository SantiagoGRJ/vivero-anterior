<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;


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

    public function riegos() : HasMany
    {
        return $this->hasMany(Riego::class,"id_plantas");
    }
    public function exposiciones() : HasMany
    {
        return $this->hasMany(Exposicion::class,"id_planta");
    }
    public function fertilizaciones() : HasMany
    {
        return $this->hasMany(Fertilizacion::class,"id_planta");
    }






}
