<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Trailer extends Model
{
    protected $fillable = ['titulo', 'descripcion', 'reparto', 'director', 'estudio', 'fecha_estreno', 'link', 'thumbnail'];
}
