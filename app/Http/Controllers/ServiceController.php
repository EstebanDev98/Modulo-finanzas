<?php

namespace App\Http\Controllers;

use App\Models\Cliente;

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
        $service = Servicio::all();
        
        return view('vista_prestamos', compact('service'));
    }

    public function ver_tarjetas()
    {
        return view('vista_tarjetas');
    }
    

    public function store(Request $request)
    {
        $cliente_servicio = new ClienteServicio();    
        $cliente_servicio->monto = $request->monto;
        // $cliente_servicio->plazo = $request->plazo;
        // $cliente_servicio->cedula = $request->cedula;
        $cliente = Cliente::find(1);
        $cliente->servicios()->attach(2);
        
        
        /*foreach($cliente->servicios as $servicio){
            echo $servicio->pivot->cliente_id . '<br>';
        }*/

        
        

        
        
        // $cliente_servicio->fecha_hora = $request->fecha_hora; 
        // return $cliente_servicio; 

    }


    
}
