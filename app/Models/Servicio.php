<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Servicio extends Model
{
    use HasFactory;
    protected $table = 'servicios';

    protected $fillable = [
       'nombre_servicio',
       'descripcion',
    ];

    public function clienteServicios()
    {
        return $this->hasMany(ClienteServicios::class, 'servicios_id');
    }
}
