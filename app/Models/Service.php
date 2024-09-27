<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
   
    protected $table = 'services';

    protected $fillable = [
        'name',
        'image',
        'description',
        'state',
        'register_user',
    ];

    protected $guarded = [
        'status','register_user',
    ];
    
    public $timestamps = true;
}
