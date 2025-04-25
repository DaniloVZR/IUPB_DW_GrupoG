<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Proyecto_ERA extends Model
{
    protected $table = 'proyecto__ERAs';
    protected $primaryKey = ['COD_proyecto', 'COD_ERA'];
    public $incrementing = false;
    public $timestamps = false;

    protected $fillable = [
        'COD_proyecto',
        'COD_ERA'
    ];

    // Definir relación con el modelo Proyecto
    public function proyecto()
    {
        return $this->belongsTo(Proyecto::class, 'COD_proyecto', 'COD_proyecto');
    }

    // Definir relación con el modelo ERA
    public function era()
    {
        return $this->belongsTo(ERA::class, 'COD_ERA', 'COD_ERA');
    }
}