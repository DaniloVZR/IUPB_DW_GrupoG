<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tipo_Entregable extends Model
{
    use HasFactory;

    protected $table = 'tipo__entregables';
    protected $primaryKey = 'COD_tipo_entregable';
    
    protected $fillable = [
        'nombre_tipo_entregable',
        'descripcion_tipo_entregable'
    ];
}