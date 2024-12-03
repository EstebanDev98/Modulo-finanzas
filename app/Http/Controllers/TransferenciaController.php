<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transferencia;

class TransferenciaController extends Controller
{
    public function transferir(Request $request)
    {
        // Validar los datos de la transferencia
        $request->validate([
            'cuenta_destino' => 'required|string',
            'monto' => 'required|numeric|min:1',
        ]);

        // Crear una nueva transferencia en la base de datos
        Transferencia::create([
            'cuenta_destino' => $request->input('cuenta_destino'),
            'monto' => $request->input('monto'),
            'fecha' => now()
        ]);

        // Redirigir con un mensaje de éxito
        return redirect()->back()->with('success', 'Transferencia realizada y guardada en el historial.');
    }

    public function historial()
    {
        // Obtener todas las transferencias desde la base de datos
        $historial = Transferencia::orderBy('fecha', 'desc')->get();

        return view('historial_transferencias', compact('historial'));
    }
}
