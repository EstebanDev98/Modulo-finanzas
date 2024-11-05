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

    public function usuers(){
        return $this->belongsToMany('App\Models\User');
    }
}
