<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proyecto extends Model
{
    use HasFactory;

    protected $table = 'proyectos';
    protected $primaryKey = 'COD_proyecto';
    
    protected $fillable = [
        'titulo_proyecto',
        'objetivo_proyecto',
        'orientacion_del_proyecto',
        'fecha_inicio_proyecto',
        'fecha_fin_proyecto',
        'COD_tipo_proyecto'
    ];

    protected $casts = [
        'fecha_inicio_proyecto' => 'date',
        'fecha_fin_proyecto' => 'date',
    ];

    // Relación con TipoProyecto
    public function tipoProyecto()
    {
        return $this->belongsTo(TipoProyecto::class, 'COD_tipo_proyecto', 'COD_tipo_proyecto');
    }

    // Relación con Entregables
    public function entregables()
    {
        return $this->hasMany(Entregable::class, 'COD_proyecto', 'COD_proyecto');
    }

    // Relación con Estudiantes
    public function estudiantes()
    {
        return $this->hasMany(Estudiante::class, 'COD_proyecto', 'COD_proyecto');
    }

    // Relación con REPs
    public function reps()
    {
        return $this->hasMany(REP::class, 'COD_proyecto', 'COD_proyecto');
    }

    // Relación muchos a muchos con docentes
    public function docentes()
    {
        return $this->belongsToMany(Docente::class, 'proyecto__docentes', 'COD_proyecto', 'COD_docente');
    }

    // Relación muchos a muchos con asignaturas
public function asignaturas()
{
    return $this->belongsToMany(Asignatura::class, 'proyecto__asignaturas', 'COD_proyecto', 'COD_asignatura');
}

// Relación muchos a muchos con ERAs
public function eras()
{
    return $this->belongsToMany(ERA::class, 'proyecto__ERAs', 'COD_proyecto', 'COD_ERA');
}
}