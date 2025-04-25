<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ERA extends Model
{
    use HasFactory;

    protected $table = 'ERAs';
    protected $primaryKey = 'COD_ERA';
    
    protected $fillable = [
        'numero_ERA',
        'descripcion_ERA'
    ];

    // Relación con IRAs
    public function iras()
    {
        return $this->hasMany(IRA::class, 'COD_ERA', 'COD_ERA');
    }
}