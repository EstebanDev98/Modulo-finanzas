<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Servicio;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Servicio::create([
            'nombre_servicio'=>' Préstamos',
            'descripcion'=>'Obtén el financiamiento que necesitas con tasas competitivas, plazos flexibles y procesos rápidos. Ideal para cubrir gastos personales, emprender proyectos o cumplir tus metas, con total transparencia y atención personalizada. ¡Hazlo realidad hoy!'
        ]);

        Servicio::create([
            'nombre_servicio'=>'depósitos',
            'descripcion'=>'Los depósitos bancarios permiten agregar fondos a una cuenta, ya sea en efectivo, por cheque o mediante transferencia electrónica, asegurando que el dinero esté disponible de forma segura para su uso.'
        ]);

        Servicio::create([
            'nombre_servicio'=>'transferencias',
            'descripcion'=>'Las transferencias bancarias permiten mover fondos de una cuenta a otra, ya sea dentro del mismo banco o entre diferentes instituciones, de manera rápida, segura y conveniente.'
        ]);

        Servicio::create([
            'nombre_servicio'=>'retiros',
            'descripcion'=>'Los retiros bancarios permiten extraer fondos de una cuenta, ya sea en efectivo, por transferencia o mediante cheque, facilitando el acceso a tu dinero de manera segura y conveniente.'
        ]);

        Servicio::create([
            'nombre_servicio'=>'pagos',
            'descripcion'=>'Los pagos bancarios permiten realizar transacciones para saldar deudas o adquirir bienes y servicios, ya sea mediante transferencia, tarjeta de débito o crédito, de forma rápida y segura.'
        ]);

        
    }
}
