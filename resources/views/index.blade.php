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
                        <div class="carousel-item active" data-interval="2000">
                            <a href="">
                                <img src="/img/slider0.jpg" alt="">
                                <div class="carousel-caption d-md-block">
                                    <h3 href="#" class="display-4">Seriedad</h3>
                                    <p class="lead">Cumplimos con todas las normativas vigentes.</p>
                                </div>
                            </a>
                            
                        </div>
                        <!-- Slide Two - Set the background image for this slide in the line below -->
                        <div class="carousel-item" data-interval="2000">
                            <a href="">
                                <img src="/img/slider1.jpg" alt="" >
                                <div class="carousel-caption d-md-block">
                                    <h3 class="display-4">Excelencia</h3>
                                    <p class="lead">Aseguramos calidad en todos nuestros trabajos.</p>
                                </div>
                            </a>
                            
                        </div>
                        <!-- Slide Three - Set the background image for this slide in the line below -->
                        <div class="carousel-item" data-interval="2000">
                            <a href="">
                                <img src="/img/slider2.jpg" alt="">
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
    <div class="intro section">
        <div class="bg-dark text-center py-5">
            <div class="container">
                <h2 class="font-weight-light text-white">¿Buscas una solucion informatica?</h2>
                <p class="text-white mt-4">¿Necesitas arreglar una computadora?¿Montar una red?¿Instalar camaras de vigilancia?
                    ¿Buscas armar una campaña de marketing digital? ¿O tener tu propia aplicacion movil? 
                </p>
                <p class="text-white mt-4">Desde computron nos centramos en soluciones integrales orientadas tanto a empresas como a 
                    personas particulares. Acercate y te asesoramos....
                </p>
                <a href="about.html" class="mt-4 btn btn-success">Conocenos!</a>
            </div>
        </div>
    </div>
    <div class="section hero-image">
        <div class="text-center uno d-flex align-items-center">
            <div class="content mx-auto ">
                <h1>Titulo</h1>
                <p>Descripcion</p>
            </div>
            
        </div>   
        <div class="bg-dark py-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 text-center">
                        <h1>gaming</h1>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa accusantium hic, 
                            sit unde deleniti quidem rem at laudantium distinctio qui necessitatibus.
                             Fuga ducimus dolor neque nihil ab eveniet recusandae illo!</p>
                        <a href="" class="btn btn-success">Ver Mas</a>
                    </div>
                    <div class="col-md-6">
                        <img src="./img/secciones/gamer.jpg" alt="" class="image-card">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section hero-image">
        <div class="text-center uno d-flex align-items-center">
            <div class="content mx-auto ">
                <h1>Titulo</h1>
                <p>Descripcion</p>
            </div>
            
        </div>   
        <div class="bg-dark py-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 text-center">
                        <h1>Microelectronica</h1>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa accusantium hic, 
                            sit unde deleniti quidem rem at laudantium distinctio qui necessitatibus.
                             Fuga ducimus dolor neque nihil ab eveniet recusandae illo!</p>
                        <a href="" class="btn btn-success">Ver Mas</a>
                    </div>
                    <div class="col-md-6">
                        <img src="./img/secciones/gamer.jpg" alt="" class="image-card">
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
    