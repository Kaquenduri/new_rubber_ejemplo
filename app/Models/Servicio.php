<?php

namespace App\Models;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Servicio extends Model
{
    use HasFactory; # Para crear seeders 
    use SoftDeletes; #Para guardar eliminaciones 

    protected $fillable = [
        'nombre_servicio',
        'descripcion',
        'precio',
        'tiempo_estimado',
        'imagen',
    ];
}
