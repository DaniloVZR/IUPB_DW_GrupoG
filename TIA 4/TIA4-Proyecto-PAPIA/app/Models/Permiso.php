<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permiso extends Model
{
    use HasFactory;

    protected $table = 'permisos';
    protected $primaryKey = 'COD_permiso';
    
    protected $fillable = [
        'nombre_permiso',
        'descripcion_permiso'
    ];

    // Relación muchos a muchos con roles
    public function roles()
    {
        return $this->belongsToMany(Rol::class, 'rol__permisos', 'COD_permiso', 'COD_rol');
    }
}