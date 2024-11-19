<?php

namespace App\Http\Controllers;

use App\Models\Cliente;

use App\Models\Servicio;
use App\Models\ClienteServicio;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Unique;
use Symfony\Contracts\Service\Attribute\Required;

class ServiceController extends Controller
{
    //
    public function index(): View
    {
        return view('index');
    }
    public function ver_servicios()
    {
        $service = Servicio::all();
        
        return view('vista_servicios', compact('service'));
    }

    
    

    public function store(Request $request)
    {
        $cliente_servicio = new ClienteServicio();    
        
        // $cliente_servicio->plazo = $request->plazo;
        // $cliente_servicio->cedula = $request->cedula;
        $cliente = Cliente::find(1);
        // $cliente->servicios()->attach(2);
        $validated = $request->validate([
            $cliente_servicio->cedula => 'Required|Unique|10',
            $cliente_servicio->monto => 'Required',
            $cliente_servicio->plazo => 'Required',
        ]);
        
        return redirect('/vista_prestamos');
        /*foreach($cliente->servicios as $servicio){
            echo $servicio->pivot->cliente_id . '<br>';
        }*/

        
        

        
        
        // $cliente_servicio->fecha_hora = $request->fecha_hora; 
        // return $cliente_servicio; 

    }


    
}
