<?php

namespace App\Http\Controllers;

use App\Models\Cliente;

use App\Models\Servicio;
use App\Models\ClienteServicio;
use Illuminate\Auth\Events\Validated;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Unique;
use Symfony\Contracts\Service\Attribute\Required;

class ServiceController extends Controller
{
    
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
        $request->validate([
            'selectservicio' => 'required',
            'cedula' => 'required',
        ]);

        $cliente_servicio = new ClienteServicio();    
        
        $cliente = Cliente::find(1);
        $cliente_servicio->servicio_id = $request->selectservicio;
        $cliente_servicio->cedula = $request->cedula;
        $cliente->servicios()->attach($request->selectservicio);
        return redirect('/vista_prestamos');
        
        
    }
    

}
