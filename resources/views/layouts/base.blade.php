<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/aos.css"/>

    <link rel="stylesheet" href="/css/estilos.css">
    <link rel="shortcut icon" href="/img/logo-redondo.png" type="image/x-icon">
    <title>Computron || Tu Solucion Informatica</title>

</head>

<body>
    <div class="header">
        <!--menu-->
        <div class="navigation-wrap bg-dark start-header start-style">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">

                        <nav id="myMenu" class="navbar navbar-expand-md navbar-dark fixed">
                            <a class="navbar-brand" href="{{route('inicio')}}">
                                <img src="/img/logo-redondo.png" alt="logo" loading="lazy">
                                COMPUTRON</a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse"
                                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>

                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <ul class="navbar-nav text-center ml-auto mr-auto py-4 py-md-0">
                                    <li class="nav-item {{setActive('inicio')}} pl-md-0 ml-0 ml-md-4">
                                    <a class="nav-link" href="{{route('inicio')}}">Home</a>
                                    </li>
                                    <li class="nav-item {{setActive('about')}} pl-md-0 ml-0 ml-md-4">
                                    <a class="nav-link" href="{{route('about')}}">Quienes Somos</a>
                                    </li>
                                    <li class="nav-item dropdown pl-md-0 ml-0 ml-md-4">
                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                          Servicios
                                        </a>
                                        <div class="dropdown-menu " aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{route('personas')}}">Personas</a>
                                          <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="{{ route('empresas')}}">Empresas</a>
                                        </div>
                                    </li>
                                    <li class="nav-item {{setActive('contact')}} pl-md-0 ml-0 ml-md-4">
                                    <a class="nav-link" href="{{route('contact')}}">Contacto</a>
                                    </li>
                                </ul>
                                <!--login-->
                                <div class="login mr-4 ml-4 pl-4 pr-4 my-auto text-center">
                                <a href="{{route('login')}}">
                                        <ion-icon name="person-circle-outline"></ion-icon>
                                        Ingresar
                                    </a>
                                </div>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

        @yield('content')

        <!--foooter-->

        <div class="footer container-fluid text-center my-auto">
            <div class="social mt-2">
                <ion-icon name="logo-facebook"></ion-icon>
                <ion-icon name="logo-instagram"></ion-icon>
                <ion-icon name="logo-linkedin"></ion-icon>
                <ion-icon name="logo-twitter"></ion-icon>
            </div>
            <div class="author mt-2">
               <p>Designed with <ion-icon name="heart"></ion-icon> by <a href="#">C3F3</a></p>
            </div>
        </div>
        <div class="section wsp" data-aos="fade-left" data-aos-duration="1500">
            <a class="btn btn-success" href="https://api.whatsapp.com/send?phone=543876370500">
                <ion-icon name="logo-whatsapp"></ion-icon>
            </a>
        </div>
        
    
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
            integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
            crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
            integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
            crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
            integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"
            crossorigin="anonymous"></script>
        <script src="https://unpkg.com/ionicons@5.0.0/dist/ionicons.js"></script>
        <script src="/js/aos.js"></script>
        <script>
          AOS.init();
        </script>
    </body>
    
    </html>