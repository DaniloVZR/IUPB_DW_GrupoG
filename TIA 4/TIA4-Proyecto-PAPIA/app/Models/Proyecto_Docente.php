<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Proyecto_Docente extends Model
{
    protected $table = 'proyecto__docentes';
    protected $primaryKey = ['COD_proyecto', 'COD_docente'];
    public $incrementing = false;
    public $timestamps = false;

    protected $fillable = [
        'COD_proyecto',
        'COD_docente'
    ];

    // Definir relación con el modelo Proyecto
    public function proyecto()
    {
        return $this->belongsTo(Proyecto::class, 'COD_proyecto', 'COD_proyecto');
    }

    // Definir relación con el modelo Docente
    public function docente()
    {
        return $this->belongsTo(Docente::class, 'COD_docente', 'COD_docente');
    }
}