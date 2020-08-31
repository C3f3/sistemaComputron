@extends('layouts.base')

@section('content')
<div class="section">
    
    <!------------------Segunda Seccion --Gaming--------------->
    <div class="section hero-image aos-item"   data-aos="zoom-in" data-aos-duration="1500">
        <div class="container-fluid text-center d-flex align-items-center"  id="gaming">
            <div class="content mx-auto ">
                <h2>Gaming</h2>
                
                <p>Conseguí la PC de tus sueños</p>
            </div>
            
        </div>         
    </div>

    <div class="section bg-dark">
        <div class="py-5 container">
            <div class="content text-center">
                <h2 class="font-weight-light text-white">¿Que hacemos?</h2>
                <p class="text-white mt-4 text-justify" >Al momento de intentar adquirir una PC, seguramente te preguntaras ¿Es mejor comprar o armar una computadora? 
                    Ambas opciones tienen sus ventajas y desventajas, pero ambas opciones no son tarea fácil para la mayoría de las personas. </p>
                <p class="text-white mt-4 text-justify">Nosotros somos especialistas en tecnología gamer. Acercate y te ayudamos.</p>
            </div>
        </div>
    </div>
    <div class="horizontal-divider mx-auto my-md-5" id="gaming"></div>
     <!--cards-->
     <div class="section bg-dark">
        <div class=" py-sm-3 py-md-3 container">
            <div class="row">
                <div class="col-lg-4 col-sm-4">
                    <div class="box-part text-center"  data-aos="flip-left" data-aos-duration="1500">
                        <img src="img/about/gaming.png" alt="eficiencia">
                   
                        <div class="text">
                            <p > Hacemos ensamblado y configuración para un mejor rendimiento. Nada supera un equipo a la medida de tus necesidades.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-4">
                    <div class="box-part text-center" data-aos="flip-left" data-aos-duration="1500">
                        <img src="img/about/presupuesto.png" alt="calidad">
                        
                        <div class="text">
                            <p>Encontra el equilibrio entre precio y calidad.Asesoramiento y ensamblado sin cargo.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-4">
                    <div class="box-part text-center" data-aos="flip-left" data-aos-duration="1500">
                        <img src="img/about/tendencia.png" alt="innovacion">
                        
                        <div class="text">
                            <p>Nos mantenemos informados de las ultimas tendencias. Compra tecnología de ultima generación</p>
                        </div>
                    </div>
                </div>
    
            </div>
          </div>
    </div>
    
    <div class="horizontal-divider mx-auto my-5"></div>

    <div class="gallery">

        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <img src="/img/secciones/gaming/gaming1.jpg" alt="">
                </div>
                <div class="col-md-6">
                    <img src="/img/secciones/gaming/gaming2.jpg" alt="">
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <img src="/img/secciones/gaming/gaming3.jpg" alt="">
                </div>
                <div class="col-md-6">
                    <img src="/img/secciones/gaming/gaming4.jpg" alt="">
                </div>
            </div>
            

        </div>
    </div>
    <div class="horizontal-divider mx-auto my-5"></div>




</div>
@endsection