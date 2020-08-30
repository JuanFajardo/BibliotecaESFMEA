@extends('master')
@section('titulo') Editar Usuario @endsection

@section('cuerpo')
<a href="{{url('usuarios')}}"  class="nuevo btn btn-primary btn-icon-text btn-rounded"  accesskey="n"> <i class="ti-plus btn-icon-prepend"></i> I<u>n</u>inicio </a>
<br>
  {!! Form::model($user, ['action'=>['UsuarioController@update', $user->id], 'method'=>'PATCH', 'id'=>'form-create', 'class'=>'form-horizontal', 'role'=>'form', 'autocomplete'=>'off'  ])!!}
  <h4>Datos de usuario</h4>
  <hr>
  {!! Form::hidden('id', null, ['id'=>'id', 'class'=>'form-control']) !!}

  <div class="row">
    <div class="form-group{{ $errors->has('ci') ? ' has-error' : '' }} col-md-3 col-xl-3">
      <label for="ci" class="col-md-4 control-label">CI</label>
      <div class="">
        {!! Form::text('ci',  old('ci'), ['id'=>'ci', 'class'=>'form-control', 'placeholder'=>'correo@correo.com']) !!}
      </div>
    </div>
  </div>

  <div class="row">
    <div class="form-group{{ $errors->has('grupo') ? ' has-error' : '' }}  col-md-12 col-xl-6">
      <label for="grupo" class="col-md-4 control-label">Grupo</label>
      {!! Form::select('grupo', ['Administrador'=>'Administrador', 'Estudiante'=>'Estudiante', 'Reporte'=>'Reporte'], old('grupo'), ['id'=>'grupo', 'class'=>'form-control']) !!}
    </div>
    <div class="form-group{{ $errors->has('activo') ? ' has-error' : '' }}  col-md-12 col-xl-6">
      <label for="activo" class="col-md-4 control-label">Activo</label>
      {!! Form::select('activo', ['1'=>'Activo', '0'=>'Desactivo'], old('activo'), ['id'=>'activo', 'class'=>'form-control']) !!}
    </div>
  </div>

  <div class="row">
    <div class="col-md-6 col-xl-6">
      <button type="submit" class="btn btn-warning btn-icon-text ">
        <i class="ti-pencil-alt menu-icon"></i> Actualizar
      </button>
    </div>
    <div class="col-md-6 col-xl-6">
      <a href="{{asset('/index.php/usuarios')}}" class="btn btn-primary btn-icon-text">
      <i class="ti-close menu-icon"></i> Cancelar</a>
    </div>
  </div>
{!! Form::close() !!}
@endsection


@section('js')
<script type="text/javascript">

</script>
@endsection
