@extends('hospital.master')
@section('content')

<table class="table table-striped table-over mb-3">
    <thead class="thead-dark">
      <tr>
        <th scope="col">Id</th>
        <th scope="col">Nombre</th>
        <th scope="col">Opciones</th>

      </tr>
    </thead>
    <tbody>
      @foreach ($Rols as $Rol)
        <tr>
          <th scope="row">{{ $Rol -> id }}</th>
          <td>{{ $Rol -> nombre }}</td>
          <td>
            <a href="{{ route('rol.show', $Rol->id) }}" class="btn btn-info">Ver</a>
            <a href="{{ route('rol.edit', $Rol->id) }}" class="btn btn-info">Editar</a>
            <button class="btn btn-danger" data-toggle="modal" data-target="#exampleModal" data-id="{{ $Rol->id }}">Eliminar</button>
          </td>
        </tr>
      @endforeach
      
    </tbody>
  </table>

  <!--
  <div class="mb-3">
    <a href="{{ URL::previous() }}" class="btn btn-info"></a>
  </div>
    -->

  @endsection
  {{ $Rols->links() }}

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h6 class="modal-title" id="exampleModalLabel"></h6>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <label class="text-muted">Â¿Seguro que deseas eliminar el rol seleccionado?</label>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
            <form method="POST" id="formDelete" action="{{ route('rol.destroy', 0) }}" data-action="{{ route('rol.destroy', 0) }}">
              @method('DELETE')
              @csrf
              <button type="submit" class="btn btn-danger btn-sm">Confirmar</button>
            </form>
            
          </div>
        </div>
    </div>
</div>
<script>
  window.onload = function(){
    $('#exampleModal').on('show.bs.modal', function (event){
      var button =$(event.relatedTarget)
      var id = button.data('id')
      action = $('#formDelete').attr('data-action').slice(0, -1)
      action += id
      $('#formDelete').attr('action',action)
      var modal = $(this)
      modal.find('.modal-title').text('Vas a eliminar el ROL con el ID '+id)
    })
  }
</script>