<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

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

    public function plantas() : BelongsTo
    {
        return $this->belongsTo(Planta::class);
    }
}
