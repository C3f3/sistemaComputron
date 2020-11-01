<!doctype html>
<html lang="es-AR">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1">
    <meta name="description" content="Hacemos marketing digital, servicio tecnico de pc, gaming, redes, microelectronica, diseño grafico, programacion web y movil. ">
    <meta name="author" content="Armando Herrera- ComputronSalta">
    <meta name="keywords" content="Servicio Tecnico y reparacion de PC a Domicilio , Tecnico de PC a domicilio en capital federal, 
    Tecnico en PC, reparacion de notebook a domicilio en el dia, soporte tecnico de pc, mantenimiento de pc, servicio tecnico de computadoras, reparacion chip de video, 
    servicio tecnico de notebook a domicilio urgente, servicio tecnico de pc, service de pc y redes, arreglo de computadoras a domicilio, internet mantenimiento y reparacion de pc, 
    servicio técnico de computadoras, Reparación y arreglo de computadoras, reparacion máquinas pc, notebooks armado de pc, mantenimiento y reparación de pcs, servicio técnico 
    personalizado, soluciones informaticas en computacion , soporte tecnico computación, armado de computadoras reparación y mantenimiento de pc, 
    arreglos de computadoras a domicilio, service de pc, reparación de pc a domicilio, configuración redes wi-fi, abonos de mantenimiento y limpieza virus, soporte y service para pc, 
    mantenimiento y reparación de laptop a domicilio, instalación de hardware y software, soporte informatico para pc, mantenimiento de computadoras y reparaciones, 
    soluciones informaticas, soporte técnico y mantenimiento, configuración de equipos de computación, limpieza de virus spywares troyanos, recuperación de información,
    armado de pc, gaming, reparacion consolas, gamer, videojuegos, diseño grafico, diseño grafico salta, desarrollo web salta, aplicaciones moviles, apps salta, paginas web salta,
    microelectronica, microelectronica salta, electronica PC, marketing, marketing salta, camaras de seguridad salta, redes, servidores, internet salta, 
    Reparacion en Salta capital. diseño logo, diseño flyer,">


    <link rel= "canonical" href="http://www.computronsalta.com"/>


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/aos.css"/>
    <script src="https://kit.fontawesome.com/768773a078.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="/css/estilos.css">
    <link rel="shortcut icon" href="/img/logo-redondo.png" type="image/x-icon">
    <title>Computron || Tu Solución Informatica</title>

</head>

<body>
    <div class="header">
        <!--menu-->
        <div class="navigation-wrap bg-dark start-header">
            <div class="container-fluid">
              <nav id="myMenu" class="navbar navbar-expand-md navbar-dark fixed">
                <a class="navbar-brand" href="{{route('inicio')}}">
                    <img src="/img/logo-redondo.png" alt="logo" loading="lazy">
                    COMPUTRON
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav text-center ml-auto mr-auto py-4 py-md-0">

                        <li class="nav-item {{setActive('about')}} pl-md-0 ml-0 ml-md-4">
                            <a class="nav-link" href="{{route('about')}}">Quienes Somos</a>
                        </li>

                        <li class="nav-item dropdown pl-md-0 ml-0 ml-md-4">
                            <a class="nav-link dropdown-toggle" href="#" id="menu-services" role="button" onclick="habilitarBoton()" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Servicios 
                              </a>

                              <div class="dropdown-menu" aria-labelledby="menu-services" id="dropdown-menu">
                                <div class="menu-services">
                                  <div class="container ">
                                    <div class="row">
                                      <div class="col-md-6">
  
                                        <ul class="nav flex-column">
                                          <li class="nav-item text-center" onclick="mostrarOpciones('submenuHogar')" >
                                            <span>Hogares<i class="fas fa-sort-down"></i></span>
                                          </li>
                                          <div id="submenuHogar">
                                            <li class="nav-item text-center">
                                              <a class="nav-link" href="{{route('gaming')}}">Gaming</a>
                                            </li>
                                            <li class="nav-item text-center">
                                              <a class="nav-link" href="{{route('reparacion')}}">Pc y Notebook</a>
                                            </li>
                                            <li class="nav-item text-center">
                                              <a class="nav-link" href="{{route('microelectronica')}}">Microelectronica</a>
                                            </li>
                                            <li class="nav-item text-center">
                                              <a class="nav-link" href="{{route('diseño')}}">Diseño</a>
                                            </li>
                                            <li class="nav-item text-center">
                                              <a class="nav-link" href="{{route('camaras')}}">Camaras</a>
                                            </li>
                                            <li class="nav-item text-center">
                                              <a class="nav-link" href="{{route('express')}}">Serv. Express</a>
                                            </li>
                                            <li class="nav-item text-center">
                                            <a class="nav-link" href="{{route('tv')}}">Tv, LCD y Smart</a>
                                            </li>
                                          </div>
                                         
                                        </ul>
  
                                      </div>
                                     
                                      <div class="col-md-6">
                                        <ul class="nav flex-column">
                                          <li class="nav-item text-center" onclick="mostrarOpciones('submenuEmpresa')">
                                            <span>Empresas<i class="fas fa-sort-down"></i></span>
                                          </li>
                                          <div id="submenuEmpresa">
                                            <li class="nav-item text-center">
                                              <a class="nav-link" href="{{route('redes')}}">Redes y Servidores</a>
                                              </li>
                                              <li class="nav-item text-center">
                                              <a class="nav-link" href="{{route('camaras')}}">Camaras</a>
                                              </li>
                                              <li class="nav-item text-center">
                                              <a class="nav-link" href="{{route('diseño')}}">Diseño Corporativo</a>
                                              </li>
                                              <li class="nav-item text-center">
                                              <a class="nav-link" href="{{route('equipos')}}">Equipos</a>
                                              </li>
                                              <li class="nav-item text-center">
                                              <a class="nav-link" href="{{route('programacion')}}">Web y Movil</a>
                                              </li>
                                              <li class="nav-item text-center">
                                              <a class="nav-link" href="{{route('microelectronica')}}">Microelectronica</a>
                                              </li>
                                              <li class="nav-item text-center">
                                              <a class="nav-link" href="{{route('recuperacion')}}">Recuperacion de Datos</a>
                                              </li>
                                              <li class="nav-item text-center">
                                                <a class="nav-link" href="{{route('consultoria')}}">Consultoria</a>
                                              </li>
                                          </div>
                                          
                                        </ul>
                                      </div>
                                    
                                    </div>
                                  </div>
                                </div>
                               
                                <!--  /.container  -->
                      
                      
                              </div>
                        </li>
                        <li class="nav-item {{setActive('productos')}} pl-md-0 ml-0 ml-md-4">
                            <a class="nav-link" href="{{route('error')}}">Productos</a>
                        </li>
                        <li class="nav-item {{setActive('marketing')}} pl-md-0 ml-0 ml-md-4">
                            <a class="nav-link" href="{{route('error')}}">Marketing</a>
                        </li>
                        <li class="nav-item {{setActive('contact')}} pl-md-0 ml-0 ml-md-4">
                          <a class="nav-link" href="{{route('contact')}}">Contacto</a>
                        </li>
                    </ul>
                    <!--login-->
                    <div class="login mr-2 ml-2 pl-2 pr-2 my-auto text-center">
                    <a href="{{route('error')}}">
                            <ion-icon name="person-circle-outline"></ion-icon>
                            Ingresar
                        </a>
                    </div>
                </div>
              </nav>
                
            </div>
        </div>

        @yield('content')

        <!--foooter-->

        <div class="footer container-fluid text-center my-auto">
            <div class="social mt-2">
              <a href="https://www.facebook.com/Computron.Salta.Oficial/">
                <ion-icon name="logo-facebook">
                </ion-icon>
              </a>
              <a href="https://www.instagram.com/computronsalta">
                <ion-icon name="logo-instagram"></ion-icon>
              </a>  
              <a href="#">
                <ion-icon name="logo-linkedin"></ion-icon>
              </a>
              <a href="https://twitter.com/computronsalta">
                <ion-icon name="logo-twitter"></ion-icon>
              </a>
                
            </div>
            <div class="author mt-2">
               <p>Designed with <ion-icon name="heart"></ion-icon> by <a href="#">C3F3</a></p>
            </div>
        </div>

        <!--boton wsp-->
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
        <script src="/js/animacion.js"></script>
        <script>
          AOS.init();

          

          function mostrarOpciones(id){
            /*busco saber propiedad*/
            let submenu= document.getElementById(id);
            let estilo =window.getComputedStyle(submenu);
            let propiedad = estilo.getPropertyValue('display');

            if(window.innerWidth <=767){
              /*selecciono componente*/
              document.getElementById('menu-services').setAttribute('data-toggle','disabled');  

              /*si es none pongo en bloc y viceversa*/
              if(propiedad == 'none'){

                submenu.style.display='block';
                
              } 
              else{

                submenu.style.display  = 'none';

              }
            }
            else{
              document.getElementById('submenuEmpresa').style.display='block';
              document.getElementById('submenuHogar').style.display='block';
            }
          }
          
          /*habilita boton*/
          function habilitarBoton(){
            var boton = document.getElementById('menu-services').setAttribute('data-toggle','dropdown');
          }
        </script>

    </body>
    
    </html>