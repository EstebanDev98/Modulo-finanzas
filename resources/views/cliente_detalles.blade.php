@extends('layouts.app')


@section('content')
<div class="container mt-5">
    <div class="row">
    <!-- Informacion personal del cliente -->
        <div class="row justify-content-start" style="margin-left: 20px;">
            <div class="col-md-6 mb-4">
                <div class="card shadow">
                    <div class="card-header bg-primary text-white text-center">
                        <h3>Información de: {{$cliente->nombre}}</h3>
                </div>
                <div class="card-body">
                    <!-- Información Básica del Cliente -->
                    <p class="mb-2"><strong>Nombre:</strong> {{ $cliente->nombre }}</p>
                    <p class="mb-2"><strong>Identificación:</strong> {{ $cliente->identificacion }}</p>
                    <p class="mb-2"><strong>Correo:</strong> {{ $cliente->email }}</p>
                    <p class="mb-2"><strong>Teléfono:</strong> {{ $cliente->telefono }}</p>
                    <p class="mb-2"><strong>Dirección:</strong> {{ $cliente->direccion }}</p>
                </div>
            </div>
        </div>

        

        <!-- Lista de servicios -->
        <div class="col-md-6 mb-4">
            @if($cliente->clienteServicios->isNotEmpty())
            <h4>Servicios Asociados:</h4>
                <ul class="list-group mt-3">
                    @foreach($cliente->clienteServicios as $clienteServicio)
                        <li class="list-group-item">
                            Servicio: {{ $clienteServicio->servicio->nombre_servicio }} | Descripcion: {{ $clienteServicio->servicio->descripcion }} | Valor a pagar: ${{ number_format($clienteServicio->monto, 2) }}
                        </li>
                    @endforeach
                </ul>
            @else
                <p class="mt-3">No hay servicios asociados a este cliente.</p>
            @endif
        </div>


        <!-- Lista de facturas -->
        <h3>Facturas</h3>
        @foreach($cliente->clienteServicios as $clienteServicio)
            @if($clienteServicio->facturas->isEmpty())
                <p>No hay facturas para el servicio: {{ $clienteServicio->servicio->nombre }}</p>
            @else
                <div class="card mb-3">
                    <div class="card-header">Servicio: {{ $clienteServicio->servicio->nombre_servicio }}</div>
                    <ul class="list-group list-group-flush">
                        @foreach($clienteServicio->facturas as $factura)
                            <li class="list-group-item">
                                <p>Fecha de emisión: {{ $factura->fecha_emision }}</p>
                                <p>Fecha de pago: {{ $factura->fecha_pago }}</p>
                            </li>
                        @endforeach
                    </ul>
                </div>
            @endif
        @endforeach

     
    
    
     


</div>
@endsection

