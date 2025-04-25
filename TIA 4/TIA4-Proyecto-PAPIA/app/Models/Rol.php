<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rol extends Model
{
    use HasFactory;

    protected $table = 'rols';
    protected $primaryKey = 'COD_rol';
    
    protected $fillable = [
        'nombre_rol',
        'descripcion_rol'
    ];

    // Relación con Usuarios
    public function usuarios()
    {
        return $this->hasMany(Usuario::class, 'COD_rol', 'COD_rol');
    }

    // Relación muchos a muchos con usuarios a través de la tabla pivote
    public function usuariosRelacionados()
    {
        return $this->belongsToMany(Usuario::class, 'rol__usuarios', 'COD_rol', 'COD_usuario');
    }

    // Relación muchos a muchos con permisos
    public function permisos()
    {
        return $this->belongsToMany(Permiso::class, 'rol__permisos', 'COD_rol', 'COD_permiso');
    }
}