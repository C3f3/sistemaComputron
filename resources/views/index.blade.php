   @extends('layouts.base')    
       
       @section('content')
        <!------------------ slider------------->
        <div class="section" id="home">
            <header class="main-header aos-item" data-aos="fade-up">
                <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="6"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="7"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="8"></li>




                    </ol>
                    <div class="carousel-inner" role="listbox">
                        <!-- Slide One - Set the background image for this slide in the line below -->
                        <div class="carousel-item active" data-interval="3000">
                            <a href="#gaming">
                                <img src="/img/slider/slider0.jpg" alt="gaming">
                                <div class="carousel-caption d-md-block">
                                    <h3 href="#" class="display-4">Gaming</h3>
                                    <p class="lead">Imaginá tu equipo. ¡Nosotros lo armamos!</p>
                                </div>
                            </a>
                            
                        </div>
                        <!-- Slide Two - Set the background image for this slide in the line below -->
                        <div class="carousel-item" data-interval="3000">
                            <a href="#microelectronica">
                                <img src="/img/slider/slider1.jpg" alt="electronica" >
                                <div class="carousel-caption d-md-block">
                                    <h3 class="display-4">Microelectronica</h3>
                                    <p class="lead">Aseguramos calidad en todos nuestros trabajos.</p>
                                </div>
                            </a>
                            
                        </div>
                        <!-- Slide Three - Set the background image for this slide in the line below -->
                        <div class="carousel-item" data-interval="3000">
                            <a href="#redes">
                                <img src="/img/slider/slider2.jpg" alt="redes">
                                <div class="carousel-caption d-md-block">
                                    <h3 class="display-4">Redes y Servidores</h3>
                                    <p class="lead">¡Hacemos instalación y mantenimiento!</p>
                                </div>
                            </a>
                            
                        </div>
                         <!-- Slide four -  -->

                        <div class="carousel-item" data-interval="3000">
                            <a href="#express">
                                <img src="/img/slider/slider3.jpg" alt="express">
                                <div class="carousel-caption d-md-block">
                                    <h3 class="display-4">Servicios Express</h3>
                                    <p class="lead">Soluciones inmediatas</p>
                                </div>
                            </a>
                            
                        </div>

                        <!--slider Five--->
                        <div class="carousel-item" data-interval="3000">
                            <a href="#programacion">
                                <img src="/img/slider/slider4.jpg" alt="programacion">
                                <div class="carousel-caption d-md-block">
                                    <h3 class="display-4">Paginas y Apps</h3>
                                    <p class="lead">¡Potencia tu emprendimiento!</p>
                                </div>
                            </a>
                            
                        </div>

                        <!--slider Six--->
                        <div class="carousel-item" data-interval="3000">
                            <a href="#diseño">
                                <img src="/img/slider/slider5.jpg" alt="diseño">
                                <div class="carousel-caption d-md-block">
                                    <h3 class="display-4">Diseño Grafico</h3>
                                    <p class="lead">Construimos tu imagen</p>
                                </div>
                            </a>
                            
                        </div>
                         <!--slider Seven--->
                         <div class="carousel-item" data-interval="3000">
                            <a href="#reparacion">
                                <img src="/img/slider/slider6.jpg" alt="reparacion">
                                <div class="carousel-caption d-md-block">
                                    <h3 class="display-4">Notebook y Pc</h3>
                                    <p class="lead">¡Arreglamos tu compu!</p>
                                </div>
                            </a>
                            
                        </div>
                         <!--slider Eight--->
                         <div class="carousel-item" data-interval="3000">
                            <a href="#reparacion">
                                <img src="/img/slider/slider7.jpg" alt="lcd">
                                <div class="carousel-caption d-md-block">
                                    <h3 class="display-4">Lcd y Smart</h3>
                                    <p class="lead">¡Arreglamos tu tele!</p>
                                </div>
                            </a>
                            
                        </div>

                         <!--slider nine--->
                         <div class="carousel-item" data-interval="3000">
                            <a href="#reparacion">
                                <img src="/img/slider/slider8.jpg" alt="camaras">
                                <div class="carousel-caption d-md-block">
                                    <h3 class="display-4">Camaras</h3>
                                    <p class="lead">Seguridad y Calidad.</p>
                                </div>
                            </a>
                            
                        </div>
                    </div>

                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Prev</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Sig</span>
                    </a>
                </div>
            </header>
        </div>
    </div>
    <!------------------Introduccin------------->
    <div class="intro section aos-item pt-3" data-aos="fade-up">
        <div class="bg-dark text-center py-md-5">
            <div class="container">
                <h2 class="font-weight-light text-white">¿Buscas una solución informática?</h2>
                <p class="text-white mt-4">¿Necesitas arreglar una computadora?¿Montar una red? ¿Optimizar un servidor? ¿Instalar cámaras de vigilancia?
                    ¿Buscas potenciar tu emprendimiento con una campaña de marketing digital? ¿O tener tu propia aplicación móvil?
                </p>
                <p class="text-white mt-4">Desde Computron nos centramos en soluciones integrales orientadas tanto a empresas como a
                    personas particulares. Acércate y te asesoramos...
                </p>
                <a href="{{route('about')}}" class="mt-4 btn btn-success">¡Conócenos!</a>
            </div>
        </div>
    </div>


    <div class="horizontal-divider mx-auto my-md-5" id="gaming"></div>


    <!---------------copia de seccion gaming ------------------>


    <div class="section hero-image aos-item"   data-aos="zoom-in" data-aos-duration="1500">
        <a class="container-fluid text-center uno  d-flex align-items-center"  href="{{route('gaming')}}">
            <div class="content mx-auto">
                <h2>ARMA LA PC DE TUS SUEÑOS</h2>
                <p id="headline2">Nada supera el rendimiento de una pc a medida.</p>
                <p class="indicador mt-4"><ion-icon name="arrow-forward-circle-outline"></ion-icon></p>
            </div>
            
        </a>
    </div>

    <div class="horizontal-divider mx-auto my-md-5"  id="microelectronica"></div>

    <!------------------Segunda Seccion --Microelectronica --------------->
    <div class="section hero-image aos-item"   data-aos="zoom-in" data-aos-duration="1500">
        <a class="container-fluid text-center dos  d-flex align-items-center"  href="{{route('microelectronica')}}">
            <div class="content mx-auto">
                <h2>HACEMOS MICROELECTRÓNICA</h2>
                <p id="headline">¡Arreglamos tus placas y equipos dañados!</p>
                <p class="indicador mt-4"><ion-icon name="arrow-forward-circle-outline"></ion-icon></p>

            </div>
            
        </a>
    </div>

    <div class="horizontal-divider mx-auto my-md-5" id="redes"></div> 

    <!------------------Tercera Seccion --Redes --------------->
    <div class="section hero-image aos-item"   data-aos="zoom-in" data-aos-duration="1500">
        <a class="container-fluid text-center tres  d-flex align-items-center"  href="">
            <div class="content mx-auto">
                <h2>REDES Y SERVIDORES</h2>
                <p id="headline3">¡Hacemos instalación y mantenimiento!</p>
                <p class="indicador mt-4"><ion-icon name="arrow-forward-circle-outline"></ion-icon></p>

            </div>
            
        </a>
    </div>

    <div class="horizontal-divider mx-auto my-md-5"  id="express"></div>

    <!------------------Cuarta Seccion --Express --------------->    
    <div class="section hero-image aos-item"   data-aos="zoom-in" data-aos-duration="1500">
        <a class="container-fluid text-center cuatro d-flex align-items-center"  href="{{route('express')}}">
            <div class="content mx-auto">
                <h2>SERVICIOS EXPRESS</h2>
                <p id="headline4">Conocé nuestros soluciones inmediatas.</p>
                <p class="indicador mt-4"><ion-icon name="arrow-forward-circle-outline"></ion-icon></p>

            </div>
            
        </a>
    </div>

    <div class="horizontal-divider mx-auto my-md-5" id="programacion"></div> 

    <!------------------Quinta Seccion --Programacion --------------->   
    <div class="section hero-image aos-item"   data-aos="zoom-in" data-aos-duration="1500">
        <a class="container-fluid text-center cinco d-flex align-items-center"  href="{{route('programacion')}}">
            <div class="content mx-auto">
                <h2>WEB Y MOVIL</h2>
                <p id="headline5">Hacemos apps y webs ¡Entra al mundo digital!</p>
                <p class="indicador mt-4"><ion-icon name="arrow-forward-circle-outline"></ion-icon></p>

            </div>
            
        </a>
    </div>
    

    <div class="horizontal-divider mx-auto my-md-5"  id="design"></div>

    <!------------------Sexta Seccion --Diseño --------------->  
    <div class="section hero-image aos-item"   data-aos="zoom-in" data-aos-duration="1500">
    <a class="container-fluid text-center seis d-flex align-items-center"  href="{{route('diseño')}}">
            <div class="content mx-auto">
                <h2>HACEMOS DISEÑO</h2>
                <p id="headline6">¡Creamos estrategias y soluciones digitales para vos!</p>
                <p class="indicador mt-4"><ion-icon name="arrow-forward-circle-outline"></ion-icon></p>

            </div>
            
        </a>
    </div>

    <div class="horizontal-divider mx-auto my-md-5"  id="reparacion"></div>

    <!------------------Septima Seccion --reparacion --------------->  
    <div class="section hero-image aos-item"   data-aos="zoom-in" data-aos-duration="1500">
        <a class="container-fluid text-center siete d-flex align-items-center"  href="{{route('reparacion')}}">
            <div class="content mx-auto">
                <h2>Reparamos tu compu</h2>
                <p id="headline7">Garantia y profesionalismo</p>
                <p class="indicador mt-4"><ion-icon name="arrow-forward-circle-outline"></ion-icon></p>

            </div>
            
        </a>
    </div>

    <div class="horizontal-divider mx-auto my-md-5"  id="camaras"></div>

    <!------------------Octava Seccion --camaras --------------->  
    <div class="section hero-image aos-item"   data-aos="zoom-in" data-aos-duration="1500">
        <a class="container-fluid text-center ocho d-flex align-items-center"  href="{{route('camaras')}}">
            <div class="content mx-auto">
                <h2>Camaras de Seguridad</h2>
                <p id="headline8">¡Seguridad al mejor costo!</p>
                <p class="indicador mt-4"><ion-icon name="arrow-forward-circle-outline"></ion-icon></p>

            </div>
            
        </a>
    </div>

    @endsection
    