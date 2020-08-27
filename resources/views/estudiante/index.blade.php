@extends('maestro')
@section('titulo')
@endsection

@section('titulo1')
LIBROS
@endsection

@section('cuerpo1')
<!-- Libros -->
<table id="tablaAgenda" class="table display" cellspacing="0" width="100%">
  <thead>
    <tr>
      <th>Imagen</th>
      <th>Titulo</th>
      <th>Autor</th>
      <th>Acceder</th>
    </tr>
  </thead>
<tbody>
@foreach($libros as $libro)
  <tr>
    <td><img src="{{$libro->foto}}" width="75"> </td>
    <td>{{$libro->titulo}}</td>
    <td>{{$libro->autor}}</td>
    <td> <a href="{{asset('/index.php/Estudiante/Ver/'.$libro->id)}}">Ver</a> </td>
  </tr>
@endforeach
</tbody>
  <tfoot>
    <tr>
      <th>Imagen</th>
      <th>Titulo</th>
      <th>Autor</th>
      <th>Acceder</th>
    </tr>
  </tfoot>
</table>
@endsection

@section('titulo2')
SISTEMATICACIONES
@endsection

@section('cuerpo2')
<!-- SISTEMATICACIONES -->
<table class="table">
  <thead>
    <tr>
      <th>Imagen</th>
      <th>Titulo</th>
      <th>Autor</th>
      <th>Acceder</th>
    </tr>
  </thead>
<tbody>
@foreach($sistemas as $libro)
  <tr>
    <td><img src="{{$libro->foto}}" width="75"> </td>
    <td>{{$libro->titulo}}</td>
    <td>{{$libro->autor}}</td>
    <td> <a href="{{asset('/index.php/Estudiante/Ver/'.$libro->id)}}">Ver</a> </td>
  </tr>
@endforeach
</tbody>
<tfoot>
  <tr>
    <th>Imagen</th>
    <th>Titulo</th>
    <th>Autor</th>
    <th>Acceder</th>
  </tr>
</tfoot>
</table>
@endsection

@section('js')
<script type="text/javascript">
  $(document).ready(function(){
    $('#tablaAgenda').DataTable({
      "order": [[ 0, 'desc']],
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
  });
</script>
@endsection
