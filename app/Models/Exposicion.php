<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

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

    public function plantas() : BelongsTo
    {
        return $this->belongsTo(Planta::class);
    }
}
