<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Docente extends Model
{
    use HasFactory;

    protected $table = 'docentes';
    protected $primaryKey = 'COD_docente';
    public $incrementing = false; // Porque es un integer que se asigna manualmente
    
    protected $fillable = [
        'COD_docente',
        'nombre_1',
        'apellido_1',
        'telefono_1',
        'correo_electronico',
        'institucion',
        'departamento',
        'facultad',
        'nombre_2',
        'apellido_2',
        'telefono_2'
    ];

    // Relación muchos a muchos con proyectos
    public function proyectos()
    {
        return $this->belongsToMany(Proyecto::class, 'proyecto__docentes', 'COD_docente', 'COD_proyecto');
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