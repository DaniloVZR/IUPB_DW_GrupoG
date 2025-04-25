<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Programa_Academico_Asignatura extends Model
{
    protected $table = 'programa__academico__asignaturas';
    protected $primaryKey = ['COD_programa', 'COD_asignatura'];
    public $incrementing = false;
    public $timestamps = false;

    protected $fillable = [
        'COD_programa',
        'COD_asignatura'
    ];

    // Definir relación con el modelo ProgramaAcademico
    public function programaAcademico()
    {
        return $this->belongsTo(ProgramaAcademico::class, 'COD_programa', 'COD_programa');
    }

    // Definir relación con el modelo Asignatura
    public function asignatura()
    {
        return $this->belongsTo(Asignatura::class, 'COD_asignatura', 'COD_asignatura');
    }
}