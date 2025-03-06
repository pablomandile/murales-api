<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mural extends Model
{
    use HasFactory;

    protected $fillable = [
        'wkz',
        'nombre',
        'caract_sit',
        'autores',
        'tecnica',
        'fecha',
        'tamano',
        'ubicacion',
        'direccion',
        'dom_orig',
        'calle',
        'altura',
        'barrio',
        'comuna'
    ];

}
