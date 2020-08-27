<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>BIBLIOTECA VIRTUAL - ESFMEA</title>

  <link rel="stylesheet" href="{{ URL::asset('asset/bootstrap/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ URL::asset('asset/DataTables/datatables.min.css') }}">
  <link rel="stylesheet" href="{{ URL::asset('asset/fontawesome/web-fonts-with-css/css/fontawesome-all.min.css') }}">
  <link rel="stylesheet" href="{{ URL::asset('asset/fontawesome/web-fonts-with-css/css/fontawesome.min.css') }}">
  <link rel="stylesheet" href="{{ URL::asset('asset/theme/css/sb-admin.css') }}">
  <link rel="shortcut icon" href="{{ URL::asset('favicon.ico') }}"/>
</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <a class="navbar-brand" href="{{asset('/index.php')}}"> ESFMEA </a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      @include('menu')
      <ul class="navbar-nav sidenav-toggler">
        <li class="nav-item">
          <a class="nav-link text-center" id="sidenavToggler">
            <i class="fa fa-fw fa-angle-left"></i>
          </a>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto">

        <li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
        <li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
        <li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
        <li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="modal" data-target="#exampleModal">
            <i class="fa fa-fw fa-sign-out"></i>Cerrar Session</a>
        </li>
        <li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
        <li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
      </ul>
    </div>
  </nav>
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <div class="row">
        <div class="col-md-11">

        </div>
        <div class="col-md-1">
          <a href="#modalAgregar"   data-toggle="modal" data-target="" class="btn btn-primary"> <li class="fa fa-plus"></li> </a>
        </div>
      </div>

        <div class="col-xl-12 col-sm-12">
          <div class="panel text-black ">
            <div class="panel-body">
              @yield('cuerpo')
            </div>
          </div>
        </div>
      </div>

    <!-- /.content-wrapper-->
    <footer class="sticky-footer">
      <div class="container">
        <div class="text-center">
          <small>Copyright © ESCUELA SUPERIOR DE FORMACIÓN DE MAESTROS "EDUARDO AVAROA" (ESFMEA)</small>
        </div>
      </div>
    </footer>


    <!-- Logout Modal-->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">¿ Cerrar Session?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body"> Para <b>Cerrar Session</b> de click en CERRAR <br>
            caso contrario CANCELAR   </div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
            {!! Form::open(['route'=>['logout'], 'method'=>'POST', 'id'=>'form-delete']) !!}
            {!! Form::submit('Cerrar', ['class'=>'btn btn-primary']) !!}
            {!! Form::close() !!}
          </div>
        </div>
      </div>
    </div>

    @yield('modal1')
    @yield('modal2')
    @yield('modal3')
    @yield('modal4')

    <script src="{{ URL::asset('asset/DataTables/jQuery-3.2.1/jquery-3.2.1.min.js') }}" type="text/javascript"></script>
    <script src="{{ URL::asset('asset/bootstrap/js/bootstrap.min.js') }}" type="text/javascript"></script>
    <script src="{{ URL::asset('asset/DataTables/datatables.min.js') }}" type="text/javascript"></script>
    <script src="{{ URL::asset('asset/jquery-easing/jquery.easing.min.js') }}" type="text/javascript"></script>
    <script src="{{ URL::asset('asset/theme/js/sb-admin.min.js') }}" type="text/javascript"></script>
  </div>
  @yield('js')
</body>

</html>
