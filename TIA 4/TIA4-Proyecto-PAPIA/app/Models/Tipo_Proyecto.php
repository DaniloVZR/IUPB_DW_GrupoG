<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tipo_Proyecto extends Model
{
    use HasFactory;

    protected $table = 'tipo__proyectos';
    protected $primaryKey = 'COD_tipo_proyecto';
    
    protected $fillable = [
        'tipo_proyecto'
    ];

    // Relación con proyectos
    public function proyectos()
    {
        return $this->hasMany(Proyecto::class, 'COD_tipo_proyecto', 'COD_tipo_proyecto');
    }
}