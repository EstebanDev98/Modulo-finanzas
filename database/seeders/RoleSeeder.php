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
        // Permisos para el admin
        Permission::create(['name' => 'servicios.index', 'description'=>'aqui va algo'])->assignRole($admin);
        Permission::create(['name' => 'servicios.create', 'description'=>'aqui va algo'])->assignRole($admin);;
        Permission::create(['name' => 'servicios.destroy', 'description'=>'aqui va algo'])->assignRole($admin);;
        Permission::create(['name' => 'servicios.show', 'description'=>'aqui va algo'])->assignRole($admin);;
        Permission::create(['name' => 'servicios.edit', 'description'=>'aqui va algo'])->assignRole($admin);;
        Permission::create(['name' => 'servicios.update', 'description'=>'aqui va algo'])->assignRole($admin);;
        Permission::create(['name' => 'servicios.store', 'description'=>'aqui va algo'])->assignRole($admin);;
        Permission::create(['name' => 'admin.clientte.formulario', 'description'=>'aqui va algo'])->assignRole($admin);;
        Permission::create(['name' => 'admin.cliente.buscar.post', 'description'=>'aqui va algo'])->assignRole($admin);;
        Permission::create(['name' => 'admin.cliente.detalles', 'description'=>'aqui va algo'])->assignRole($admin);;


        // rol cliente
        $client = Role::create(['name' => 'client']);
        // Permisos para el cliente
        Permission::create(['name' => 'cliente.ver.servicios', 'description'=>'aqui va algo'])->assignRole($client);;
        Permission::create(['name' => 'cliente.servicio.store', 'description'=>'aqui va algo'])->assignRole($client);;



    }
}
