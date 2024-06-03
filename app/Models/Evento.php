<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
class Evento extends Model
{
    use HasFactory;

    protected $fillable = [

    ];

    protected function casts() : array
    {
        return [

        ];
    }


    public function user() : BelongsTo
    {
        return $this->belongsTo(User::class,"user_id");
    }
    public function riego() : BelongsTo
    {
        return $this->belongsTo(Riego::class,"id_riego");
    }
    public function exposicion() : BelongsTo
    {
        return $this->belongsTo(Exposicion::class,"id_exposicion");
    }
    public function fertilizacion() : BelongsTo
    {
        return $this->belongsTo(Fertilizacion::class,"id_fertilizacion");
    }

}
