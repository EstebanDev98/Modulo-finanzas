<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Barryvdh\DomPDF\Facade\Pdf;


class PDFController extends Controller
{
    public function downloadClientePDF($id)
    {
        // Obtener información del cliente con relaciones
        $cliente = Cliente::with(['clienteServicios.servicio', 'clienteServicios.facturas.transacciones'])->findOrFail($id);

        // Cargar la vista del PDF con la información del cliente
        $pdf = Pdf::loadView('clientes.pdf', compact('cliente'));

        // Descargar el archivo PDF
        return $pdf->download('cliente_informacion_' . $cliente->id . '.pdf');
    }
}
