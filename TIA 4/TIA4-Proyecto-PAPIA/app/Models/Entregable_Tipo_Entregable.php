<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Entregable_Tipo_Entregable extends Model
{
    protected $table = 'entregable__tipo__entregables';
    protected $primaryKey = ['COD_entregable', 'COD_tipo_entregable'];
    public $incrementing = false;
    public $timestamps = false;

    protected $fillable = [
        'COD_entregable',
        'COD_tipo_entregable'
    ];

    // Definir relación con el modelo Entregable
    public function entregable()
    {
        return $this->belongsTo(Entregable::class, 'COD_entregable', 'COD_entregable');
    }

    // Definir relación con el modelo Tipo_Entregable
    public function tipoEntregable()
    {
        return $this->belongsTo(Tipo_Entregable::class, 'COD_tipo_entregable', 'COD_tipo_entregable');
    }
}