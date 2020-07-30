   @extends('layouts.base')    
       
       @section('content')
        <!------------------ slider------------->
        <div class="section" id="home">
            <header class="main-header aos-item" data-aos="fade-up">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner" role="listbox">
                        <!-- Slide One - Set the background image for this slide in the line below -->
                        
                        <div class="carousel-item active" style="background-image: url('/img/slider0.jpg')">
                            <div class="carousel-caption d-md-block">
                                <h3 href="#" class="display-4">Seriedad</h3>
                                <p class="lead">Cumplimos con todas las normativas vigentes.</p>
                            </div>
                        </div>
                        <!-- Slide Two - Set the background image for this slide in the line below -->
                        <div class="carousel-item" style="background-image: url('/img/slider1.jpg')">
                            <a class="carousel-caption d-md-block">
                                <h3 class="display-4">Excelencia</h3>
                                <p class="lead">Aseguramos calidad en todos nuestros trabajos.</p>
                            </a>
                        </div>
                        <!-- Slide Three - Set the background image for this slide in the line below -->
                        <div class="carousel-item" style="background-image: url('/img/slider2.jpg')">
                            <div class="carousel-caption d-md-block">
                                <h3 class="display-4">Compromiso</h3>
                                <p class="lead">Priorizamos las necesidades de nuestros clientes.</p>
                            </div>
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
    @endsection
    