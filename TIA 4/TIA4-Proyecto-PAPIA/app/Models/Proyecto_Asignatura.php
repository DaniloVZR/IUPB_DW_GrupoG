<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Proyecto_Asignatura extends Model
{
    protected $table = 'proyecto__asignaturas';
    protected $primaryKey = ['COD_proyecto', 'COD_asignatura'];
    public $incrementing = false;
    public $timestamps = false;

    protected $fillable = [
        'COD_proyecto',
        'COD_asignatura'
    ];

    // Definir relación con el modelo Proyecto
    public function proyecto()
    {
        return $this->belongsTo(Proyecto::class, 'COD_proyecto', 'COD_proyecto');
    }

    // Definir relación con el modelo Asignatura
    public function asignatura()
    {
        return $this->belongsTo(Asignatura::class, 'COD_asignatura', 'COD_asignatura');
    }
}