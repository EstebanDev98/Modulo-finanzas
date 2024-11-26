<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Cliente extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, HasRoles;
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


    public function servicios(){
        return $this->belongsToMany(Servicio::class, 'cliente_servicios', 'idcliente', 'idservicio');
    } 

    public function clienteServicios()
    {
        return $this->hasMany(ClienteServicios::class, 'idcliente');
    }

    public function facturas()
    {
        return $this->hasManyThrough(Factura::class, ClienteServicios::class, 'idcliente', 'Cservicios_id');
    }
}
