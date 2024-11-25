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
        return view('index');
    }
    public function ver_servicios()
    {
        $servicio = Servicio::all();
        
        return view('vista_servicios', compact('servicio'));
    }

    
    

    public function store(Request $request, $idservicio)
    {
        
        $cliente = Cliente::findOrFail(2);
        $servicio = Servicio::findOrFail($idservicio);
        
        $datos = ['monto' => $request->monto];

        $cliente->servicios()->attach($idservicio, $datos);
        
        
        return Redirect::route('ver.servicios')->with('success', 'Servicio adquirido exitosamente');
        

        
        

        
        
        // $cliente_servicio->fecha_hora = $request->fecha_hora; 
        // return $cliente_servicio; 

    }


    
}
