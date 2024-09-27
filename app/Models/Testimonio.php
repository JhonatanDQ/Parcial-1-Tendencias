<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testimonio extends Model
{
    use HasFactory;

    protected $fillable = [
        'service_id',
        'ciudad_id',
        'user_id',
        'message',
        'image',
        'status',
        'register_user',
    ];

    protected $guarded = [
        'status','register_user',
    ];

    // Relación con el modelo Service
    public function service()
    {
        return $this->belongsTo(Service::class);
    }

    // Relación con el modelo Ciudad
    public function ciudad()
    {
        return $this->belongsTo(Ciudad::class);
    }

    // Relación con el modelo User
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
