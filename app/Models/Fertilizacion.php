<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Fertilizacion extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_planta',
        'nombre',
        'tipo',
        'frecuencia',
        'metodo',
        'cantidad',
        'fecha_ultima_aplicacion',
        'proxima_aplicacion',
    ];

    protected function casts() : array
    {
        return [

        ];
    }

    public function plantas() : BelongsTo
    {
        return $this->belongsTo(Planta::class);
    }
}
