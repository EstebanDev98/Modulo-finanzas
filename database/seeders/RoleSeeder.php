<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // rol admin
        $admin = Role::create(['name' => 'admin']);
        $client = Role::create(['name' => 'cliente']);
        // Permisos para el admin
        Permission::create(['name' => 'servicios.index', 'description' => ''])->assignRole($client);
        Permission::create(['name' => 'servicios.create', 'description' => ''])->assignRole($client);;
        Permission::create(['name' => 'servicios.destroy', 'description' => ''])->assignRole($client);;
        Permission::create(['name' => 'servicios.show', 'description' => ''])->assignRole($client);;
        Permission::create(['name' => 'servicios.edit', 'description' => ''])->assignRole($client);;
        Permission::create(['name' => 'servicios.update', 'description' => ''])->assignRole($client);;
        Permission::create(['name' => 'servicios.store', 'description' => ''])->assignRole($client);;
        Permission::create(['name' => 'cliente.formulario', 'description' => ''])->assignRole($client);;
        Permission::create(['name' => 'cliente.buscar.post', 'description' => ''])->assignRole($client);;
        Permission::create(['name' => 'cliente.detalles', 'description' => ''])->assignRole($client);;


        Permission::create(['name' => 'cliente.ver.servicios', 'description' => ''])->assignRole($client);;
        Permission::create(['name' => 'cliente.servicio.store', 'description' => ''])->assignRole($client);;



    }
}
