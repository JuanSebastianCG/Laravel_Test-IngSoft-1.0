@extends('hospital.master')
@section('content')
<form action="{{ route('rol.update', $Rol->id) }}" method="post">
    @method('PUT')
    @include('hospital.rol._form')
</form>
@endsection
