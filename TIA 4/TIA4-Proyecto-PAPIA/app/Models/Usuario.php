<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;

    protected $table = 'usuarios';
    protected $primaryKey = 'COD_usuario';
    
    protected $fillable = [
        'nombre_usuario',
        'clave_usuario',
        'correo_electronico',
        'COD_rol'
    ];

    // Relación con Rol
    public function rol()
    {
        return $this->belongsTo(Rol::class, 'COD_rol', 'COD_rol');
    }

    // Relación muchos a muchos con Rol a través de la tabla pivote
    public function roles()
    {
        return $this->belongsToMany(Rol::class, 'rol__usuarios', 'COD_usuario', 'COD_rol');
    }
}