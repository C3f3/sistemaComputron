@extends('layouts.base')

@section('content')
<div class="section">
    
    <!------------------Primera Seccion --Reparacion--------------->
    <div class="section hero-image aos-item"   data-aos="zoom-in" data-aos-duration="1500">
        <div class="container-fluid text-center d-flex align-items-center"  id="consultoria">
            <div class="content mx-auto ">
                <h2>Te asesoramos en tecnologia</h2>
                
                <p>Te apoyamos en tu crecimiento.</p>
            </div>
            
        </div>         
    </div>
    <div class="section bg-dark">
        <div class="py-5 container">
            <div class="content text-center">
                <h2 class="font-weight-light text-white">Nuestro Servicios</h2>
                <p class="text-white mt-4">Te ofrecemos planes mensuales de servicio tecnico para pequeñas y medianas empresas. Te asesoramos
                    en diseño de software y requerimientos de hardware.
                </p>
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
                        <img src="img/secciones/consultoria/icono1.png" alt="servicio tecnico">
                   
                        <div class="text">
                            <p>Servicio tecnico periodico que prioriza tus necesidades y tu presupuesto.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="box-part text-center" data-aos="flip-left" data-aos-duration="1500">
                        <img src="img/secciones/consultoria/icono2.png" alt="asesoria">
                        
                        <div class="text">
                            <p>Planes de mantenimiento preventivo para disminuir los problemas con hardware y software. Te ayudamos a decidir entre distintas soluciones tecnologicas.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="box-part text-center" data-aos="flip-left" data-aos-duration="1500">
                        <img src="img/secciones/consultoria/icono3.png" alt="marketing">
                        
                        <div class="text">
                            <p>Te asesoramos en estrategias de marketing, e-commerce  y posicionamiento en redes.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="box-part text-center" data-aos="flip-left" data-aos-duration="1500"> 
                        <img src="img/secciones/consultoria/icono4.png" alt="objetivo">
                        
                        <div class="text">
                            <p>Nuestro objetivo es que tu emprendimiento tenga todo lo necesario para trabajar de forma segura y eficiente.</p>
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
                    <img src="/img/secciones/consultoria/consultoria1.jpg" alt="galeria1">
                </div>
                <div class="col-md-6">
                    <img src="/img/secciones/recuperacion/recuperacion2.jpg" alt="galeria2">
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <img src="/img/secciones/consultoria/consultoria3.jpg" alt="galeria3">
                </div>
                <div class="col-md-6">
                    <img src="/img/secciones/recuperacion/recuperacion4.jpg" alt="galeria4">
                </div>
            </div>
            

        </div>
    </div>
    <div class="horizontal-divider mx-auto my-5"></div>
 



</div>
@endsection
