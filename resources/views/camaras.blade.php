@extends('layouts.base')

@section('content')
<div class="section">
    
    <!------------------camaras--------------->
    <div class="section hero-image aos-item"   data-aos="zoom-in" data-aos-duration="1500">
        <div class="container-fluid text-center d-flex align-items-center"  id="camaras">
            <div class="content mx-auto ">
                <h2>Camaras de  seguridad</h2>
                <p>La solución que necesitas.</p>
            </div>
            
        </div>         
    </div>
    <div class="section bg-dark">
        <div class="py-5 container">
            <div class="content text-center">
                <h2 class="font-weight-light text-white">Sobre el Servicio</h2>
                <p class="text-white mt-4">Hace un tiempo pensar que un negocio o particular pueda tener su propio sistema de cámaras de seguridad implicaba un gran costo. 
                    Hoy es posible tener el control total de nuestros bienes con un sistema de vigilancia a precios muy económicos, que hasta puede ser monitoreado desde internet por medio de cualquier dispositivo.</p>
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
                        <img src="img/secciones/camaras/icono-1.png" alt="eficiencia">
                   
                        <div class="text">
                            <p>Instalaciones en exterior e interior de sistema CCTV o IP. Podra ver su vivienda o negocio a traves de internet en vivo las 24hs. </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="box-part text-center" data-aos="flip-left" data-aos-duration="1500">
                        <img src="img/secciones/camaras/icono-2.png" alt="calidad">
                        
                        <div class="text">
                            <p>Realizamos trabajos en interior y exterior, adaptandolos al tamaño de los espacios y la distribucion de los elementos. Sin puntos ciegos.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="box-part text-center" data-aos="flip-left" data-aos-duration="1500">
                        <img src="img/secciones/camaras/icono-3.png" alt="innovacion">
                        
                        <div class="text">
                            <p>Trabajamos con varias marcas. Aseguramos calidad y seguridad. Nos adaptamos a tu presupuesto. </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                   
                    <div class="box-part text-center" data-aos="flip-left" data-aos-duration="1500"> 
                        <img src="img/secciones/camaras/icono-4.png" alt="comunicacion">
                        <div class="text">
                            <p>Luego de la instalación te enseñamos a usar el sistema de camaras, las visualizaciones de las grabaciones y vistas remota.</p>
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
                    <img src="/img/secciones/reparacion/reparacion1.jpg" alt="">
                </div>
                <div class="col-md-6">
                    <img src="/img/secciones/reparacion/reparacion2.jpg" alt="">
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <img src="/img/secciones/reparacion/reparacion3.jpg" alt="">
                </div>
                <div class="col-md-6">
                    <img src="/img/secciones/reparacion/reparacion4.jpg" alt="">
                </div>
            </div>
            

        </div>
    </div>
    <div class="horizontal-divider mx-auto my-5"></div>
 



</div>
@endsection