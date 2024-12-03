<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Cliente;

class clienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        cliente::create([
            'nombre'=>'admin',
            'email'=>'admin@example.com',
            'password'=>bcrypt('password'),
            'identificacion'=>'123456789',
        ])->assignRole('admin');
    }
}
