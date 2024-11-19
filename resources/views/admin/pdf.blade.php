<!DOCTYPE html>
<html>
<head>
    <title>Información del Cliente</title>
    <style>
        body { font-family: sans-serif; }
        .container { margin: 0 auto; padding: 20px; }
        .card { border: 1px solid #ddd; padding: 15px; margin-bottom: 15px; }
        .card-header { background-color: #007bff; color: white; padding: 10px; text-align: center; }
        .card-body p { margin: 0; }
        .badge { background-color: #007bff; color: white; padding: 5px; }
    </style>
</head>
<body>
    <div class="container">
        <h1>Información de: {{ $cliente->nombre }}</h1>
        <div class="card">
            <div class="card-body">
                <p><strong>Nombre:</strong> {{ $cliente->nombre }}</p>
                <p><strong>Identificación:</strong> {{ $cliente->identificacion }}</p>
                <p><strong>Correo:</strong> {{ $cliente->email }}</p>
                <p><strong>Teléfono:</strong> {{ $cliente->telefono }}</p>
                <p><strong>Dirección:</strong> {{ $cliente->direccion }}</p>
            </div>
        </div>

        <h3>Servicios Asociados:</h3>
        @if($cliente->clienteServicios->isNotEmpty())
            <ul>
                @foreach($cliente->clienteServicios as $clienteServicio)
                    <li>Servicio: {{ $clienteServicio->servicio->nombre_servicio }} - 
                        Descripción: {{ $clienteServicio->servicio->descripcion }} - 
                        Valor a pagar: ${{ number_format($clienteServicio->monto, 2) }}
                    </li>
                @endforeach
            </ul>
        @else
            <p>No hay servicios asociados a este cliente.</p>
        @endif

        <h3>Facturas</h3>
        @foreach($cliente->clienteServicios as $clienteServicio)
            <div class="card">
                <div class="card-header">
                    Servicio: {{ $clienteServicio->servicio->nombre_servicio }} - Estado: {{ $clienteServicio->facturas->last()->estado ?? 'pendiente' }}
                </div>
                <div class="card-body">
                    <p>Monto: {{ $clienteServicio->monto }}</p>
                    @foreach($clienteServicio->facturas as $factura)
                        <p>Fecha de emisión: {{ $factura->fecha_emision }}</p>
                        <p>Fecha de pago: {{ $factura->fecha_pago }}</p>
                        <p>Estado: {{ $factura->transacciones->last()->estado ?? 'pendiente' }}</p>
                        <p>Valor pagado: {{ $factura->transacciones->last()->monto_pagado ?? $clienteServicio->monto }}</p>
                        <p>Saldo pendiente: {{ $factura->transacciones->last()->saldo_pendiente ?? $clienteServicio->monto }}</p>
                    @endforeach
                </div>
            </div>
        @endforeach
    </div>
</body>
</html>
