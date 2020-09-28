@extends('layouts.base')

@section('content')
<div class="section">
    
    <!------------------Primera Seccion --Reparacion--------------->
    <div class="section hero-image aos-item"   data-aos="zoom-in" data-aos-duration="1500">
        <div class="container-fluid text-center d-flex align-items-center"  id="microelectronica">
            <div class="content mx-auto ">
                <h2>Microelectronica</h2>
                <p>Experiencia y calidad en reparaciones electrónicas..</p>
            </div>
            
        </div>         
    </div>

    <div class="section bg-dark">
        <div class="py-5 container">
            <div class="content text-center">
                <h2 class="font-weight-light text-white">Nuestros servicios</h2>
                <p class="text-white mt-4">Contamos con la mejor tecnologia para optimizar los diagnosticos y entregarle un trabajo garantizado.
                    Nuestros servicios van desde computadoras, articulos del hogar, tv, audio y mucho más.
                </p>
            </div>
        </div>
    </div>
    <div class="horizontal-divider mx-auto my-md-5"></div>
    <!--cards-->
    <div class="section bg-dark">
        <div class=" py-sm-3 py-md-3 container">
            <div class="row">
                <div class="col-lg-4 col-sm-4">
                    <div class="box-part text-center"  data-aos="flip-left" data-aos-duration="1500">
                        <img src="img/secciones/microelectronica/icono-1.png" alt="eficiencia">
                   
                        <div class="text">
                            <p> Servicio tecnico electronico en gral. Nuestros trabajos vienen con garantia.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-4">
                    <div class="box-part text-center" data-aos="flip-left" data-aos-duration="1500">
                        <img src="img/secciones/microelectronica/icono-2.png" alt="calidad">
                        
                        <div class="text">
                            <p>Reparación de placa madre, consolas de videojuegos, placas de video y electrodomesticos. Si es electronico, lo reparamos...</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-4">
                    <div class="box-part text-center" data-aos="flip-left" data-aos-duration="1500">
                        <img src="img/secciones/microelectronica/icono-3.png" alt="innovacion">
                        
                        <div class="text">
                            <p>Hacemos presupuesto sin cargo en nuestro taller técnico. Aceptamos todas las marcas. </p>
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
                    <img src="/img/secciones/microelectronica/micro1.jpg" alt="">
                </div>
                <div class="col-md-6">
                    <img src="/img/secciones/microelectronica/micro2.jpg" alt="">
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <img src="/img/secciones/microelectronica/micro3.jpg" alt="">
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