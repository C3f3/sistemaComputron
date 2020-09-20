@extends('layouts.base')

@section('content')
<div class="section">
    
    <!------------------Primera Seccion --redes--------------->
    <div class="section hero-image aos-item"   data-aos="zoom-in" data-aos-duration="1500">
        <div class="container-fluid text-center d-flex align-items-center"  id="redes">
            <div class="content mx-auto ">
                <h2>Redes y Servidores</h2>
                <p>Optimizamos tu conexión</p>
            </div>
            
        </div>         
    </div>

    <div class="section bg-dark">
        <div class="py-5 container">
            <div class="content text-center">
                <h2 class="font-weight-light text-white">Nuestro Servicios</h2>
                <p class="text-white mt-4">Ofrecemos soluciones integrales adecuadas a tus necesidades, haciendo que tu red sea más rápida y segura. Configuramos y optimizamos servidores.</p>
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
                        <img src="img/secciones/redes/icono-1.png" alt="eficiencia">
                   
                        <div class="text">
                            <p>Instalamos redes informáticas, cableado estructurado, redes de UTP y fibra óptica</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="box-part text-center" data-aos="flip-left" data-aos-duration="1500">
                        <img src="img/secciones/redes/icono-2.png" alt="calidad">
                        
                        <div class="text">
                            <p>Instalación y configuración de routers, redes inalámbricas, Wifi y LAN</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="box-part text-center" data-aos="flip-left" data-aos-duration="1500">
                        <img src="img/secciones/redes/icono-3.png" alt="innovacion">
                        
                        <div class="text">
                            <p>Administración de dominios y de redes. Control de usuarios, derechos y control de accesos. </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="box-part text-center" data-aos="flip-left" data-aos-duration="1500"> 
                        <img src="img/secciones/redes/icono-4.png" alt="comunicacion">
                        
                        <div class="text">
                            <p>Hacemos instalacion,configuracion y mantenimiento de servidores para empresas.</p>
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
                    <img src="/img/secciones/redes/redes1.jpg" alt="">
                </div>
                <div class="col-md-6">
                    <img src="/img/secciones/redes/redes2.jpg" alt="">
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <img src="/img/secciones/redes/redes3.jpg" alt="">
                </div>
                <div class="col-md-6">
                    <img src="/img/secciones/redes/redes4.jpg" alt="">
                </div>
            </div>
            

        </div>
    </div>
    <div class="horizontal-divider mx-auto my-5"></div>
 



</div>
@endsection