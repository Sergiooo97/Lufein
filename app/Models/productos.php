<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class productos extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre_producto',
        'descripcion_producto',
        'categoria_producto',
        'precio_producto',
        'img_producto',
    ];

}
