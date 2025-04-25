<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Rol_Permiso extends Model
{
    protected $table = 'rol__permisos';
    protected $primaryKey = ['COD_rol', 'COD_permiso'];
    public $incrementing = false;
    public $timestamps = false;

    protected $fillable = [
        'COD_rol',
        'COD_permiso'
    ];

    // Definir relación con el modelo Rol
    public function rol()
    {
        return $this->belongsTo(Rol::class, 'COD_rol', 'COD_rol');
    }

    // Definir relación con el modelo Permiso
    public function permiso()
    {
        return $this->belongsTo(Permiso::class, 'COD_permiso', 'COD_permiso');
    }
}