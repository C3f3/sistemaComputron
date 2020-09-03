@extends('layouts.base')

@section('content')
<div class="section">
    
    <!------------------televisores--------------->
    <div class="section hero-image aos-item"   data-aos="zoom-in" data-aos-duration="1500">
        <div class="container-fluid text-center d-flex align-items-center"  id="televisores">
            <div class="content mx-auto ">
                <h2>Televisores, Smart tV, LCDs
                <p>¡Arreglamos tu tele!</p>
            </div>
            
        </div>         
    </div>
    <div class="section bg-dark">
        <div class="py-5 container">
            <div class="content text-center">
                <h2 class="font-weight-light text-white">Nuestro Servicio</h2>
                <p class="text-white mt-4 text-justify">Reparamos fallas en Televisores LCD LED  y  SMART TV. Una vez recibido el televisor en nuestro taller (consulte nuestros SERVICIOS EXPRESS), hacemos el diagnostico y te los comunicamos lo mas rapido posible. Trabajos garantizados y presupuestos sin cargo.</p>
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
                        <img src="img/secciones/reparacion/icono-1.png" alt="eficiencia">
                   
                        <div class="text">
                            <p>Realizamos mantenimiento de equipos, formateo  y configuraciones para mejorar el rendimiento.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="box-part text-center" data-aos="flip-left" data-aos-duration="1500">
                        <img src="img/secciones/reparacion/icono-2.png" alt="calidad">
                        
                        <div class="text">
                            <p>Instalación  y recambio de hardware en general: discos rígidos, memorias, placas, coolers, fuentes de alimentación y mucho más.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="box-part text-center" data-aos="flip-left" data-aos-duration="1500">
                        <img src="img/secciones/reparacion/icono-3.png" alt="innovacion">
                        
                        <div class="text">
                            <p>Hacemos instalación de SO, antivirus y programas en gral. Formateamos tu compu para un mejor funcionamiento.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="box-part text-center" data-aos="flip-left" data-aos-duration="1500"> 
                        <img src="img/secciones/reparacion/icono-4.png" alt="comunicacion">
                        
                        <div class="text">
                            <p>Instalación de drivers, impresoras, escaners. Recuperación de datos. Reprogramacion de bios.</p>
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