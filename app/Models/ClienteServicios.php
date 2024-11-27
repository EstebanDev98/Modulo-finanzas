<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;



class ClienteServicios extends Model
{
    use HasFactory;

    protected $table = 'cliente_servicios';

    protected $fillable = [
        'idcliente',
        'idservicio',
        'monto',
    ];

    public function cliente()
    {
        return $this->belongsTo(Cliente::class, 'idcliente');
    }

    public function servicio()
    {
        return $this->belongsTo(Servicio::class, 'idservicio');
    }

    public function facturas()
    {
        return $this->hasMany(Factura::class, 'Cservicios_id');
    }
}
