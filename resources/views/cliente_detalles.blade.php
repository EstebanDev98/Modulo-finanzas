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
</div>
@endsection

