<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class REP extends Model
{
    use HasFactory;

    protected $table = 'REPs';
    protected $primaryKey = 'COD_REP';
    
    protected $fillable = [
        'descripcion',
        'COD_proyecto'
    ];

    // Relación con Proyecto
    public function proyecto()
    {
        return $this->belongsTo(Proyecto::class, 'COD_proyecto', 'COD_proyecto');
    }
}