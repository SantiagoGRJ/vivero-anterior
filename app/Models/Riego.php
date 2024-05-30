<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Riego extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_plantas',
        'metodo',
        'frecuencia',
        'cantidad',
    ];

    protected function casts() : array
    {
        return [

        ];
    }
}
