
@extends('master')
@section('titulo') Administracion de Libros @endsection
@section('menu3') style='background-color:white; color:balck; '   @endsection
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
        <label for='tipo_' >TIPO</label>
        {!! Form::select('tipo', ['libro'=>'LIBRO', 'sistematisaciones'=>'SISTEMATIZACION'], null, ['class'=>'form-control', 'id'=>'tipo_', 'required']) !!}
     </div>
		 <div class="form-group">
			 <label for='foto_' >IMAGEN DE LA PORTADA</label>
			 {!! Form::file('foto', null, ['class'=>'form-control', 'id'=>'foto_']) !!}
		 </div>
		 <div class="form-group">
			 <label for='titulo_' >TITULO</label>
			 {!! Form::text('titulo', null, ['class'=>'form-control', 'id'=>'titulo_', 'required']) !!}
		 </div>
		 <div class="form-group">
			 <label for='autor_' >AUTOR</label>
			 {!! Form::text('autor', null, ['class'=>'form-control', 'id'=>'autor_', 'required']) !!}
		 </div>
		 <div class="form-group">
			 <label for='descripcion_' >DESCR. / DOC. ACOMPAÑANTE</label>
			 {!! Form::text('descripcion', null, ['class'=>'form-control', 'id'=>'descripcion_', 'required']) !!}
		 </div>
		 <div class="form-group">
			 <label for='archivo_' >ARCHIVO</label>
			 {!! Form::text('archivo', null, ['class'=>'form-control', 'id'=>'archivo_', 'required']) !!}
		 </div>
		 <div class="form-group">
			 <label for='id_categoria_' >CATEGORIA</label>
			 {!! Form::select('id_categoria', \App\Categoria::pluck('nombre_categoria', 'id'), null, ['class'=>'form-control', 'placeholder'=>'', 'id'=>'id_categoria_', 'required']) !!}
		 </div>
		 <div class="form-group">
			 <label for='id_subcategoria_' >SUBCATEGORIA</label>
			 {!! Form::select('id_subcategoria', [], null, ['class'=>'form-control', 'id'=>'id_subcategoria_', 'required']) !!}
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
      {!! Form::open(['route'=>['Libro.update', ':DATO_ID'], 'method'=>'PATCH', 'id'=>'form-update' ])!!}

     <div class="form-group">
 			 <label for="foto">IMAGEN DE LA PORTADA</label>
 			 {!! Form::select('tipo', ['libro'=>'LIBRO', 'sistematisaciones'=>'SISTEMATIZACION'], null, ['class'=>'form-control', 'id'=>'tipo']) !!}
 		 </div>
		 <div class="form-group">
			 <label for="foto">FOTO</label>
			 {!! Form::file('foto', null, ['class'=>'form-control', 'id'=>'foto']) !!}
		 </div>
		 <div class="form-group">
			 <label for="titulo" >TITULO</label>
			 {!! Form::text('titulo', null, ['class'=>'form-control', 'id'=>'titulo', 'required']) !!}
		 </div>
		 <div class="form-group">
			 <label for="autor" >AUTOR</label>
			 {!! Form::text('autor', null, ['class'=>'form-control', 'id'=>'autor', 'required']) !!}
		 </div>
		 <div class="form-group">
			 <label for="descripcion" >DESCR. / DOC. ACOMPAÑANTE</label>
			 {!! Form::text('descripcion', null, ['class'=>'form-control', 'id'=>'descripcion', 'required']) !!}
		 </div>
		 <div class="form-group">
			 <label for=" archivo " >ARCHIVO</label>
       {!! Form::text('archivo', null, ['class'=>'form-control', 'id'=>'archivo']) !!}
		 </div>
		 <div class="form-group">
			 <label for="id_categoria" >CATEGORIA</label>
       {!! Form::select('id_categoria', \App\Categoria::pluck('nombre_categoria', 'id'), null, ['class'=>'form-control', 'placeholder'=>'', 'id'=>'id_categoria', 'required']) !!}
		 </div>
		 <div class="form-group">
			 <label for="id_subcategoria">SUBCATEGORIA</label>
       {!! Form::select('id_subcategoria', \App\Subcategoria::pluck('nombre_subcategoria', 'id'), null, ['class'=>'form-control', 'id'=>'id_subcategoria', 'required']) !!}
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

			 <th> FOTO </th>
			 <th> TITULO </th>
			 <th> AUTOR </th>
			 <th> DESCR./ </th>
			 <th> ARCHIVO </th>
			 <th> TIPO </th>
			 <th> CATEGORIA </th>
			 <th> SUBCATEGORIA </th>

        <th>ACCIONES</th>
    </tr>
   </thead>
   <tbody>
   @foreach($datos as $dato)
     <tr data-id="{{ $dato->id }}">

			 <td> <img src="{{ asset('RughHXvNTFm9zzBett0zzPpFGaE2r7mjB9/'.$dato->foto)}}" width="50"> </td>
			 <td> {{ $dato->titulo }} </td>
			 <td> {{ $dato->autor }} </td>
			 <td> {{ $dato->descripcion }} </td>
			 <td> <a href="{{$dato->archivo}}"> Ver</a> </td>
			 <td> {{ $dato->tipo }} </td>
			 <td> {{ $dato->nombre_categoria }} </td>
			 <td> {{ $dato->nombre_subcategoria }} </td>

       <td>
         <a href="#modalModifiar"  data-toggle="modal" data-target="" class="actualizar" style="color: #B8823B;"> <li class="fa fa-edit"></li></a>
         <a href="#"  data-toggle="modal" data-target="" style="color: #ff0000;" class="eliminar"> <li class="fa fa-trash"></li></a>
       </td>
     </tr>
   @endforeach
   </tbody>
</table>
{!! Form::open(['route'=>['Libro.destroy', ':DATO_ID'], 'method'=>'DELETE', 'id'=>'form-delete']) !!}
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

  $('#id_categoria_').change(function(event){
    var id = $('#id_categoria_').val();
    link  = '{{ asset("index.php/Listar/Categoria/")}}/'+id;
    $("#id_subcategoria_").empty();
    $.getJSON(link, function(data, textStatus) {
      if(data.length > 0){
        $.each(data, function(index, el) {
            $("#id_subcategoria_").append("<option value='" + el.id + "'>" + el.nombre_subcategoria + "</option>");
        });
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
    link  = '{{ asset("/index.php/Libro/")}}/'+id;

    $.getJSON(link, function(data, textStatus) {
      if(data.length > 0){
        $.each(data, function(index, el) {

		 $('#foto').val(el.foto);
		 $('#titulo').val(el.titulo);
		 $('#autor').val(el.autor);
		 $('#descripcion').val(el.descripcion);
		 $('#archivo').val(el.archivo);
		 $('#tipo').val(el.tipo);
		 $('#id_categoria').val(el.id_categoria);
		 $('#id_subcategoria').val(el.id_subcategoria);

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

			 if(confirm('Esta seguro de eliminar el Libro')){
      $.post(url, data, function(result, textStatus, xhr) {
        alert(result);
        fila.fadeOut();
      }).fail(function(esp){
        fila.show();
      });
    }
  });
</script> @endsection
