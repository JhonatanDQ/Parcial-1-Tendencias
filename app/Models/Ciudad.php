<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ciudad extends Model
{
    use HasFactory;

    // Atributos que son asignables en masa
    protected $fillable = [
        'departamento_id',
        'name',
        'status',
        'register_user',
    ];

    protected $guarded = [
        'status','register_user',
    ];

    // Relación con el modelo Departamento
    public function departamento()
    {
        return $this->belongsTo(Departamento::class);
    }

    // Relación con el modelo Testimonio (si es necesario)
    public function testimonios()
    {
        return $this->hasMany(Testimonio::class);
    }
}

