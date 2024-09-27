<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pais extends Model
{
    use HasFactory;

    // Atributos que son asignables en masa
    protected $fillable = [
        'name',
        'status',
        'register_user',
    ];

    protected $guarded = [
        'status','register_user',
    ];

    public function departamentos()
    {
        return $this->hasMany('App\Models\Departamento', 'pais_id');
    }
}
