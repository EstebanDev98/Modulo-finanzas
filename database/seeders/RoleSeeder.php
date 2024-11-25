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
        Permission::create(['name' => 'admin.servicios.index'])->assignRole($admin);
        Permission::create(['name' => 'admin.servicios.create'])->assignRole($admin);;
        Permission::create(['name' => 'admin.servicios.destroy'])->assignRole($admin);;
        Permission::create(['name' => 'admin.servicios.show'])->assignRole($admin);;
        Permission::create(['name' => 'admin.servicios.edit'])->assignRole($admin);;
        Permission::create(['name' => 'admin.servicios.update'])->assignRole($admin);;
        Permission::create(['name' => 'admin.servicios.store'])->assignRole($admin);;
        Permission::create(['name' => 'admin.clientte.formulario'])->assignRole($admin);;
        Permission::create(['name' => 'admin.cliente.buscar.post'])->assignRole($admin);;
        Permission::create(['name' => 'admin.cliente.detalles'])->assignRole($admin);;


        // rol cliente
        $client = Role::create(['name' => 'client']);
        // Permisos para el cliente
        Permission::create(['name' => 'cliente.ver.servicios'])->assignRole($client);;
        Permission::create(['name' => 'cliente.servicio.store'])->assignRole($client);;



    }
}
