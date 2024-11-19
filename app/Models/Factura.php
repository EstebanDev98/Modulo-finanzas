<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Factura extends Model
{
    use HasFactory;

    protected $table = 'facturas';

    protected $fillable = [
        'Cservicios_id',
        'fecha_emision',
        'fecha_pago',
    ];

    public function clienteServicios()
    {
        return $this->belongsTo(ClienteServicios::class, 'Cservicios_id');
    }

    public function transacciones()
    {
        return $this->hasMany(Transaccion::class);
    }

    public function getEstadoAtributo()
    {
        return $this->transacciones()->latest()->value('estado') ?? 'pendiente';
    }
}
