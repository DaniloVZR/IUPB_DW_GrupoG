<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Rol_Usuario extends Model
{
    protected $table = 'rol__usuarios';
    protected $primaryKey = ['COD_rol', 'COD_usuario'];
    public $incrementing = false;
    public $timestamps = false;

    protected $fillable = [
        'COD_rol',
        'COD_usuario'
    ];

    // Definir relación con el modelo Rol
    public function rol()
    {
        return $this->belongsTo(Rol::class, 'COD_rol', 'COD_rol');
    }

    // Definir relación con el modelo Usuario
    public function usuario()
    {
        return $this->belongsTo(Usuario::class, 'COD_usuario', 'COD_usuario');
    }
}