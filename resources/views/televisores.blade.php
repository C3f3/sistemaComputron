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
                <p class="text-white mt-4 text-justify">Reparamos fallas en Televisores LCD LED  y  SMART TV. 
                    Una vez recibido el televisor en nuestro taller o retirado del domicilio(consulte nuestros SERVICIOS EXPRESS), hacemos el diagnostico y te los comunicamos lo mas rapido posible. 
                    Trabajos garantizados y presupuestos sin cargo.</p>
            </div>
        </div>
    </div>
    <div class="horizontal-divider mx-auto my-md-5" id="gaming"></div>

    <!--cards-->
    <div class="section bg-dark">
        <div class=" py-sm-3 py-md-3 container">
            <div class="row">
                <div class="col-lg-4 col-sm-12">
                    <div class="box-part text-center"  data-aos="flip-left" data-aos-duration="1500">
                        <img src="img/secciones/televisores/icono-1.png" alt="garantia">
                   
                        <div class="text">
                            <p>No pases un minuto mas con tu tele roto, reparalo hoy en nuestro laboratorio tecnico. Garantia local asegurada.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-12">
                    <div class="box-part text-center" data-aos="flip-left" data-aos-duration="1500">
                        <img src="img/secciones/televisores/icono-2.png" alt="reparacion">
                        
                        <div class="text">
                            <p>Hacemos hacemos diagnosticos generales. Reparamos las principales fallas. Recambios de LEDs, filtros y capacitores. </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-12">
                    <div class="box-part text-center" data-aos="flip-left" data-aos-duration="1500">
                        <img src="img/secciones/televisores/icono-3.png" alt="electronica">
                        
                        <div class="text">
                            <p>Realizamos trabajos a nivel de microelectronica. Reprogramacion de EEPROM. Reducción de voltajes.</p>
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
                    <img src="/img/secciones/televisores/tele1.jpg" alt="tele1">
                </div>
                <div class="col-md-6">
                    <img src="/img/secciones/televisores/tele2.jpg" alt="tele2">
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <img src="/img/secciones/televisores/tele3.jpg" alt="tele3">
                </div>
                <div class="col-md-6">
                    <img src="/img/secciones/televisores/tele4.jpg" alt="tele4">
                </div>
            </div>
            

        </div>
    </div>
    <div class="horizontal-divider mx-auto my-5"></div>
 



</div>
@endsection