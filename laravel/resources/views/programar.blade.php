@extends('layouts.base')

@section('content')
<div class="section">
    
    <div class="horizontal-divider mx-auto my-md-5"></div>
    
    <!------------------Primera Seccion --Reparacion--------------->
    <div class="section hero-image aos-item"   data-aos="zoom-in" data-aos-duration="1500">
        <div class="container-fluid text-center d-flex align-items-center"  id="programar">
            <div class="content mx-auto ">
                <h2>Webs y Apps</h2>
                <p>Poténcia tu emprendimiento</p>
            </div>
            
        </div>         
    </div>

    <div class="section bg-dark">
        <div class="py-5 container">
            <div class="content text-center">
                <h2 class="font-weight-light text-white">Nuestros Servicios</h2>
                <p class="text-white mt-4">¡Obten el maximo potencial para tu negocio, entra al mundo digital! Desarrollamos sistemas a medida, paginas webs y aplicaciones moviles. Ayudamos a mejorar cualquier industria mediante la tecnologia adecuada. Acercate y te asesoramos sin cargo.</p>
            </div>
        </div>
    </div>

    <div class="horizontal-divider mx-auto my-md-5"></div>

    <!--cards-->
    <div class="section bg-dark">
        <div class=" py-sm-3 py-md-3 container">
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="box-part text-center"  data-aos="flip-left" data-aos-duration="1500">
                        <img src="img/secciones/programacion/icono-1.png" alt="diseño">
                   
                        <div class="text">
                            <p> Nos especializamos en el desarrollo de paginas webs y aplicaciones moviles adaptadas a tus necesidades y tus gustos.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="box-part text-center" data-aos="flip-left" data-aos-duration="1500">
                        <img src="img/secciones/programacion/icono-2.png" alt="web">
                        
                        <div class="text">
                            <p>Hacemos paginas institucionales, landing-pages, tiendas on-line, sistemas administrativos y aplicaciones webs en general. 100% adaptables a multiples dispositivos. ¡Nos adaptamos a tu presupuesto! </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="box-part text-center" data-aos="flip-left" data-aos-duration="1500">
                        <img src="img/secciones/programacion/icono-3.png" alt="movil">
                        
                        <div class="text">
                            <p>Desarrollamos aplicaciones moviles nativas orientadas a tus necesidades. Nos encargamos de todo el ciclo de desarrollo (requerimientos, interfaz, backend, testing, deployment,ect). Acercate y te asesoramos.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="box-part text-center" data-aos="flip-left" data-aos-duration="1500"> 
                        <img src="img/secciones/programacion/icono-4.png" alt="wordpress">
">
                        
                        <div class="text">
                            <p>Trabajamos con los principales CMS y LTS. Te ofrecemos paginas en Wordpress y plataformas como Woocomerce, Prestashop, Moodle y Chamilo. Tambien desarrollamos plugins personalizados. </p>
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
                    <img src="/img/secciones/programacion/programar1.jpg" alt="">
                </div>
                <div class="col-md-6">
                    <img src="/img/secciones/programacion/programar2.jpg" alt="">
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <img src="/img/secciones/programacion/programar3.jpg" alt="">
                </div>
                <div class="col-md-6">
                    <img src="/img/secciones/programacion/programar4.jpg" alt="">
                </div>
            </div>
            

        </div>
    </div>
    <div class="horizontal-divider mx-auto my-5"></div>
 



</div>
@endsection