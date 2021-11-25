
@extends('hospital.master')
@section('content')
    {{-- Tipo de documento --}}
    <div class="form-group">



        <div class="row center">
            <div class="col  mb-3">
                <label class="form-label" for="id">Id</label>
                <input readonly type="number" class="form-control" name="id" id="id" 
                placeholder="Ingrese id" value="{{ old('id', $Rol->id) }}">
            </div>
        </div>
        <div class="row center">
            <div class="col  mb-3">
                <label class="form-label" for="name">Nombre del rol</label>
                <input readonly type="name" class="form-control" name="nombre" id="nombre" 
                value="{{ old('nombre', $Rol->nombre) }}">
            </div>
        </div>


        {{-- Tipo de documento --}}
    
    
    </div>
    <div class="mb-3">
        <div class="form-group">
            <a href="{{ URL::previous() }}" class="btn btn-outline-danger btn-sm">Regresar</a>
             {{--<button type="button" class="btn btn-outline-success btn-sm">Registrar</button>--}}
        </div>
    </div>
@endsection
