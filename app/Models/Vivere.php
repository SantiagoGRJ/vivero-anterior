<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vivere extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'cantidad',
        'udm',
        'fecha_compra' ,
        'fecha_caducidad',
    ];

    protected function casts() : array
    {
        return [

        ];
    }
}
