<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Servicio;
use App\Models\ClienteServicio;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    //
    public function index(): View
    {
        return view('index');
    }
    public function ver_prestamos()
    {
        $service = Servicio::where('nombre','libre inversion')->first();
        $tarifa = Servicio::where('tarifa_base',38000)->first();
        return view('vista_prestamos', compact('service','tarifa'));
    }
    
    public function store(Request $request)
    {
        $cliente_servicio = new ClienteServicio();
        $cliente_servicio->idcliente = $request->idcliente;
        $cliente_servicio->idservicio = $request->idservicio;
        $cliente_servicio->idtiposervicio = $request->idtiposervicio; 
        $cliente_servicio->monto = $request->monto;
        $cliente_servicio->fecha_hora = $request->fecha_hora; 
        return $cliente_servicio; 

    }
    
}
