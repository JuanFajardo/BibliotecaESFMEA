<nav class="lista-menu">
  @if(isset(\Auth::user()->id))
    <a href="{{asset('index.php/Archivos')}}#libros">LIBROS</a>
    <a href="{{asset('index.php/Sistematizacion')}}#libros">SISTEMATIZACIONES</a>
    <a href="{{asset('index.php/Archivos')}}#comentario">COMENTARIO</a>
    @if( \Auth::user()->grupo == "Administrador" )
    <a href="{{asset('index.php/Libro')}}#libros">ADMINISTRAR</a>
    @endif
    @if( \Auth::user()->grupo == "Reporte" )
    <a href="{{asset('index.php/Libro')}}#libros">REPORTES</a>
    @endif
  @endif
  <a href="{{asset('index.php')}}#misionvision">MISIÓN VISIÓN</a>
  <a href="{{asset('index.php')}}#organigrama">ORGANIGRAMA</a>
  <a href="{{asset('index.php')}}#contacto">CONTACTO</a>

</nav>
