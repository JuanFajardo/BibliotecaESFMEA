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
	<link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
	<link rel="stylesheet" href="{{asset('assets/lib/wow/animate.css')}}">
</head>
<body class="preloader">
	<header class="cabecera cabecera-desktop">
		<div class="container-fluid container-especial">
			<a href="{{asset('index.php')}}" class="link-logo">
				<img src="{{asset('assets/img/logo.jpeg')}}" class="logo" style="width:75px;">
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
						<img src="{{asset('assets/img/logo.jpeg')}}" class="logo-b">
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
		<section class="seccion seccion-1" id="inicio">
			<!--<img src="{{asset('assets/img/tantahuatay.jpg')}}" class="imagen-fondo">-->
			<div class="bloque-b">
				<img src="{{asset('assets/img/logo.jpeg')}}" class="imagen-b">
			</div>

			<div class="intro-paso-1">
        		<h1>ESCUELA SUPERIOR <br>
        			DE FORMACIÓN DE <br>
        			MAESTROS "EDUARDO AVAROA"
				</h1>
			</div>

			<div class="intro-paso-2">
				<h2>BIBLIOTECA VIRTUAL<br>"ESFMEA"</h2>
				<h3>Libros virtuales <br> Documentos de sistematisaciones</h3>
				<p><b>Lic.</b></p>
				<p>Responsable</p>
			</div>
		</section>

		<section class="seccion seccion-2"  id="bienvenida">
			<div class="container">
				<div class="row">
					<div class="col-12 text-center">
						<h2>BIENVENIDA</h2>
					</div>
				</div>
				<div class="row borde-verde">

					<div class="col-12 col-md-12 columna-rosada grupo1">
						<div class="bloque-columna-rosada">
							<p>Te damos la bienvenida al portal de la Biblioteca que provee, comparte y difunde, recursos bibliográficos propios de la Escuela Superior de Formación de Maestros "Eduardo Avaroa", pertenecientes a diversas especialidades.

								<br><br><b>¿Qué ofrecemos?</b><br>
								Se ofrece una amplia gama de recursos bibliográficos y electrónicos contenidos en: libros, manuales, revistas, libros electrónicos, además de una hemeroteca completa desde la gestión 2011, para apoyar en todo momento el proceso de aprendizaje de la comunidad estudiantil.
							</p>
						</div>
					</div>

					<div class="col-12 col-md-12 columna-rosada grupo1">
						<div class="bloque-columna-rosada">
							<p>
							“De los diversos instrumentos inventados por el hombre, el más asombroso es el libro; todos los demás son extensiones de su cuerpo… Sólo el libro es una extensión de la imaginación y la memoria”. Jorge Luis Borges
							</p>
						</div>
					</div>
					
				</div>
			</div>
		</section>

		<section class="seccion seccion-3"  id="misionvision">
			<div class="container container-especial">
				<div class="row">
					<div class="col-12 text-center">
						<h2>MISIÓN, VISIÓN</h2>
						<a href="assets/pdf/proyectos.pdf" target="_blank" class="pdf-mobile pdf2"><i class="fas fa-file-pdf"></i></a>
					</div>
				</div>
				<div class="row justify-content-center">
					<div class="col-12 col-md-6 col-lg-4 columna-proyecto ">
						<img src="assets/img/proyecto1.png" class="imagen-fondo-proyecto">
						<div class="fondo-verde">
							<div class="titulo-proyecto">
								<h4>MISIÓN</h4>
							</div>
							<div class="lista-items-proyecto">
								<h3>MISIÓN
									Somos una institución formadora de Maestros y Maestras que orienta los procesos formativos, con pertinencia académica a la realidad social, cultural y económica del estudiante en el modelo Socio comunitario Productivo que permite responder con idoneidad a las demandas de la región y el país.
								</h3>
							</div>
						</div>
					</div>
					<div class="col-12 col-md-6 col-lg-4 columna-proyecto ">
						<img src="assets/img/proyecto2.png" class="imagen-fondo-proyecto">
						<div class="fondo-verde">
							<div class="titulo-proyecto">
								<h4>VISIÓN</h4>
							</div>
							<div class="lista-items-proyecto">
								<h3> Ser una Escuela Superior de formación de Maestras y Maestros reconocida por su excelencia académica, en la pluralidad socio política económica y cultural, en el modelo sociocomunitario productivo, con principios y valores sociocomunitarios que transformen la sociedad y las potencialidades productivas de la región en el marco del vivir bien. 
								</h3>								
							</div>
						</div>
					</div>

					
				</div>
			</div>
		</section>
		<br><br>
		<section class="seccion seccion-4"  id="organigrama">
			<div class="adorno adorno-2">
				<img src="assets/img/recurso_sostenibilidad.png" class="img-adorno">
			</div>
			<div class="container">
				<div class="row">
					<div class="col-12 text-center">
						<h2>ORGANIGRAMA</h2>
						<img src="{{asset('assets/img/unnamed.png')}}" alt="">
						
					</div>
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
								626262
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
								operaciones
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
								Calle
							</span>
							<span class="derecha">
								<i class="fas fa-home"></i>
							</span>
						</a>
					</div>
				</div>
			</div>
			
		</section>

	</main>
	<div class="overlay"><div id="loader"></div></div>
	<script src="{{asset('assets/js/jquery.js')}}"></script>
	<script src="{{asset('assets/js/jquery-ui.js')}}"></script>
	<script src="{{asset('assets/js/popper.min.js')}}"></script>
	<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('assets/lib/wow/wow.js')}}"></script>
	<script src="{{asset('assets/js/funciones.js')}}"></script>
  @yield('js')
</body>
</html>
