<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IRA extends Model
{
    use HasFactory;

    protected $table = 'IRAs';
    protected $primaryKey = 'COD_IRA';
    
    protected $fillable = [
        'descripcion_IRA',
        'nivel_dominio_IRA',
        'COD_ERA'
    ];

    // Relación con ERA
    public function era()
    {
        return $this->belongsTo(ERA::class, 'COD_ERA', 'COD_ERA');
    }
}