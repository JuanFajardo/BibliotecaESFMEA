@if( isset(\Auth::user()->id) )
<a href="{{asset('/index.php/logout')}}" target="_blank" class="link-cabecera nav-link" data-toggle="modal" data-target="#exampleModal">
  <span class="izquierda">
         Cerrar Session
  </span>
  <span class="derecha">
    <i class="fas fa-user"></i>
  </span>
</a>
@else
<a href="{{asset('/index.php/login')}}" target="_blank" class="link-cabecera">
  <span class="izquierda">
         Ingresar
  </span>
  <span class="derecha">
    <i class="fas fa-user"></i>
  </span>
</a>
@endif
