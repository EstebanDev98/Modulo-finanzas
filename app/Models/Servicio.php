<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Servicio extends Model
{
    use HasFactory;
    protected $filable = [
        'nombre',
        'tipo',
        'tarifa_base',
        'frecuencia'
    ];

    public function cliente(){
        return $this->belongsToMany(Cliente::class, 'clientesservicios');
    }
}
