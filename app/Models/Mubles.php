<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Mubles extends Model
{
    use HasFactory;
    use SoftDeletes;
    
    protected $fillable = [
        'codPatrimonial',
        'tipo',
        'unidadMedida',
        'estado',
        'procedencia',
        'ubicacion',
        'observacion'
    ];
}
