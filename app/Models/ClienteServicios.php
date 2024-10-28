<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;



class ClienteServicios extends Model
{
    use HasFactory;

    protected $table = 'cliente_servicios';

    protected $fillable = [
        'clientes_id',
        'servicios_id',
        'monto',
    ];

    public function cliente()
    {
        return $this->belongsTo(Cliente::class, 'clientes_id');
    }

    public function servicio()
    {
        return $this->belongsTo(Servicio::class, 'servicios_id');
    }

    public function facturas()
    {
        return $this->hasMany(Factura::class, 'Cservicios_id');
    }
}
