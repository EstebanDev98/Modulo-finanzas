<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class PDFController extends Controller
{
    public function downloadClientePDF($id)
    {
        // Carga el cliente con las relaciones necesarias
        $cliente = Cliente::with(['clienteServicios.servicio', 'clienteServicios.facturas.transacciones'])->findOrFail($id);

        // Genera el PDF usando la vista específica
        $pdf = Pdf::loadView('clientes.pdf', compact('cliente'));

        // Devuelve el PDF como una descarga
        return $pdf->download("Cliente_{$cliente->nombre}.pdf");
    }
}
