@extends('layouts.plantilla')
      

  <!-- inicio seccion libre inversion -->
      @section('contenido')
      <section class="secc-libinversion">
        <h3 style="text-align: center;">Nuestros Servicios</h3>
        <div class="contenedor_tarjetas">
          @foreach ($service as $servicio)
          <div class="card">
            <div class="card-header">
              <p style="text-align: center;">{{$servicio->nombre ?? ''}} </p>
            </div>
            <div class="card-body">
                <p> Tipo: {{$servicio->tipo ?? ''}}</p>
                <p class="precio">Tarifa base: $ {{$servicio->tarifa_base ?? ''}}</p>
            </div>
          </div>
          @endforeach
          
        </div>
        <a href="#" id="abrirModal" class="btn btn-primary">solicitar</a>
         
      </section>

      <div class="modal" id="miModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Diligencia-Form</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <!-- Formulario del modal -->
              <form action="{{route('servicio.store')}}" method="post">
                @csrf

                <div class="">
                  <label for="labelCedula">Servicio</label>
                  <select class="form-control"  name="selectservicio" id="">
                    <option>--</option>
                    @foreach ($service as $servicio )
                    <option>{{$servicio->servicio_id}}</option>
                    @endforeach
                  </select>
                </div>
                <div class="">
                  <label for="labelCedula">Cedula</label>
                  <input type="text" class="form-control" id="labelCedula" aria-describedby="" name="cedula">
                  @error('cedula')
                    
                  @enderror 
                </div>
                <!--<div class="">
                  <label for="labelMonto">Ingrese el monto</label>
                  <input type="text" class="form-control" id="labelMonto" aria-describedby="" placeholder="$" name="monto" > 
                </div>
                <div>
                  <label for="labelPlazo">Plazo</label>
                  <input type="text" class="form-control" id="labelPlazo" aria-describedby="" placeholder="48 meses" name="plazo" >
                </div>-->
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                  <button type="submit" class="btn btn-primary">Siguiente</button>
                </div>
              </form>
              <!-- Fin del formulario modal -->
                  
            </div>
            
            </div>
          </div>
        </div>
      </div>
      <!-- Fin del codigo modal -->


      <!-- Script para activar el modal -->
      <script>
         document.addEventListener('DOMContentLoaded', function() {
        // Seleccionamos el enlace y el modal
          const abrirModal = document.getElementById('abrirModal');
          const miModal = new bootstrap.Modal(document.getElementById('miModal'));

        // Escuchar el evento de clic en el enlace
          abrirModal.addEventListener('click', function(event) {
            event.preventDefault(); // Prevenir el comportamiento predeterminado del enlace
            miModal.show(); // Mostrar el modal
          });
        });
      </script>
      <!-- Fin del script para activar el modal -->

      @endsection
      
      
    
     
