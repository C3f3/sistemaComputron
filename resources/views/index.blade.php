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
                    </ol>
                    <div class="carousel-inner" role="listbox">
                        <!-- Slide One - Set the background image for this slide in the line below -->
                        <div class="carousel-item active" data-interval="1500">
                            <a href="#gaming">
                                <img src="/img/slider/slider0.jpg" alt="">
                                <div class="carousel-caption d-md-block">
                                    <h3 href="#" class="display-4">Gaming</h3>
                                    <p class="lead">Cumplimos con todas las normativas vigentes.</p>
                                </div>
                            </a>
                            
                        </div>
                        <!-- Slide Two - Set the background image for this slide in the line below -->
                        <div class="carousel-item" data-interval="1500">
                            <a href="#microelectronica">
                                <img src="/img/slider/slider1.jpg" alt="" >
                                <div class="carousel-caption d-md-block">
                                    <h3 class="display-4">Microelectronica</h3>
                                    <p class="lead">Aseguramos calidad en todos nuestros trabajos.</p>
                                </div>
                            </a>
                            
                        </div>
                        <!-- Slide Three - Set the background image for this slide in the line below -->
                        <div class="carousel-item" data-interval="1500">
                            <a href="">
                                <img src="/img/slider/slider2.jpg" alt="">
                                <div class="carousel-caption d-md-block">
                                    <h3 class="display-4">Compromiso</h3>
                                    <p class="lead">Priorizamos las necesidades de nuestros clientes.</p>
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
    <div class="intro section aos-item" data-aos="fade-up">
        <div class="bg-dark text-center py-md-5">
            <div class="container">
                <h2 class="font-weight-light text-white">¿Buscas una solución informática?</h2>
                <p class="text-white mt-4">¿Necesitas arreglar una computadora?¿Montar una red?¿Instalar cámaras de vigilancia?
                    ¿Buscas armar una campaña de marketing digital? ¿O tener tu propia aplicación móvil?
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
        <a class="container-fluid text-center uno  d-flex align-items-center"  href="">
            <div class="content mx-auto">
                <h2>ARMA LA PC DE TUS SUEÑOS</h2>
                <P>Nada supera el rendimiento de una pc a medida</P>
            </div>
            
        </a>
    </div>

    <div class="horizontal-divider mx-auto my-md-5"  id="microelectronica"></div>

    <!------------------Segunda Seccion --Microelectronica --------------->
    <div class="section hero-image aos-item" data-aos="zoom-in" data-aos-duration="1500">
        <div class="text-center container-fluid dos d-flex align-items-center" >
            <div class="content mx-auto">
                <h2>Microelectronica</h2>
                <p>Descripcion</p>
            </div>
            
        </div>   
        <div class="bg-dark py-md-5">
            <div class="container">
                <div class="row mt-4">
                    <div class="col-md-6 text-center order-md-last">
                        <h2>Microelectronica</h2>
                        <p >Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa accusantium hic, 
                            sit unde deleniti quidem rem at laudantium distinctio qui necessitatibus.
                             Fuga ducimus dolor neque nihil ab eveniet recusandae illo!</p>
                        <a href="" class="btn btn-success topmargin-lg">Ver Mas</a>
                    </div>
                    <div class="col-md-6 order-md-first">
                        <img src="./img/secciones/electronica-small.jpg" alt="" class="image-card">
                    </div>
                    
                    
                </div>
            </div>
        </div>
    </div>

    <div class="horizontal-divider mx-auto my-md-5" id="redes"></div> 

    <!------------------Tercera Seccion --Redes --------------->
    <div class="section hero-image"   data-aos="zoom-in" data-aos-duration="1500">
        <div class="text-center container-fluid tres d-flex align-items-center"  >
            <div class="content mx-auto ">
                <h2>Redes y Servidores</h2>
                <p>Descripcion</p>
            </div>
            
        </div>   
        <div class="bg-dark py-md-5">
            <div class="container">
                <div class="row mt-4">
                    <div class="col-md-6 text-center" >
                        <h2>Redes y Servidores</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa accusantium hic, 
                            sit unde deleniti quidem rem at laudantium distinctio qui necessitatibus.
                             Fuga ducimus dolor neque nihil ab eveniet recusandae illo!</p>
                        <a href="" class="btn btn-success topmargin-lg">Ver Mas</a>
                    </div>
                    <div class="col-md-6 ">
                        <img src="./img/secciones/redes-small.jpg" alt="" class="image-card">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="horizontal-divider mx-auto my-md-5"  id="express"></div>

    <!------------------Cuarta Seccion --Express --------------->    
    <div class="section hero-image aos-item" data-aos="zoom-in" data-aos-duration="1500">
        <div class="text-center container-fluid cuatro d-flex align-items-center" >
            <div class="content mx-auto">
                <h2>Servicios Express</h2>
                <p>Descripcion</p>
            </div>
            
        </div>   
        <div class="bg-dark py-md-5">
            <div class="container">
                <div class="row mt-4">
                    <div class="col-md-6 text-center order-md-last">
                        <h2>Microelectronica</h2>
                        <p >Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa accusantium hic, 
                            sit unde deleniti quidem rem at laudantium distinctio qui necessitatibus.
                             Fuga ducimus dolor neque nihil ab eveniet recusandae illo!</p>
                        <a href="" class="btn btn-success topmargin-lg">Ver Mas</a>
                    </div>
                    <div class="col-md-6 order-md-first">
                        <img src="./img/secciones/express-small.jpg" alt="" class="image-card">
                    </div>
                    
                    
                </div>
            </div>
        </div>
    </div>

    <div class="horizontal-divider mx-auto my-md-5" id="programacion"></div> 

    <!------------------Quinta Seccion --Programacion --------------->   
    <div class="section hero-image aos-item"   data-aos="zoom-in" data-aos-duration="1500">
        <div class="text-center container-fluid cinco d-flex align-items-center"  >
            <div class="content mx-auto ">
                <h2>Web y Movil</h2>
                <p>Descripcion</p>
            </div>
            
        </div>   
        <div class="bg-dark py-md-5">
            <div class="container">
                <div class="row mt-4">
                    <div class="col-md-6 text-center" >
                        <h2>Programacion</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa accusantium hic, 
                            sit unde deleniti quidem rem at laudantium distinctio qui necessitatibus.
                             Fuga ducimus dolor neque nihil ab eveniet recusandae illo!</p>
                        <a href="" class="btn btn-success topmargin-lg">Ver Mas</a>
                    </div>
                    <div class="col-md-6 ">
                        <img src="./img/secciones/prog-small.jpg" alt="" class="image-card">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="horizontal-divider mx-auto my-md-5"  id="design"></div>

    <!------------------Sexta Seccion --Diseño --------------->  
    <div class="section hero-image aos-item" data-aos="zoom-in" data-aos-duration="1500">
        <div class="text-center container-fluid seis d-flex align-items-center" >
            <div class="content mx-auto">
                <h2>Diseño</h2>
                <p>Descripcion</p>
            </div>
            
        </div>   
        <div class="bg-dark py-md-5">
            <div class="container">
                <div class="row mt-4">
                    <div class="col-md-6 text-center order-md-last">
                        <h2>Diseño</h2>
                        <p >Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa accusantium hic, 
                            sit unde deleniti quidem rem at laudantium distinctio qui necessitatibus.
                             Fuga ducimus dolor neque nihil ab eveniet recusandae illo!</p>
                        <a href="" class="btn btn-success topmargin-lg">Ver Mas</a>
                    </div>
                    <div class="col-md-6 order-md-first">
                        <img src="./img/secciones/electronica-hero-image.jpg" alt="" class="image-card">
                    </div>
                    
                    
                </div>
            </div>
        </div>
    </div>
    @endsection
    