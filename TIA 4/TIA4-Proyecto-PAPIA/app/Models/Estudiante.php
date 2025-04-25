<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estudiante extends Model
{
    use HasFactory;

    protected $table = 'estudiantes';
    protected $primaryKey = 'COD_estudiante';
    public $incrementing = false; // Porque es un integer que se asigna manualmente
    
    protected $fillable = [
        'COD_estudiante',
        'nombre_1',
        'apellido_1',
        'telefono_1',
        'correo_electronico',
        'nombre_2',
        'apellido_2',
        'telefono_2',
        'COD_proyecto',
        'COD_programa'
    ];

    // Relación con Proyecto
    public function proyecto()
    {
        return $this->belongsTo(Proyecto::class, 'COD_proyecto', 'COD_proyecto');
    }

    // Relación con ProgramaAcademico
    public function programaAcademico()
    {
        return $this->belongsTo(ProgramaAcademico::class, 'COD_programa', 'COD_programa');
    }

    // Método para obtener nombre completo
    public function getNombreCompletoAttribute()
    {
        $nombre = $this->nombre_1;
        if ($this->nombre_2) {
            $nombre .= ' ' . $this->nombre_2;
        }
        $nombre .= ' ' . $this->apellido_1;
        if ($this->apellido_2) {
            $nombre .= ' ' . $this->apellido_2;
        }
        return $nombre;
    }
}