<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
	<meta name="title" content="BIBLIOTECA VIRTUAL - ESFMEA">
	<meta name="description" content="BIBLIOTECA VIRTUAL - ESFMEA">
	<meta name="robots" content="index, follow">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
	<title>BIBLIOTECA VIRTUAL - ESFMEA</title>
	<link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{URL::asset('asset/DataTables/datatables.min.css') }}">
	<link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
	<link rel="stylesheet" href="{{asset('assets/lib/wow/animate.css')}}">
</head>
<body class="preloader">
	<header class="cabecera cabecera-desktop">
		<div class="container-fluid container-especial">
			<a href="index.html" class="link-logo">
				<img src="{{asset('assets/img/logo.svg')}}" class="logo">
			</a>
			<div class="botones">
				<h3>ESCUELA SUPERIOR DE FORMACIÓN DE MAESTROS "EDUARDO AVAROA" </h3>
				<a href="{{asset('/index.php/login')}}" target="_blank" class="link-cabecera">
					<span class="izquierda">
					       Ingresar
					</span>
					<span class="derecha">
						<i class="fas fa-user"></i>
					</span>
				</a>
			</div>
			<a href="#" class="burguer circulo">
				<i class="fas fa-bars"></i>
			</a>
		</div>
	</header>

	<header class="cabecera cabecera-mobile">
		<div class="container-fluid">
			<div class="row">
				<div class="col-2 columna-menu-mobile">
					<a href="index.html" class="link-logo">
						<img src="{{asset('assets/img/b.svg')}}" class="logo-b">
					</a>
				</div>
				<div class="col-6 columna-menu-mobile columna-mobile-contexto">
					<span class="numero-grande">2018</span>
					<span>Memoria<br>Anual</span>
				</div>
				<div class="col-4 columna-menu-mobile columna-menu-botones">
					<a href="assets/pdf/memoria_completa.pdf" target="_blank" class="link-pdf">
						<i class="fas fa-file-pdf"></i>
					</a>
					<a href="#" class="burguer circulo">
						<i class="fas fa-bars"></i>
					</a>
				</div>
			</div>
		</div>
	</header>

	@include('menuEstudiante')

	<main>
    <br><br><br>
    <section class="seccion seccion-4"  id="libros">
      <div class="container">
        <div class="col-12 text-center">
          <h2>@yield('titulo1')</h2>
            @yield('cuerpo1')
        </div>
      </div>
    </section>

	<section class="seccion seccion-6"  id="sistemas">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<h2>@yield('titulo2')</h2>
    		        @yield('cuerpo2')
				</div>
			</div>
		</div>
		<div class="adorno-mobile">
			<img src="{{asset('assets/img/adrono-mobile.png')}}" class="img-adorno-mobile">
		</div>
		<div class="adorno adorno-1">
			<img src="{{asset('assets/img/recurso_anexos.png')}}" class="img-adorno">
		</div>
	</section>

    <br><br><br>
    <section class="seccion seccion-3"  id="comentario">
      <div class="container">
        <div class="col-12 text-center">
          <h2>COMENTARIOS</h2>
            
        </div>
      </div>
    </section>
	</main>
	<div class="overlay"><div id="loader"></div></div>
  <br>
  <footer class="sticky-footer">
    <div class="container">
      <div class="text-center">
        <b>Copyright © ESCUELA SUPERIOR DE FORMACIÓN DE MAESTROS "EDUARDO AVAROA" (ESFMEA)</b>
      </div>
    </div>
  </footer>
	<script src="{{asset('assets/js/jquery.js')}}"></script>
	<script src="{{asset('assets/js/jquery-ui.js')}}"></script>
	<script src="{{ URL::asset('asset/DataTables/datatables.min.js') }}" type="text/javascript"></script>
	<script src="{{asset('assets/js/popper.min.js')}}"></script>
	<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('assets/lib/wow/wow.js')}}"></script>
	<script src="{{asset('assets/js/funciones.js')}}"></script>
  @yield('js')
</body>
</html>
