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
        Permission::create(['name' => 'admin.servicios.index', 'description' => ''])->assignRole($admin);
        Permission::create(['name' => 'admin.servicios.create', 'description' => ''])->assignRole($admin);;
        Permission::create(['name' => 'admin.servicios.destroy', 'description' => ''])->assignRole($admin);;
        Permission::create(['name' => 'admin.servicios.show', 'description' => ''])->assignRole($admin);;
        Permission::create(['name' => 'admin.servicios.edit', 'description' => ''])->assignRole($admin);;
        Permission::create(['name' => 'admin.servicios.update', 'description' => ''])->assignRole($admin);;
        Permission::create(['name' => 'admin.servicios.store', 'description' => ''])->assignRole($admin);;
        Permission::create(['name' => 'admin.clientte.formulario', 'description' => ''])->assignRole($admin);;
        Permission::create(['name' => 'admin.cliente.buscar.post', 'description' => ''])->assignRole($admin);;
        Permission::create(['name' => 'admin.cliente.detalles', 'description' => ''])->assignRole($admin);;


        // rol cliente
        $client = Role::create(['name' => 'cliente']);
        // Permisos para el cliente
        Permission::create(['name' => 'cliente.ver.servicios', 'description' => ''])->assignRole($client);;
        Permission::create(['name' => 'cliente.servicio.store', 'description' => ''])->assignRole($client);;



    }
}
