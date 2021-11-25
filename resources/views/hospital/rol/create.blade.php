@extends('hospital.master')
@section('content')
<form action="{{ route('rol.store') }}" method="post">
    @include('hospital.rol._form')
</form>
@endsection
