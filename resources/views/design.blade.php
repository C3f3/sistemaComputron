@extends('layouts.base')

@section('content')
<div class="section">
    
    <!------------------Primera Seccion --Reparacion--------------->
    <div class="section hero-image aos-item"   data-aos="zoom-in" data-aos-duration="1500">
        <div class="container-fluid text-center d-flex align-items-center"  id="design">
            <div class="content mx-auto ">
                <h2>Diseño Grafico</h2>
                <p>Creamos la imagen visual y brindamos soluciones gráficas a particulares y empresas.</p>
            </div>
            
        </div>         
    </div>
    <div class="section bg-dark">
        <div class="py-5 container">
            <div class="content text-center">
                <h2 class="font-weight-light text-white">¿Que ofrecemos?</h2>
                <p class="text-white mt-4">Tenemos la experiencia y la formacion para darte soluciones graficas orientadas a comunicar y promover tus productos y servicios. Ofrecemos un servicio personalizado y flexible según las necesidades de cada cliente.</p>
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
                        <img src="img/secciones/design/icono-1.png" alt="eficiencia">
                   
                        <div class="text">
                            <p> Elaboramos logotipos, folletos, tarjetas personales, flyers, catálogos, menús y mucho más. Creamos tu identidad visual.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="box-part text-center" data-aos="flip-left" data-aos-duration="1500">
                        <img src="img/secciones/design/icono-2.png" alt="calidad">
                        
                        <div class="text">
                            <p>Diseñamos material grafico para eventos sociales y corporativos. Confeccionamos invitaciones para cumpleaños, casamientos, bautismos y celebraciones en general.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="box-part text-center" data-aos="flip-left" data-aos-duration="1500">
                        <img src="img/secciones/design/icono-3.png" alt="innovacion">
                        
                        <div class="text">
                            <p>Ideamos ilustraciones para marketing. Diseñamos material para portadas de redes sociales, publicidad, perfiles corporativos, fan pages y posteos. Creamos etiquetas para packaging.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="box-part text-center" data-aos="flip-left" data-aos-duration="1500"> 
                        <img src="img/secciones/design/icono-4.png" alt="comunicacion">
                        
                        <div class="text">
                            <p>Trabajamos con fotógrafos profesionales. Hacemos producción, edición y retoque digital de fotos. También edición de videos. </p>
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
                    <img src="/img/secciones/design/design1.jpg" alt="">
                </div>
                <div class="col-md-6">
                    <img src="/img/secciones/design/design2.jpg" alt="">
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <img src="/img/secciones/design/design3.jpg" alt="">
                </div>
                <div class="col-md-6">
                    <img src="/img/secciones/microelectronica/micro4.jpg" alt="">
                </div>
            </div>
            

        </div>
    </div>
    <div class="horizontal-divider mx-auto my-5"></div>
 



</div>
@endsection