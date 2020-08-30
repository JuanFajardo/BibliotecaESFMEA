@extends('master')
@section('titulo') Creacion de Usuarios @endsection
@section('menu6') style='background-color:white; color:balck; '   @endsection

@section('cuerpo')
<a   href="{{asset('/index.php/usuarios')}}"  class="nuevo btn btn-primary btn-icon-text btn-rounded"  accesskey="n"> <i class="ti-plus btn-icon-prepend"></i> I<u>n</u>inicio </a>
<br>
<br>
<form class="form-horizontal" method="POST" action="{{ route('usuarios') }}" autocomplete="false">
  {{ csrf_field() }}

  <div class="row">
    <div class="form-group{{ $errors->has('ci') ? ' has-error' : '' }} col-md-3 col-xl-3">
      <label for="ci" class="col-md-4 control-label">CI</label>
      <div class="">
        <input id="ci" type="text" class="form-control" name="ci" value="{{ old('ci') }}" required>
      </div>
    </div>
    <div class="form-group{{ $errors->has('nombres') ? ' has-error' : '' }} col-md-3 col-xl-3">
      <label for="nombres" class="col-md-4 control-label">Nombres</label>
      <div class="">
        <input id="" type="text" class="form-control" name="nombres" value="{{ old('nombres') }}" required>
      </div>
    </div>
    <div class="form-group{{ $errors->has('ap_paterno') ? ' has-error' : '' }} col-md-3 col-xl-3">
      <label for="ap_paterno" class="col-md-4 control-label">Paterno</label>
      <div class="">
        <input id="" type="text" class="form-control" name="ap_paterno" value="{{ old('ap_paterno') }}" >
      </div>
    </div>
    <div class="form-group{{ $errors->has('ap_materno') ? ' has-error' : '' }} col-md-3 col-xl-3">
      <label for="ap_materno" class="col-md-4 control-label">Materno</label>
      <div class="">
        <input id="ap_materno" type="text" class="form-control" name="ap_materno" value="{{ old('ap_materno') }}" >
      </div>
    </div>
  </div>

    <div class="row">
    <div class="form-group{{ $errors->has('ci') ? ' has-error' : '' }} col-md-3 col-xl-3">
      <label for="nivel" class="col-md-4 control-label">NIVEL</label>
      <div class="">
        <input id="" type="text" class="form-control" name="nivel" value="{{ old('nivel') }}" required list="lista_nivel">
      </div>
    </div>
    <datalist id="lista_nivel">
      <option value="1"><option value="2"><option value="3"><option value="4"><option value="5">
    </datalist>
    <div class="form-group{{ $errors->has('paralelo') ? ' has-error' : '' }} col-md-3 col-xl-3">
      <label for="paralelo" class="col-md-4 control-label">PARALELO</label>
      <div class="">
        <input id="" type="text" class="form-control" name="paralelo" value="{{ old('paralelo') }}" required  list="lista_paralelo">
      </div>
    </div>
    <datalist id="lista_paralelo">
      <option value="A"><option value="B"><option value="C"><option value="D">
    </datalist>
    <div class="form-group{{ $errors->has('reg_estudiante') ? ' has-error' : '' }} col-md-3 col-xl-3">
      <label for="reg_estudiante" class="col-md-12 control-label">Reg. Estudiante</label>
      <div class="">
        <input id="reg_estudiante" type="text" class="form-control" name="reg_estudiante" value="{{ old('reg_estudiante') }}" required>
      </div>
    </div>
    <div class="form-group{{ $errors->has('especialidad') ? ' has-error' : '' }} col-md-3 col-xl-3">
      <label for="especialidad" class="col-md-4 control-label">Especialidad</label>
      <div class="">
        <input id="" type="text" class="form-control" name="especialidad" value="{{ old('especialidad') }}" required list="lista_especialidad">
      </div>
    </div>
    <datalist id="lista_especialidad">
      <option value="CIENCIAS NATURALES MENCIÓN: BIOLOGIA-GEOGRAFÍA">
      <option value="COMUNICACIÓN Y LENGUAJES: LENGUA EXTRANJERA (INGLÉS)">
      <option value="EDUCACIÓN FÍSICA Y DEPORTES">
      <option value="EDUCACIÓN INICIAL EN FAMILIA COMUNITARIA">
      <option value="EDUCACIÓN MUSICAL">
      <option value="EDUCACIÓN PRIMARIA COMUNITARIA VOCACIONAL">
    </datalist>
  </div>

  <div class="row">
    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }} col-md-3 col-xl-3">
      <label for="name" class="col-md-4 control-label">Usuario </label>
      <div class="">
        <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required>
        @if ($errors->has('name'))
        <span class="help-block">
          <strong>{{ $errors->first('name') }}</strong>
        </span>
        @endif
      </div>
    </div>
    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }} col-md-3 col-xl-3">
      <label for="name" class="col-md-3 control-label">Correo </label>
      <div class="">
        <input id="email" type="email" class="form-control" name="email" value="{{ old('name') }}" >
        @if ($errors->has('email'))
        <span class="help-block">
          <strong>{{ $errors->first('email') }}</strong>
        </span>
        @endif
      </div>
    </div>
    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }} col-md-3 col-xl-3">
      <label for="password" class="col-md-4 control-label">Password</label>
      <input id="password" type="password" class="form-control" name="password" required>
      @if ($errors->has('password'))
      <span class="help-block">
        <strong>{{ $errors->first('password') }}</strong>
      </span>
      @endif
    </div>
    <div class="form-group  col-md-3 col-xl-3">
      <label for="password-confirm" class="col-md-4 control-label">Confirmar</label>
      <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
    </div>
  </div>

  <div class="row">
    <div class="form-group{{ $errors->has('grupo') ? ' has-error' : '' }}  col-md-12 col-xl-6">
      <label for="grupo" class="col-md-4 control-label">Grupo</label>
      <select name="grupo" id="grupo" class="form-control">
        <option value="Administrador">Administrador</option>
        <option value="Usuario">Estudiante</option>
      </select>
    </div>
    <div class="form-group{{ $errors->has('activo') ? ' has-error' : '' }}  col-md-12 col-xl-6">
      <label for="activo" class="col-md-4 control-label">Activo</label>
      <select name="activo" id="activo" class="form-control">
        <option value="1">Activo</option>
        <option value="0">Desactivo</option>
      </select>
    </div>
  </div>


  <div class="row">
    <div class="col-md-12 col-xl-6">
      <button type="submit" class="btn btn-primary btn-icon-text">
        <i class="ti-save menu-ico"></i> Registrar
      </button>
    </div>
  </div>
</form>
@endsection

@section('js')
<script type="text/javascript">

$('#name').focus(function(){
  var user = $('#ci').val();
  var pass = $('#reg_estudiante').val();

  $('#name').val(user);
  $('#password').val(pass);
  $('#password-confirm').val(pass);

});




</script>
@endsection
