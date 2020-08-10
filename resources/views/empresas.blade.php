@extends('layouts.base')

@section('content')
<div class="section">
    <div class="about">
        <div class="content text-center">
            <img src="img/logo-redondo.png" class="img-fluid" alt="logo-de-fondo">

            <h1>COMPUTRON</h1>
            <p>Tu Solucion Informatica</p>
        </div>
    </div>
    <div class="section bg-dark">
        <div class="py-5 container">
            <div class="content text-center">
                <h2 class="font-weight-light text-white">Nuestro Servicios Para Empresas</h2>
                <p class="text-white mt-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis iure,
                    dolor vel eos corrupti in recusandae incidunt ipsum nihil praesentium doloremque
                    commodi
                    hic neque quae illo veniam repudiandae illum repellat?</p>
            </div>
        </div>
    </div>
    
    <div class="horizontal-divider mx-auto my-md-5" id="gaming"></div>

    <!------------------Primera Seccion --Reparacion--------------->
    <div class="section hero-image aos-item"   data-aos="zoom-in" data-aos-duration="1500">
        <div class="container-fluid text-center d-flex align-items-center"  id="reparacion">
            <div class="content mx-auto ">
                <h2>Reparacion de</h2>
                <h2>PC y Notebook</h2>
                <p>Descripcion</p>
            </div>
            
        </div>         
    </div>
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


    <!------------------Segunda Seccion --Redes y Servidores--------------->
    <div class="section hero-image aos-item"   data-aos="zoom-in" data-aos-duration="1500">
        <div class="container-fluid text-center d-flex align-items-center my-auto"  id="redes">
            <div class="content mx-auto ">
                <h2>Redes y Servidores</h2>
                
                <p>Nos encargamos de la instalación y configuración de redes cableadas e inalámbricas</p>
            </div>
            
        </div>         
    </div>
    <!--cards-->
    <div class="section bg-dark">
        <div class=" py-sm-3 py-md-3 container">
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="box-part text-center"  data-aos="flip-left" data-aos-duration="1500">
                        <img src="img/about/eficienciaVerde.png" alt="eficiencia">
                   
                        <div class="text">
                            <p> Instalaciones de redes informáticas, cableado estructurado, redes de UTP y fibra óptica</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="box-part text-center" data-aos="flip-left" data-aos-duration="1500">
                        <img src="img/about/calidadVerde.png" alt="calidad">
                        
                        <div class="text">
                            <p>Configuración de router, redes inalámbricas, Wifi y LAN</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="box-part text-center" data-aos="flip-left" data-aos-duration="1500">
                        <img src="img/about/innovacionVerde.png" alt="innovacion">
                        
                        <div class="text">
                            <p>Administración de dominios y de redes. Control de usuarios, derechos y control de accesos </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="box-part text-center" data-aos="flip-left" data-aos-duration="1500"> 
                        <img src="img/about/comunicacionVerde.png" alt="comunicacion">
                        
                        <div class="text">
                            <p>Configuración de Internet, configuración de correo electrónico, configuración de acceso remoto</p>
                        </div>
                    </div>
                </div>
            </div>
          </div>
    </div>

     <!------------------Segunda Seccion --Camaras de Seguridad--------------->
     <div class="section hero-image aos-item"   data-aos="zoom-in" data-aos-duration="1500">
        <div class="container-fluid text-center d-flex align-items-center"  id="camaras">
            <div class="content mx-auto ">
                <h2>Camaras de Seguridad y Alarmas </h2>
                
                <p></p>
            </div>
            
        </div>         
    </div>
    <!--cards-->
    <div class="section bg-dark">
        <div class=" py-sm-3 py-md-3 container">
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="box-part text-center"  data-aos="flip-left" data-aos-duration="1500">
                        <img src="img/about/eficienciaVerde.png" alt="eficiencia">
                   
                        <div class="text">
                            <p> Instalaciones de redes informáticas, cableado estructurado, redes de UTP y fibra óptica</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="box-part text-center" data-aos="flip-left" data-aos-duration="1500">
                        <img src="img/about/calidadVerde.png" alt="calidad">
                        
                        <div class="text">
                            <p>Configuración de router, redes inalámbricas, Wifi y LAN</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="box-part text-center" data-aos="flip-left" data-aos-duration="1500">
                        <img src="img/about/innovacionVerde.png" alt="innovacion">
                        
                        <div class="text">
                            <p>Administración de dominios y de redes. Control de usuarios, derechos y control de accesos </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="box-part text-center" data-aos="flip-left" data-aos-duration="1500"> 
                        <img src="img/about/comunicacionVerde.png" alt="comunicacion">
                        
                        <div class="text">
                            <p>Configuración de Internet, configuración de correo electrónico, configuración de acceso remoto</p>
                        </div>
                    </div>
                </div>
            </div>
          </div>
    </div>
</div>

@endsection