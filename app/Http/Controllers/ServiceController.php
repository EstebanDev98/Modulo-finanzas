<?php

namespace App\Http\Controllers;

use App\Models\Cliente;

use App\Models\Servicio;
use App\Models\ClienteServicio;
use App\Models\ClienteServicios;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Unique;
use Illuminate\Support\Facades\Redirect;

use Symfony\Contracts\Service\Attribute\Required;

class ServiceController extends Controller
{
    //
    public function index(): View
    {
        $cliente = Cliente::findOrFail(2);
        return view('index', compact('cliente'));
    }
    public function ver_servicios()
    {
        $servicio = Servicio::all();
        // $cliente = Cliente::findOrFail($idcliente);
        return view('vista_servicios', compact('servicio'));
    }

    
    

    public function store(Request $request)
    {
        
        $cliente = Cliente::findOrFail($idcliente);
        $servicio = Servicio::findOrFail($idservicio);
        
        $datos = $request->validate([
            'select_servicio' => 'required|exists:servicios,id',
            'cedula' => 'required|numeric|unique:clientes|integer|between:6,8',
            'monto' => 'required|numeric|min:0',
        ]);
        $cliente = Cliente::findOrFail($idcliente);
        $idservicio = $datos['select_servicio'];

        $cliente->servicios()->attach($idservicio, $datos);
        
        
        return Redirect::route('ver.servicios', compact($cliente))->with('success', 'Servicio adquirido exitosamente');
        

        
        

        
        
        // $cliente_servicio->fecha_hora = $request->fecha_hora; 
        // return $cliente_servicio; 

    }


    
}
