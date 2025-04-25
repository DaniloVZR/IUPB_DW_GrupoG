<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Programa_Academico extends Model
{
    use HasFactory;

    protected $table = 'programa__academicos';
    protected $primaryKey = 'COD_programa';
    
    protected $fillable = [
        'nombre_programa_academico'
    ];

    // Relación con estudiantes
    public function estudiantes()
    {
        return $this->hasMany(Estudiante::class, 'COD_programa', 'COD_programa');
    }

    // Relación muchos a muchos con asignaturas
    public function asignaturas()
    {
        return $this->belongsToMany(Asignatura::class, 'programa__academico__asignaturas', 'COD_programa', 'COD_asignatura');
    }
}