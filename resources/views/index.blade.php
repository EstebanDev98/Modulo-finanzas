@extends('layouts.plantilla')

@section('contenido')
  <h1>Bienvenido Usuario</h1>
  <a href="{{route('vista.servicios')}}" class="btn btn-primary" style="margin-left:45%; margin-top:40px;">consultar servicios</a>
      
@endsection
