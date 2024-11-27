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
        Permission::create(['name' => 'admin.servicios.index', 'description' => '', 'description' => 'el admin puede ver la interfaz de los servicios'])->assignRole($admin);
        Permission::create(['name' => 'admin.servicios.create', 'description' => '', 'description' => 'el admin puede crear servicios'])->assignRole($admin);;
        Permission::create(['name' => 'admin.servicios.destroy', 'description' => '', 'description' => 'el admin  puede borrar permisos'])->assignRole($admin);;
        Permission::create(['name' => 'admin.servicios.show', 'description' => '', 'description' => 'el admin puede ver un servicio en especifico'])->assignRole($admin);;
        Permission::create(['name' => 'admin.servicios.edit', 'description' => '', 'description' => 'el admin puede editar un servicio'])->assignRole($admin);;
        Permission::create(['name' => 'admin.servicios.update', 'description' => '', 'description' => 'el admin puede actualizar un servicio editado'])->assignRole($admin);;
        Permission::create(['name' => 'admin.servicios.store', 'description' => '', 'description' => 'el admin  puede interactuar con la ruta de solicitudes de servicio'])->assignRole($admin);;
        Permission::create(['name' => 'admin.clientte.formulario', 'description' => '', 'description' => 'el admin puede ver la interfaz para buscar un usuario'])->assignRole($admin);;
        Permission::create(['name' => 'admin.cliente.buscar.post', 'description' => '', 'description' => 'el admin puede buscar un usuario'])->assignRole($admin);;
        Permission::create(['name' => 'admin.cliente.detalles', 'description' => '', 'description' => 'el  admin  puede ver los detalles de un usuario'])->assignRole($admin);;


        // rol cliente
        $client = Role::create(['name' => 'cliente']);
        // Permisos para el cliente
        Permission::create(['name' => 'cliente.ver.servicios'])->assignRole($client);;
        Permission::create(['name' => 'cliente.servicio.store'])->assignRole($client);;



    }
}
