@extends('layouts.base')

@section('content')
<div class="section">
    
    <!------------------Primera Seccion --Reparacion--------------->
    <div class="section hero-image aos-item"   data-aos="zoom-in" data-aos-duration="1500">
        <div class="container-fluid text-center d-flex align-items-center"  id="equipos">
            <div class="content mx-auto ">
                <h2>Armamos los equipos para tu emprendimiento</h2>
                
                <p>Potencia tu negocio</p>
            </div>
            
        </div>         
    </div>
    <div class="section bg-dark">
        <div class="py-5 container">
            <div class="content text-center">
                <h2 class="font-weight-light text-white">Nuestro Servicio</h2>
                <p class="text-white mt-4">Asesoramos en forma personal en el proceso de compra de partes y componentes de PC con los mejores precios del mercado, y los componentes de mayor calidad. Además realizamos el mantenimiento adecuado de las mismas.</p>
            </div>
        </div>
    </div>
    <div class="horizontal-divider mx-auto my-md-5" id="gaming"></div>

    <!--cards-->
    <div class="section bg-dark">
        <div class=" py-sm-3 py-md-3 container">
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="box-part text-center"  data-aos="flip-left" data-aos-duration="1500">
                        <img src="img/secciones/equipos/icono-1.png" alt="eficiencia">
                   
                        <div class="text">
                            <p> Lo mejor es tener un equipo a medida para que cumpla con tus expectativas. Nosotros te armamos y configuramos tu computadora adaptada a las necesidades de tu negocio.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="box-part text-center" data-aos="flip-left" data-aos-duration="1500">
                        <img src="img/secciones/equipos/icono-2.png" alt="calidad">
                        
                        <div class="text">
                            <p>Trabajamos con PC para diseño grafico, equipo para oficina, o de uso particular</p>                        
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="box-part text-center" data-aos="flip-left" data-aos-duration="1500">
                        <img src="img/secciones/equipos/icono-3.png" alt="innovacion">
                        
                        <div class="text">
                            <p>Armar un PC propio tiene ventajas sobre personalización, precio y actualización.

                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="box-part text-center" data-aos="flip-left" data-aos-duration="1500"> 
                        <img src="img/secciones/equipos/icono-4.png" alt="comunicacion">
                        
                        <div class="text">
                            <p>Vas tener el control entero del hardware decidiendo sobre la calidad de los componentes. Nosotros te asesoramos</p>
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
                    <img src="/img/secciones/equipos/computadora1.jpg" alt="">
                </div>
                <div class="col-md-6">
                    <img src="/img/secciones/equipos/computadora2.jpg" alt="">
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <img src="/img/secciones/equipos/computadora3.jpg" alt="">
                </div>
                <div class="col-md-6">
                    <img src="/img/secciones/equipos/computadora4.jpg" alt="">
                </div>
            </div>
            

        </div>
    </div>
    <div class="horizontal-divider mx-auto my-5"></div>
 



</div>
@endsection