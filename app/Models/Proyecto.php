<?php

namespace App\Models;
use Illuminate\Database\Eloquent\SoftDeletes;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proyecto extends Model
{
    use HasFactory;
    use SoftDeletes; #Para guardar eliminaciones 
    protected $fillable = [
        'titulo',
        'descripcion',
        'imagen_1',
        'imagen_2',
        'imagen_3',
        'empresa_contratante',
        'servicios_empleados',
    ];
}
