@csrf
@include('hospital.partials.validation-error')
<div class="form-group">
    <div class="row center">
        {{-- id --}}
        <div class="col  mb-3">
            <input class="form-control" type="text" name="id" id="id" 
            placeholder="id " value="{{ old('id',$Rol->id) }}">
        </div>
    </div>
    <div class="row center">
        {{-- nombre --}}
        <div class="col  mb-3">
            <input class="form-control" type="text" name="nombre" id="nombre" 
            placeholder="Nombre " value="{{ old('nombre',$Rol->nombre) }}">
        </div>
    </div>
 
</div>
<div class="mb-3">
    <div class="form-group">
        <a href="{{ URL::previous() }}" class="btn btn-outline-danger btn-sm" >Cancelar</a>
        <button type="submit" class="btn btn-outline-success btn-sm">Registrar</button>
    </div>
</div>
