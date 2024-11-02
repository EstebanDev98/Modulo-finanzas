@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Buscar Cliente</h2>
    
    <form action="{{ route('cliente.buscar.post') }}" method="POST" 
    class="form-inline">
    @csrf
        @if(session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif
        <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" id="nombre" class="form-control" required>
        </div>
        <div class="form-group mb-3">
            <label for="identificacion">Identificación</label>
            <input type="text" name="identificacion" id="identificacion" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Buscar</button>
    </form>
    
</div>
@endsection