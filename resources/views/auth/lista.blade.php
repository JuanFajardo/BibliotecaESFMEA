@extends('master')
@section('titulo') Administracion de Usuarios @endsection
@section('menu6') style='background-color:white; color:balck; '   @endsection

@section('cuerpo')
<a   href="{{url('usuarios/create')}}"  class="nuevo btn btn-primary btn-icon-text btn-rounded"  accesskey="n"> <i class="ti-plus btn-icon-prepend"></i> Nuevo Usuario </a>
<br>
<br>
<div class="table-responsive" id="Buscar">
  <div class="panel-body">
    <table id="datosTabla" class="table datatable">
      <thead>
        <tr>
          <th>Nombres y Apellidos</th>
          <th>Usuario</th>
          <th>Correo</th>
          <th>Grupo</th>
          <th>Reg Estudiante</th>
          <th>Activo</th>
          <th>Editar</th>
        </tr>
      </thead>
      <tbody>
      @foreach($usuarios as $usuario)
        <tr>
          <td>{{$usuario->nombres}} {{$usuario->ap_paterno}}  {{$usuario->ap_materno}} </td>
          <td>{{$usuario->name}}</td>
          <td>{{$usuario->email}}</td>
          <td>{{$usuario->grupo}}</td>
          <td>{{$usuario->reg_estudiante}}</td>
          <td>{{$usuario->activo}}</td>
          <td><a href="{{ url('usuarios/'.$usuario->id.'/edit') }}" style="color:#f0ad4e;"> <i class="ti-pencil menu-icon"></i>Editar</a>  </a></td>
        </tr>
      @endforeach
    </tbody>
  </table>
</div>

<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Eliminar</h4>
      </div>
      <div class="modal-body">
        <p>¿Esta seguro que desea eliminar este usuario: <strong>
          @if(isset($usuario))
            {{$usuario->nombres}}
          @endif
        </strong>?
        </p>
      </div>
      <div class="modal-footer">
        @if(isset($usuario))
        <a type="button" class="btn btn-info" href="{{url('usuarios/'.$usuario->id)}}">Aceptar</a>
        @endif
        <a type="button" class="btn btn-warning" data-dismiss="modal">Cancelar</a>
      </div>
    </div>
  </div>
</div>
@endsection

@section('js')
<script type="text/javascript">
  $('#datosTabla').DataTable({
      "order": [[ 0, 'asc']],
      "language": {
          "bDeferRender": true,
          "sEmtpyTable": "No ay registros",
          "decimal": ",",
          "thousands": ".",
          "lengthMenu": "Mostrar _MENU_ datos por registros",
          "zeroRecords": "No se encontro nada,  lo siento",
          "info": "Mostrar paginas [_PAGE_] de [_PAGES_]",
          "infoEmpty": "No ay entradas permitidas",
          "search": "Buscar ",
          "infoFiltered": "(Busqueda de _MAX_ registros en total)",
          "oPaginate":{
              "sLast":"Final",
              "sFirst":"Principio",
              "sNext":"Siguiente",
              "sPrevious":"Anterior"
          }
      }
  });
</script>
@endsection
