@extends('layouts.base')

@section('content')
<div class="section">
    
    <!------------------Primera Seccion --Reparacion--------------->
    <div class="section hero-image aos-item"   data-aos="zoom-in" data-aos-duration="1500">
        <div class="container-fluid text-center d-flex align-items-center"  id="express">
            <div class="content mx-auto ">
                <h2>Servicios Express</h2>
                <p>Descripcion</p>
            </div>
            
        </div>         
    </div>
    <div class="section bg-dark">
        <div class="py-5 container">
            <div class="content text-center">
                <h2 class="font-weight-light text-white">Nuestro Servicios</h2>
                <p class="text-white mt-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis iure,
                    dolor vel eos corrupti in recusandae incidunt ipsum nihil praesentium doloremque
                    commodi
                    hic neque quae illo veniam repudiandae illum repellat?</p>
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
                        <img src="img/about/eficienciaVerde.png" alt="eficiencia">
                   
                        <div class="text">
                            <p> Nos ocupamos de realizar mantenimiento general del equipo, limpieza de archivos y optimizamos para un mejor rendimiento</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="box-part text-center" data-aos="flip-left" data-aos-duration="1500">
                        <img src="img/about/calidadVerde.png" alt="calidad">
                        
                        <div class="text">
                            <p>Instalación  y recambio de hardware en general: discos rígidos, memorias, placas, coolers, fuentes de alimentación y demas</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="box-part text-center" data-aos="flip-left" data-aos-duration="1500">
                        <img src="img/about/innovacionVerde.png" alt="innovacion">
                        
                        <div class="text">
                            <p>Hacemos formateo de computadora, instalacion de SO, antivirus, y programas. Recuperación de datos </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="box-part text-center" data-aos="flip-left" data-aos-duration="1500"> 
                        <img src="img/about/comunicacionVerde.png" alt="comunicacion">
                        
                        <div class="text">
                            <p>Instalación de drivers, impresoras, escaners.</p>
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
                    <img src="/img/secciones/express/express1.jpg" alt="">
                </div>
                <div class="col-md-6">
                    <img src="/img/secciones/express/express2.jpg" alt="">
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <img src="/img/secciones/express/express3.jpg" alt="">
                </div>
                <div class="col-md-6">
                    <img src="/img/secciones/express/express4.jpg" alt="">
                </div>
            </div>
            

        </div>
    </div>
    <div class="horizontal-divider mx-auto my-5"></div>
 
</div>
@endsection