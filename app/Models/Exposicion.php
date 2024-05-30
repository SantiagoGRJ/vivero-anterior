<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exposicion extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_planta',
        'horas_directa',
        'horas_indirecta'
    ];

    protected function casts() : array
    {
        return [

        ];
    }
}
