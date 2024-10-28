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
}
