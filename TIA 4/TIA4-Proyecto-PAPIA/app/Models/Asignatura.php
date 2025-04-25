<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Asignatura extends Model
{
    use HasFactory;

    protected $table = 'asignaturas';
    protected $primaryKey = 'COD_asignatura';
    
    protected $fillable = [
        'nombre_asignatura',
        'departamento_asignatura',
        'facultad_asignatura',
        'creditos_asignatura'
    ];

    // Relación muchos a muchos con programas académicos
    public function programasAcademicos()
    {
        return $this->belongsToMany(ProgramaAcademico::class, 'programa__academico__asignaturas', 'COD_asignatura', 'COD_programa');
    }
}