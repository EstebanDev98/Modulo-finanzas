<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;
    protected $filable = [
        'nombre',
        'email'
    ];

    public function servicios(){
        return $this->belongsTomany(Servicio::class, 'clientesservicios');
    }
}
