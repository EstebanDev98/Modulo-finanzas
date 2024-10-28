@extends('layouts.app')


@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
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
    </div>

    @if($cliente->clienteServicios->isNotEmpty())
        <h4>Servicios Asociados:</h4>
        <ul class="list-group mt-3">
            @foreach($cliente->clienteServicios as $clienteServicio)
                <li class="list-group-item">
                    Servicio: {{ $clienteServicio->servicio->nombre_servicio}} | Monto: ${{ number_format($clienteServicio->monto, 2) }}
                </li>
            @endforeach
        </ul>
    @else
        <p class="mt-3">No hay servicios asociados a este cliente.</p>
    @endif

</div>
@endsection

