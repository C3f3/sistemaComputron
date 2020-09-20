@extends('layouts.base')

@section('content')
<div class="section">
    
    <!------------------Primera Seccion --Reparacion--------------->
    <div class="section hero-image aos-item"   data-aos="zoom-in" data-aos-duration="1500">
        <div class="container-fluid text-center d-flex align-items-center"  id="recuperacion">
            <div class="content mx-auto ">
                <h2>Recuperacion y Backup</h2>
                
                <p>Recuperamos tus datos</p>
            </div>
            
        </div>         
    </div>
    <div class="section bg-dark">
        <div class="py-5 container">
            <div class="content text-center">
                <h2 class="font-weight-light text-white">Nuestro Servicios</h2>
                <p class="text-white mt-4">La recuperación de datos es una tarea compleja,por medio de la cual se recupera información de discos rígidos, RAIDS, pendrives, memorias flash y otros medios dañados. En Computron contamos con tecnología de punta junto con software inteligente y seguro para recuperar tus datos. </p>
            </div>
        </div>
    </div>
    <div class="horizontal-divider mx-auto my-md-5" id="recuperacion"></div>

    <!--cards-->
    <div class="section bg-dark">
        <div class=" py-sm-3 py-md-3 container">
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="box-part text-center"  data-aos="flip-left" data-aos-duration="1500">
                        <img src="img/secciones/recuperacion/icono-1.png" alt="privacidad">
                   
                        <div class="text">
                            <p>Te aseguramos atención personalizada y responsabilidad pero sobre todas las cosas, privacidad en tu información. </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="box-part text-center" data-aos="flip-left" data-aos-duration="1500">
                        <img src="img/secciones/recuperacion/icono-2.png" alt="dispositivos">
                        
                        <div class="text">
                            <p> Recuperamos datos de discos rigidos(mecanicos o solidos), discos externos, pendrives y memorias flash. </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="box-part text-center" data-aos="flip-left" data-aos-duration="1500">
                        <img src="img/secciones/recuperacion/icono-3.png" alt="backups">
                        
                        <div class="text">
                            <p>Hacemos formateo de discos. Borramos tu información de manera segura. Gestionamos tus backups. </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="box-part text-center" data-aos="flip-left" data-aos-duration="1500"> 
                        <img src="img/secciones/recuperacion/icono-4.png" alt="diagnostico">
                        
                        <div class="text">
                            <p>Diagnóstico y presupuesto sin cargo. Atendemos a empresas y particulares.</p>
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
                    <img src="/img/secciones/recuperacion/recuperacion1.jpg" alt="">
                </div>
                <div class="col-md-6">
                    <img src="/img/secciones/recuperacion/recuperacion2.jpg" alt="">
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <img src="/img/secciones/recuperacion/recuperacion3.jpg" alt="">
                </div>
                <div class="col-md-6">
                    <img src="/img/secciones/recuperacion/recuperacion4.jpg" alt="">
                </div>
            </div>
            

        </div>
    </div>
    <div class="horizontal-divider mx-auto my-5"></div>
 



</div>
@endsection
