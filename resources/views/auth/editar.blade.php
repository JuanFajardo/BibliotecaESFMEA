@extends('master')
@section('titulo') Editar Usuario @endsection
@section('menu6') style='background-color:white; color:balck; '   @endsection

@section('cuerpo')
<a href="{{url('usuarios')}}"  class="nuevo btn btn-primary btn-icon-text btn-rounded"  accesskey="n"> <i class="ti-plus btn-icon-prepend"></i> I<u>n</u>inicio </a>
<br>
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
                      <div class="form-group{{ $errors->has('nombres') ? ' has-error' : '' }} col-md-3 col-xl-3">
                        <label for="nombres" class="col-md-4 control-label">Nombres</label>
                        <div class="">
                          {!! Form::text('nombres',  old('nombres'), ['id'=>'nombres', 'class'=>'form-control']) !!}
                        </div>
                      </div>
                      <div class="form-group{{ $errors->has('ap_paterno') ? ' has-error' : '' }} col-md-3 col-xl-3">
                        <label for="ap_paterno" class="col-md-4 control-label">Paterno</label>
                        <div class="">
                          {!! Form::text('ap_paterno',  old('ap_paterno'), ['id'=>'ap_paterno', 'class'=>'form-control']) !!}
                        </div>
                      </div>
                      <div class="form-group{{ $errors->has('ap_materno') ? ' has-error' : '' }} col-md-3 col-xl-3">
                        <label for="ap_materno" class="col-md-4 control-label">Materno</label>
                        <div class="">
                          {!! Form::text('ap_materno',  old('ap_materno'), ['id'=>'ap_materno', 'class'=>'form-control']) !!}
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }} col-md-3 col-xl-3">
                        <label for="name" class="col-md-4 control-label">Usuario </label>
                        <div class="">
                          {!! Form::text('name',  old('name'), ['id'=>'name', 'class'=>'form-control']) !!}
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
                          {!! Form::email('email',  old('email'), ['id'=>'email', 'class'=>'form-control']) !!}
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
                      <div class="form-group{{ $errors->has('ci') ? ' has-error' : '' }} col-md-3 col-xl-3">
                        <label for="nivel" class="col-md-4 control-label">NIVEL</label>
                        <div class="">
                          {!! Form::text('nivel',  old('nivel'), ['id'=>'nivel', 'class'=>'form-control', 'list'=>'lista_nivel']) !!}
                        </div>
                      </div>
                      <datalist id="lista_nivel">
                        <option value="1"><option value="2"><option value="3"><option value="4"><option value="5">
                      </datalist>
                      <div class="form-group{{ $errors->has('paralelo') ? ' has-error' : '' }} col-md-3 col-xl-3">
                        <label for="paralelo" class="col-md-4 control-label">PARALELO</label>
                        <div class="">
                          {!! Form::text('paralelo',  old('paralelo'), ['id'=>'paralelo', 'class'=>'form-control', 'list'=>'lista_paralelo']) !!}
                        </div>
                      </div>
                      <datalist id="lista_paralelo">
                        <option value="A"><option value="B"><option value="C"><option value="D">
                      </datalist>
                      <div class="form-group{{ $errors->has('reg_estudiante') ? ' has-error' : '' }} col-md-3 col-xl-3">
                        <label for="reg_estudiante" class="col-md-12 control-label">Reg. Estudiante</label>
                        <div class="">
                          {!! Form::text('reg_estudiante',  old('reg_estudiante'), ['id'=>'reg_estudiante', 'class'=>'form-control', 'list'=>'lista_paralelo']) !!}
                        </div>
                      </div>
                      <div class="form-group{{ $errors->has('especialidad') ? ' has-error' : '' }} col-md-3 col-xl-3">
                        <label for="especialidad" class="col-md-4 control-label">Especialidad</label>
                        <div class="">
                          {!! Form::text('reg_estudiante',  old('reg_estudiante'), ['id'=>'reg_estudiante', 'class'=>'form-control', 'list'=>'lista_paralelo']) !!}
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
