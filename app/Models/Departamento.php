<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Departamento extends Model
{
    use HasFactory;

    // Atributos que son asignables en masa
    protected $fillable = [
        'pais_id',
        'name',
        'status',
        'register_user',
    ];

    protected $guarded = [
        'status','register_user',
    ];
    
    // Relación con el modelo Pais
    public function pais()
    {
        return $this->belongsTo(Pais::class);
    }

    // Puedes agregar relaciones adicionales si es necesario
}

