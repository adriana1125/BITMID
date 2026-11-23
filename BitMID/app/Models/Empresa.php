<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    protected $fillable = [
        'nombre',
        'correo',
        'giro',
        'empleados',
        'estado',
        'municipio',
        'telefono',
        'sitio_web',
        'descripcion',
    ];
}
