<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invitado extends Model
{
    use HasFactory;

    protected $table = 'invitados';
    protected $primaryKey = 'COD_invitado';
    
    protected $fillable = [
        'nombre_1',
        'apellido_1',
        'telefono_1',
        'correo_electronico',
        'institucion',
        'nombre_2',
        'apellido_2',
        'telefono_2',
        'departamento',
        'facultad'
    ];

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