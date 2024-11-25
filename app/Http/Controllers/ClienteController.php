<?php

namespace App\Http\Controllers;

use App\Models\ClienteServicio;
use Illuminate\Http\Request;
use App\Models\Cliente;
use App\Models\Servicio;
use Barryvdh\DomPDF\Facade\Pdf;


class ClienteController extends Controller
{

    public function formulario()
    {
        return view('admin.clientes');
    }
    public function buscar(Request $request)
    {
        $cliente = Cliente::where('nombre', 'like' , '%'.$request->nombre.'%')
                           ->Orwhere('identificacion', $request->identificacion)
                           ->first();

        if ($cliente) {
            return redirect()->route('cliente.detalles', ['id' => $cliente->id]);
        } else {
            return redirect()->back()->with('error', 'Cliente no encontrado');
        }

    }

    public function cliente_detalles($id)
    {
      //  $cliente = Cliente::find($id);


      $cliente = Cliente::with('clienteServicios.servicio', 'clienteServicios.facturas.transacciones')->find($id);

      if (!$cliente) {
          return redirect()->route('cliente.formulario')->with('error', 'Cliente no encontrado');
      }
  
      return view('admin.cliente_detalles', compact('cliente'));

      //$cliente = Cliente::with('clienteServicio.servicios')->findOrFail($id);

     // return view('cliente_detalles', compact('cliente'));


       // if (!$cliente) {
          //  return redirect()->route('cliente.formulario')->with('error', 'Cliente no encontrado');
        //}
    
       // return view('cliente_detalles', compact('cliente'));
        //$cliente = Cliente::findOrFail($id);

       // return view('cliente_detalles', compact('id'));
        //$cliente = Cliente::with(['servicios', 'facturas', 'transacciones'])->findOrFail($id);

        //return view('cliente_detalles', compact('cliente'));
        
    }

    public function adquirir_servicio(Request $request, $id){
        
        $cliente = Cliente::findOrFail($id);

        $servicios_id = $request->input('select_servicio');
        if(! Servicio::find($servicios_id)){
            return response()->json(['error' => 'el servicio no existe'], 404);
        }
        $cliente->clienteServicios()->attach($servicios_id);
        return response()->json(['sucess' => 'Servicio adquirido correctamente']);
    }

    public function descargarPDF($id)
    {
        $cliente = Cliente::with(['clienteServicios.servicio', 'clienteServicios.facturas.transacciones'])->findOrFail($id);

        $pdf = Pdf::loadView('clientes.pdf', compact('cliente'));

        return $pdf->download('cliente_informacion_' . $cliente->id . '.pdf');
    }
}
