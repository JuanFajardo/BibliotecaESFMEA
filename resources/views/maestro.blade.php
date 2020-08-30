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
      <a href="{{asset('index.php')}}" class="link-logo">
				<img src="{{asset('assets/img/favicon.jpeg')}}" class="logo" style="width:75px;">
			</a>
			<div class="botones">
				<h3>ESCUELA SUPERIOR DE FORMACIÓN DE MAESTROS "EDUARDO AVAROA" </h3>
				@include('login')
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
          <a href="{{asset('index.php')}}" class="link-logo">
            <img src="{{asset('assets/img/favicon.jpeg')}}" class="logo-b">
          </a>
        </div>
        <div class="col-6 columna-menu-mobile columna-mobile-contexto">
          <span class="numero-grande">2020</span>
          <span>ESCUELA SUPERIOR DE FORMACIÓN<br>
                DE MAESTROS "EDUARDO AVAROA"</span>
        </div>
        <div class="col-4 columna-menu-mobile columna-menu-botones">
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

	<!--<section class="seccion seccion-6"  id="sistemas">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<h2>@yield('titulo2')</h2>
    		        @yield('cuerpo2')
				</div>
			</div>
		</div>
	</section>-->

  <br><br><br>
  <section class="seccion seccion-3"  id="comentario">
    <div class="container">
      <div class="col-12 text-center">
        <h2>COMENTARIOS</h2>
        {!! Form::open(['route'=>['comentario'], 'method'=>'POST', 'id'=>'form-delete']) !!}

        {!! Form::text('remitente', null, ['class'=>'form-control', 'placeholder'=>'Remitente', 'required']) !!}
        {!! Form::email('correo', null, ['class'=>'form-control', 'placeholder'=>'Correo@Correo', 'required']) !!}
        {!! Form::text('asunto', null, ['class'=>'form-control', 'placeholder'=>'Asunto', 'required']) !!}
        {!! Form::textarea('mensaje', null, ['class'=>'form-control', 'required']) !!}
        {!! Form::submit('Enviar comentario', ['class'=>'btn btn-primary', 'placeholder'=>'Mensaje']) !!}
        {!! Form::close() !!}
      </div>
    </div>
  </section>

  <section class="seccion seccion-6"  id="contacto">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <h2>CONTACTO</h2>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-12 col-md-6 col-lg-5 wow fadeIn" data-wow-duration="1.5s">
          <a href="assets/pdf/analisis_y_discusion_de_gerencia.pdf" target="_blank"class="bloque-anexos">
            <span class="izquierda">
              Telefono<br>
              26246339
            </span>
            <span class="derecha">
              <i class="fas fa-phone"></i>
            </span>
          </a>
        </div>
        <div class="col-12 col-md-6 col-lg-5 wow fadeIn" data-wow-duration="1.5s">
          <a href="assets/pdf/resumen_de_operaciones.pdf" target="_blank" class="bloque-anexos">
            <span class="izquierda">
              Correo<br>
              bibliotecaesfmea.potosi@gmail.com
            </span>
            <span class="derecha">
              <i class="fas fa-envelope"></i>
            </span>
          </a>
        </div>
        <div class="col-12 col-md-6 col-lg-5 wow fadeIn" data-wow-duration="1.5s">
          <a href="assets/pdf/estructura_accionaria.pdf" target="_blank" class="bloque-anexos">
            <span class="izquierda">
              Direccion<br>
              Av. Circunvalación esquina 17 de Agosto
            </span>
            <span class="derecha">
              <i class="fas fa-home"></i>
            </span>
          </a>
        </div>
        <div class="col-12 col-md-6 col-lg-5 wow fadeIn" data-wow-duration="1.5s">
          <a href="assets/pdf/estructura_accionaria.pdf" target="_blank" class="bloque-anexos">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1191.8617754727386!2d-65.75157344055953!3d-19.57211989485776!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x93f94e0e805f9f67%3A0xa4d6487ee5f88004!2sNORMAL.%20EDUARDO%20AVAROA!5e1!3m2!1ses!2sbo!4v1598718366228!5m2!1ses!2sbo" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
          </a>
        </div>
      </div>
    </div>
  </section>

</main>

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
