<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="Armando Herrera" />
        <link rel="shortcut icon" href="/img/logo-redondo.png" type="image/x-icon">
        <title>Computron-Admin</title>
        <link href="/css/admin/styles.css" rel="stylesheet" />
        <link rel="stylesheet" href="/vendor/bootstrap-fileinput/css/fileinput.min.css">
        <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <!--menu-->
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <a class="navbar-brand" href="{{ route('inicio') }}">
                <img src="/img/logo-redondo.png" alt="logo" loading="lazy">Computron
            </a>
            <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
                <div class="input-group">
                    <input class="form-control" type="text" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2" />
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="button"><i class="fas fa-search"></i></button>
                    </div>
                </div>
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ml-auto ml-md-0">
               <!-- Authentication Links -->
               @guest
               <li class="nav-item">
                   <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
               </li>
               @if (Route::has('register'))
                   <li class="nav-item">
                       <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                   </li>
               @endif
           @else
               <li class="nav-item dropdown">
                   <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                       {{ Auth::user()->name }} <span class="caret"></span>
                   </a>

                   <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                       <a class="dropdown-item" href="{{ route('logout') }}"
                          onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                           {{ __('Logout') }}
                       </a>

                       <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                           @csrf
                       </form>
                   </div>
               </li>
           @endguest
            </ul>
        </nav>


        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">

                            <!--para el link para el panel principal-->
                            <div class="sb-sidenav-menu-heading">Principal</div>
                            <a class="nav-link" href="{{route('index')}}">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>

                            <!--Para las secciones-->
                            <div class="sb-sidenav-menu-heading">Acciones</div>
                            
                            <!--seccion Mi Cuenta-->
                                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseCount" 
                                aria-expanded="false" aria-controls="collapseLayouts">

                                    <!-- cabecera Mi Cuenta-->
                                    <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                    Mi Cuenta
                                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                </a>
                                <div class="collapse" id="collapseCount" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                            
                                    <!--submenu para los datos personales-->
                                    <nav class="sb-sidenav-menu-nested nav">

                                        <a class="nav-link" href="{{route('verMisDatos')}}">Mis Datos</a>

                                    </nav>
                                </div>

                            <!--seccion Clientes-->
                                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts" 
                                aria-expanded="false" aria-controls="collapseLayouts">

                                    <!-- cabecera clientes-->
                                    <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                    Clientes
                                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                </a>
                                <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                
                                    <!--submenu para la clientes-->
                                    <nav class="sb-sidenav-menu-nested nav">

                                        <a class="nav-link" href="{{route('listaClientes')}}">Ver Clientes</a>
                            
                                    </nav>
                                </div>

                                <!-- seccion Campaña-->
                                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" 
                                aria-expanded="false" aria-controls="collapseLayouts">

                                    <!-- cabecera campaña-->
                                    <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                    Campaña
                                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                </a>

                                <div class="collapse" id="collapsePages" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                    <nav class="sb-sidenav-menu-nested nav">
                                        <a class="nav-link" href="{{route('listaFlyers')}}">Ver Flyers</a>
                                        <a class="nav-link" href="{{route('nuevoFlyer')}}">Nuevo Flyer</a>
                                    </nav>
                                </div>

                                <!--seccion para trabajos-->
                                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseWorks" 
                                aria-expanded="false" aria-controls="collapseLayouts">

                                    <!-- cabecera campaña-->
                                    <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                    Trabajos
                                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                </a>

                                <div class="collapse" id="collapseWorks" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                    <!--submenu para trabajos-->
                                    <nav class="sb-sidenav-menu-nested nav">
                                        <a class="nav-link" href="">Ver Trabajos</a>
                                        <a class="nav-link" href="">Nuevo Trabajo</a>
                                    </nav>
                                </div>
                           
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Diseñado por:</div>
                        Computron
                    </div>
                </nav>
            </div>

            @yield('content')

        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="/js/admin/scripts.js"></script>
        <script src="/vendor/bootstrap-fileinput/js/fileinput.min.js"></script>
        <script src="/vendor/bootstrap-fileinput/js/locales/es.js"></script>
        <script src="/vendor/bootstrap-fileinput/themes/fa/theme.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
        <script src="/js/admin/datatables-demo.js"></script>
    </body>
</html>