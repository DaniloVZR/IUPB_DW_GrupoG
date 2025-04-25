<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Entregable extends Model
{
    use HasFactory;

    protected $table = 'entregables';
    protected $primaryKey = 'COD_entregable';
    
    protected $fillable = [
        'nombre_entregable',
        'descripcion_entregable',
        'COD_proyecto'
    ];

    // Relación con Proyecto
    public function proyecto()
    {
        return $this->belongsTo(Proyecto::class, 'COD_proyecto', 'COD_proyecto');
    }

    // Relación muchos a muchos con tipos de entregables
public function tiposEntregables()
{
    return $this->belongsToMany(Tipo_Entregable::class, 'entregable__tipo__entregables', 'COD_entregable', 'COD_tipo_entregable');
}
}