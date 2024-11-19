<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="nombre_servicio" class="form-label">{{ __('Nombre Servicio') }}</label>
            <input type="text" name="nombre_servicio" class="form-control @error('nombre_servicio') is-invalid @enderror" value="{{ old('nombre_servicio', $servicio?->nombre_servicio) }}" id="nombre_servicio" placeholder="Nombre Servicio">
            {!! $errors->first('nombre_servicio', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="descripcion" class="form-label">{{ __('Descripcion') }}</label>
            <input type="text" name="descripcion" class="form-control @error('descripcion') is-invalid @enderror" value="{{ old('descripcion', $servicio?->descripcion) }}" id="descripcion" placeholder="Descripcion">
            {!! $errors->first('descripcion', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Agregar') }}</button>
    </div>
</div>