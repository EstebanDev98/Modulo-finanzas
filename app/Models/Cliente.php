<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Foundation\Auth\User as Authenticatable;


class Cliente extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    protected $table = 'clientes';


    protected $fillable = [
       'nombre',
       'email',
       'password',
       'identificacion',
       'telefono',
       'direccion',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

        /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];


    public function clienteServicios()
    {
        return $this->hasMany(ClienteServicios::class, 'clientes_id');
    }

    public function facturas()
    {
        return $this->hasManyThrough(Factura::class, ClienteServicios::class, 'clientes_id', 'Cservicios_id');
    }
}
