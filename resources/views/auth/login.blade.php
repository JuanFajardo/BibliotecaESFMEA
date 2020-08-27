
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>@yield('title')</title>
  <link rel="stylesheet" href="{{ URL::asset('asset/bootstrap/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ URL::asset('asset/DataTables/datatables.min.css') }}">
  <link rel="stylesheet" href="{{ URL::asset('asset/fontawesome/web-fonts-with-css/css/fontawesome-all.min.css') }}">
  <link rel="stylesheet" href="{{ URL::asset('asset/fontawesome/web-fonts-with-css/css/fontawesome.min.css') }}">
  <link rel="stylesheet" href="{{ URL::asset('asset/theme/css/sb-admin.css') }}">
</head>
<body>
  <div class="container-scroller">
   <div class="container-fluid page-body-wrapper full-page-wrapper">
     <div class="content-wrapper d-flex align-items-center auth px-0">
       <div class="row w-100 mx-0">
         <div class="col-lg-4 mx-auto">
           <div class="auth-form-light text-left py-5 px-4 px-sm-5">
             <div class="brand-logo">

             </div>
             <h4>ESCUELA SUPERIOR DE FORMACIÓN DE MAESTROS "EDUARDO AVAROA"</h4>

              <form class="form-horizontal" method="POST" action="{{ route('login') }}">
               {{ csrf_field() }}

               <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                    <input id="name" type="text" class="form-control  form-control-lg" name="name" value="{{ old('name') }}"  placeholder="Usuario" required autofocus>
               </div>

               <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                 <input id="password" type="password" class="form-control form-control-lg" name="password" required placeholder="Contraseña">
                 @if ($errors->has('password'))
                  <span class="help-block">
                    <strong>{{ $errors->first('password') }}</strong>
                  </span>
                @endif
               </div>

               <div class="mt-3">
                 <button type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn btn-icon-text">
                   <i class="ti-user menu-icon"></i> Ingresar
                 </button>
                 <a href="{{asset('/index.php')}}" class="btn btn-block btn-danger btn-lg "> CERRAR</a>
               </div>

             </form>
           </div>
         </div>
       </div>
     </div>
     <!-- content-wrapper ends -->
   </div>
   <!-- page-body-wrapper ends -->
 </div>
 <script src="{{ URL::asset('asset/DataTables/jQuery-3.2.1/jquery-3.2.1.min.js') }}" type="text/javascript"></script>
 <script src="{{ URL::asset('asset/bootstrap/js/bootstrap.min.js') }}" type="text/javascript"></script>
 <script src="{{ URL::asset('asset/DataTables/datatables.min.js') }}" type="text/javascript"></script>
 <script src="{{ URL::asset('asset/jquery-easing/jquery.easing.min.js') }}" type="text/javascript"></script>
 <script src="{{ URL::asset('asset/theme/js/sb-admin.min.js') }}" type="text/javascript"></script>
</body>
</html>
