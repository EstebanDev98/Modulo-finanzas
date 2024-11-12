<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClienteServicio extends Model
{
    use HasFactory;
    protected $fillable = [
        'cliente_id',
        'servicio_id',
        'monto'
        
    ];

    
}
