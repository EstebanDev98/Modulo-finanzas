<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;
    protected $table = 'clientes';


    protected $fillable = [
       'nombre',
       'email',
       'identificacion',
       'telefono',
       'direccion',
    ];

    public function clienteServicios()
    {
        return $this->hasMany(ClienteServicios::class, 'clientes_id');
    }
}
