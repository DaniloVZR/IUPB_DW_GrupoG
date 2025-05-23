<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evaluacion extends Model
{
    use HasFactory;

    protected $table = 'evaluacions';
    protected $primaryKey = 'COD_evaluacion';
    
    protected $fillable = [
        'descripcion_evaluacion',
        'ponderacion_evaluacion'
    ];
}