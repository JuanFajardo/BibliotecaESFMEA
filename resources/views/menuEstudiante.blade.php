<nav class="lista-menu">
  
  <a href="{{asset('index.php')}}#bienvenida">BIENVENIDA</a>
  <a href="{{asset('index.php')}}#misionvision">MISIÓN VISIÓN</a>
  <a href="{{asset('index.php')}}#organigrama">ORGANIGRAMA</a>
  <a href="{{asset('index.php')}}#contacto">CONTACTO</a>
  @if(isset(\Auth::user()->id))
    <a href="{{asset('index.php/Estudiante')}}#comentario">COMENTARIO</a>
    @if( \Auth::user()->grupo == "Administrador" )
    <a href="{{asset('index.php/Libro')}}#libros">ADMINISTRAR</a>
    <a href="{{asset('index.php/Libro')}}#libros">REPORTES</a>
    @endif
    @if( \Auth::user()->grupo == "Reporte" )
    <a href="{{asset('index.php/Libro')}}#libros">REPORTES</a>
    @endif
  @endif
</nav>
