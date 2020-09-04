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
		<section class="seccion seccion-1" id="inicio">
			<!--<img src="{{asset('assets/img/tantahuatay.jpg')}}" class="imagen-fondo">-->
			<div class="bloque-b">
				<img src="{{asset('assets/img/favicon.jpeg')}}" class="logo-b">
			</div>

			<div class="intro-paso-1">
        <h1>ESCUELA SUPERIOR <br>
        			DE FORMACIÓN DE <br>
        			MAESTROS "EDUARDO AVAROA"
				</h1>
			</div>

			<div class="intro-paso-2">
				<h2>BIBLIOTECA DIGITAL Y VIRTUAL <br>ESFM-EA</h2>
        <h3>
          <ul>
            <li>SISTEMATIZACIONES DE EXPERIENCIAS EDUCATIVAS</li>
            <li>LIBROS VIRTUALES</li>
          </ul>
        </h3>
				<p><b>UNIDAD DE BIBLIOTECA</b></p>
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
							<p>Bienvedid@ al portal de la Biblioteca Digital y Virtual de la <b>Escuela Superior de Formación de Maestros "Eduardo Avaroa".</b>
                Este portal se encuentra destinado a contribuir en el proceso de formación del futuro maestr@, mediante la consulta a la colección bibliográfica virtual disponible, así como de las sistematizaciones de experiencias educativas, generadas en gestiones anteriores.

							</p>
						</div>
					</div>

					<div class="col-12 col-md-12 columna-rosada grupo1">
						<div class="bloque-columna-rosada">
							<p>
                <h3>¿Qué ofrecemos?</h3><br>
                <p>
                Aquí podrá encontrar el detalle de la bibliografía, relacionada al contenido curricular de las asignaturas que se cursan en la ESFM-EA, a lo largo del proceso de formación del futuro maestr@, como:<br><br>
                </p>
                <ul>
                  <li><p> Libros de formación general para 1° y 2° año. </p></li>
                  <li><p> Libros de especialidad</p></li>
                  <li><p> Sistematizaciones de Experiencias educativas, las cuales pueden ser consultadas en línea, respetando el reglamento de biblioteca de la ESFM-EA, Capitulo 4, Articulo 12, inciso c.</p></li>
                </ul>
							</p>
						</div>
					</div>

          <div class="col-12 col-md-12 columna-rosada grupo1">
						<div class="bloque-columna-rosada">
							<p>
                <h3>Enlaces a otras bibliotecas virtuales</h3><br>

                <h4>INTERNACIONALES</h4>
                <ul>
                  <li><h4><a href='http://scielo.org/php/index.php'>Scielo internacional </a></h4></li>
                  <li><h4><a href='http://www.redalyc.org/home.oa'>Redalyc</a></h4></li>
                  <li><h4><a href='https://alicia.concytec.gob.pe/vufind/'>Repositorio Peruano Alicia </a></h4></li>
                  <li><h4><a href='https://scholar.google.com/ '>Google Escolar</a></h4></li>
                  <li><h4><a href='https://academic.microsoft.com/ '>Biblioteca virtual de Microsft</a></h4></li>
                  <li><h4><a href='http://lareferencia.info/vufind/ '>Red de Respositorios La Referecia </a></h4></li>
                  <li><h4><a href='https://www.redib.org/recursos/'>Red Iberoamericana de Innovación y Conocimiento Científico</a></h4></li>
                  <li><h4><a href='https://eric.ed.gov/'>Instituto de Educación y ciencias</a></h4></li>
                  <li><h4><a href='https://doaj.org/'>Directorio de Revistas de Acceso Abierto</a></h4></li>
                  <li><h4><a href='http://www.latindex.ppl.unam.mx/'>Portal de Portales Latindex</a></h4></li>
                  <li><h4><a href='https://zbmath.org/'>Zentralblatt MATH</a></h4></li>
                  <li><h4><a href='http://repec.org/'>Re search Papers in Economics</a></h4></li>
                  <li><h4><a href='https://www.ncbi.nlm.nih.gov/pubmed/'>Recursos de la Biblioteca Nacional de los EEUU</a></h4></li>
                  <li><h4><a href='https://www.educacion.gob.es/teseo/irGestionarConsulta.do'>Tesis Doctorales (TESEO)</a></h4></li>
                  <li><h4><a href='https://www.tesisenred.net/'>Tesis Doctorales en Linea (TDX)</a></h4></li>
                </ul>

                <h4>NACIONALES</h4>
                <ul>
                  <li><h4><a href='http://www.scielo.org.bo'>Scielo Bolivia </a></h4></li>
                  <li><h4><a href='http://www.revistasbolivianas.org.bo'>Revistas Bolivianas</a></h4></li>
                  <li><h4><a href='http://ojs.bolivia.bo/'>OJS Bolivia</a></h4></li>
                </ul>

                <h4>PEDAGOGICOS</h4>
                <ul>
                  <li><h4><a href='http://biblioteca.minedu.gob.bo/'>Ministerio de Educacion Bolivia</a></h4></li>
                  <li><h4><a href='https://es-la.facebook.com/ProfesoresDeBolivia/posts/_-biblioteca-pedagogica-virtualaudios-del-campo-comunidad-y-sociedad-para-el-exa/1690611141058496/'>profesores Bolivia</a></h4></li>
                  <li><h4><a href='https://www.compartirpalabramaestra.org/articulos-informativos/una-biblioteca-virtual-con-132-libros-didacticos-para-docentes'>Libros didacticos para docentes</a></h4></li>
                  <li><h4><a href='https://www.educaciontrespuntocero.com/libros/'>Educacion 3.0</a></h4></li>
                </ul>
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
								<h3>Somos una institución formadora de Maestros y Maestras que orienta los procesos formativos, con pertinencia académica a la realidad social, cultural y económica del estudiante en el modelo Socio comunitario Productivo que permite responder con idoneidad a las demandas de la región y el país.
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
							<span class="izquierda">
								Telefono<br>
								26246339
							</span>
							<span class="derecha">
								<i class="fas fa-phone"></i>
							</span>
					</div>
					<div class="col-12 col-md-6 col-lg-5 wow fadeIn" data-wow-duration="1.5s">
							<span class="izquierda">
								Correo<br>
								bibliotecaesfmea.potosi@gmail.com
							</span>
							<span class="derecha">
								<i class="fas fa-envelope"></i>
							</span>
					</div>
					<div class="col-12 col-md-6 col-lg-5 wow fadeIn" data-wow-duration="1.5s">
							<span class="izquierda">
								Direccion<br>
								Av. Circunvalación esquina 17 de Agosto
							</span>
							<span class="derecha">
								<i class="fas fa-home"></i>
							</span>
					</div>
          <div class="col-12 col-md-6 col-lg-5 wow fadeIn" data-wow-duration="1.5s">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1191.8617754727386!2d-65.75157344055953!3d-19.57211989485776!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x93f94e0e805f9f67%3A0xa4d6487ee5f88004!2sNORMAL.%20EDUARDO%20AVAROA!5e1!3m2!1ses!2sbo!4v1598718366228!5m2!1ses!2sbo" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
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
	<script src="{{asset('assets/js/jquery.js')}}"></script>
	<script src="{{asset('assets/js/jquery-ui.js')}}"></script>
	<script src="{{asset('assets/js/popper.min.js')}}"></script>
	<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('assets/lib/wow/wow.js')}}"></script>
	<script src="{{asset('assets/js/funciones.js')}}"></script>
  @yield('js')
</body>
</html>
