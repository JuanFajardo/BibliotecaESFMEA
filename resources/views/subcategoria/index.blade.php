
@extends('master')
@section('titulo') Administracion de SubCategorias @endsection
@section('menu2') style='background-color:white; color:balck; '   @endsection
@section('modal1')
<div id="modalAgregar" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content panel panel-primary">
      <div class="modal-header panel-heading">
        <b>Insertar</b>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body panel-body">
        {!! Form::open(['accept-charset'=>'UTF-8', 'enctype'=>'multipart/form-data', 'method'=>'POST', 'files'=>true, 'autocomplete'=>'off', 'id'=>'form-insert'] ) !!}

		 <div class="form-group">
			 <label for='nombre_subcategoria_' >NOMBRE_SUBCATEGORIA</label>
			 {!! Form::text('nombre_subcategoria', null, ['class'=>'form-control', 'id'=>'nombre_subcategoria_', 'required']) !!}
		 </div>
		 <div class="form-group">
			 <label for='id_categoria_' >ID_CATEGORIA</label>
			 {!! Form::select('id_categoria', \App\Categoria::pluck('nombre_categoria','id'), null, ['class'=>'form-control', 'id'=>'id_categoria_', 'required']) !!}
		 </div>

        {!! Form::submit('A&ntilde;adir', ['class'=>'agregar btn btn-primary']) !!}
        {!! Form::close() !!}
      </div>

    </div>
  </div>
</div>
@endsection

@section('modal2')
<div id="modalModifiar" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content panel panel-warning">
      <div class="modal-header panel-heading">
        <b>Actualizar</b>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body panel-body">
      {!! Form::open(['route'=>['Subcatergoria.update', ':DATO_ID'], 'method'=>'PATCH', 'id'=>'form-update' ])!!}

		 <div class="form-group">
			 <label for=" nombre_subcategoria " >NOMBRE_SUBCATEGORIA</label>
			 {!! Form::text('nombre_subcategoria', null, ['class'=>'form-control', 'id'=>'nombre_subcategoria', 'required']) !!}
		 </div>
		 <div class="form-group">
			 <label for=" id_categoria " >ID_CATEGORIA</label>
			 {!! Form::select('id_categoria', \App\Categoria::pluck('nombre_categoria','id'), null, ['class'=>'form-control', 'id'=>'id_categoria', 'required']) !!}
		 </div>

      {!! Form::submit('Actualizar ', ['class'=>'btn btn-warning']) !!}
      {!! Form::close() !!}
      </div>
    </div>
  </div>
</div>
@endsection


@section('cuerpo')
<table id="tablaAgenda" class="table display" cellspacing="0" width="100%">
  <thead>
    <tr>

			 <th> NOMBRE_SUBCATEGORIA </th>
			 <th> ID_CATEGORIA </th>

        <th>ACCIONES</th>
    </tr>
   </thead>
   <tbody>
   @foreach($datos as $dato)
     <tr data-id="{{ $dato->id }}">

			 <td> {{ $dato->nombre_subcategoria }} </td>
			 <td> {{ $dato->nombre_categoria }} </td>

       <td>
         <a href="#modalAgregar"  data-toggle="modal" data-target="" class="ingredientes" style="color: #109813;"> <li class="fa fa-folder-open"></li></a>
         <a href="#modalModifiar"  data-toggle="modal" data-target="" class="actualizar" style="color: #B8823B;"> <li class="fa fa-edit"></li></a>
         <a href="#"  data-toggle="modal" data-target="" style="color: #ff0000;" class="eliminar"> <li class="fa fa-trash"></li></a>
       </td>
     </tr>
   @endforeach
   </tbody>
</table>
{!! Form::open(['route'=>['Subcatergoria.destroy', ':DATO_ID'], 'method'=>'DELETE', 'id'=>'form-delete']) !!}
{!! Form::close() !!}
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

  $('.actualizar').click(function(event){
    event.preventDefault();
    var fila = $(this).parents('tr');
    var id = fila.data('id');
    var form = $('#form-update')
    var url = form.attr('action').replace(':DATO_ID', id);
    form.get(0).setAttribute('action', url);
    link  = '{{ asset("/index.php/Subcatergoria/")}}/'+id;

    $.getJSON(link, function(data, textStatus) {
      if(data.length > 0){
        $.each(data, function(index, el) {
		        $('#nombre_subcategoria').val(el.nombre_subcategoria);
		        $('#id_categoria').val(el.id_categoria);
        });
      }
    });
  });
  $('.eliminar').click(function(event) {
    event.preventDefault();
    var fila = $(this).parents('tr');
    var id = fila.data('id');
    var form = $('#form-delete');
    var url = form.attr('action').replace(':DATO_ID',id);
    var data = form.serialize();

			 if(confirm('Esta seguro de eliminar el Sub Catergoria')){
      $.post(url, data, function(result, textStatus, xhr) {
        alert(result);
        fila.fadeOut();
      }).fail(function(esp){
        fila.show();
      });
    }
  });
</script> @endsection
