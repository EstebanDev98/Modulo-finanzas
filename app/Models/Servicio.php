<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Servicio
 *
 * @property $id
 * @property $nombre_servicio
 * @property $descripcion
 * @property $created_at
 * @property $updated_at
 *
 * @property ClienteServicio[] $clienteServicios
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Servicio extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['nombre_servicio', 'descripcion'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function clienteServicios()
    {
        return $this->hasMany(\App\Models\ClienteServicio::class, 'id', 'servicios_id');
    }
    
}
