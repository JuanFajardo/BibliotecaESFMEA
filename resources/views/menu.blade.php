<ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
  <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables" @yield('menu1')>
    <a class="nav-link" href="{{asset('/index.php/Categoria')}}">
      <i class="fa fa-fw fa-list-ol"></i>
      <span class="nav-link-text">Categoria</span>
    </a>
  </li>
  <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables" @yield('menu2')>
    <a class="nav-link" href="{{asset('/index.php/Subcatergoria')}}">
      <i class="fa fa-fw fa-list-ol"></i>
      <span class="nav-link-text">SubCategoria</span>
    </a>
  </li>
  <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables" @yield('menu3')>
    <a class="nav-link" href="{{asset('/index.php/Libro')}}">
      <i class="fa fa-fw fa-shopping-basket"></i>
      <span class="nav-link-text">Libro</span>
    </a>
  </li>
  <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables" @yield('menu4')>
    <a class="nav-link" href="{{asset('/index.php/Comentario')}}">
      <i class="fa fa-fw fa-list-ol"></i>
      <span class="nav-link-text">Comentarios</span>
    </a>
  </li>

  <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables" @yield('menu5')>
    <a class="nav-link" href="{{asset('/index.php/Visita')}}">
      <i class="fa fa-fw fa-clock"></i>
      <span class="nav-link-text">Visitas</span>
    </a>
  </li>
  <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables" @yield('menu6')>
    <a class="nav-link" href="{{asset('/index.php/usuarios')}}">
      <i class="fa fa-fw fa-table"></i>
      <span class="nav-link-text">Usuarios</span>
    </a>
  </li>
</ul>
