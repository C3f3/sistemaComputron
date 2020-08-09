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
                <h2 class="font-weight-light text-white">Nuestro Servicios</h2>
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

    <!------------------Segunda Seccion --Gaming--------------->
    <div class="section hero-image aos-item"   data-aos="zoom-in" data-aos-duration="1500">
        <div class="container-fluid text-center d-flex align-items-center"  id="gaming">
            <div class="content mx-auto ">
                <h2>Gaming</h2>
                
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
                            <p>Nada supera un equipo a la medida de tus necesidades. Nosotros te asesoramos, armamos y configuramos tu computadora adaptada a tus requerimientos</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="box-part text-center" data-aos="flip-left" data-aos-duration="1500">
                        <img src="img/about/calidadVerde.png" alt="calidad">
                        
                        <div class="text">
                            <p>Armamos PC gamers, PC para diseño grafico, equipos para oficina, o de uso particular. </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="box-part text-center" data-aos="flip-left" data-aos-duration="1500">
                        <img src="img/about/innovacionVerde.png" alt="innovacion">
                        
                        <div class="text">
                            <p>Tu propio PC siempre tiene ventajas sobre rendimiento,personalizacion y precio.</p>
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

    <!------------------Tercera Seccion --Diseño--------------->
    <div class="section hero-image aos-item"   data-aos="zoom-in" data-aos-duration="1500">
        <div class="container-fluid text-center d-flex align-items-center"  id="design">
            <div class="content mx-auto ">
                <h2>Diseño Grafico</h2>
                
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
                            <p>Diseñanos tu identidad visual, creamos logotipos, flyers, tarjetas personales, folletos. Estamos para apoyar tu proyecto.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="box-part text-center" data-aos="flip-left" data-aos-duration="1500">
                        <img src="img/about/calidadVerde.png" alt="calidad">
                        
                        <div class="text">
                            <p>Hacemos diseño grafico para eventos, invitaciones a casamientos, menus, invitaciones, cumpleaños, bautismos,ect. </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="box-part text-center" data-aos="flip-left" data-aos-duration="1500">
                        <img src="img/about/innovacionVerde.png" alt="innovacion">
                        
                        <div class="text">
                            <p>Tambien podemos contribuir con producción fotográfica, edición de fotos, retoque digital, edicion de videos.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="box-part text-center" data-aos="flip-left" data-aos-duration="1500"> 
                        <img src="img/about/comunicacionVerde.png" alt="comunicacion">
                        
                        <div class="text">
                            <p>Potenciamos tus redes y fan pages. Hacemos Social Media, Fotografia para redes,banners para web,  flyers y videos para posteos y publicidad. </p>
                        </div>
                    </div>
                </div>
            </div>
          </div>
    </div>


    <!------------------Cuarta Seccion --Microelecronica--------------->
    <div class="section hero-image aos-item"   data-aos="zoom-in" data-aos-duration="1500">
        <div class="container-fluid text-center d-flex align-items-center"  id="microelectronica">
            <div class="content mx-auto ">
                <h2>microelectronica</h2>
                
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
                            <p>Diseñanos tu identidad visual, creamos logotipos, flyers, tarjetas personales, folletos. Estamos para apoyar tu proyecto.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="box-part text-center" data-aos="flip-left" data-aos-duration="1500">
                        <img src="img/about/calidadVerde.png" alt="calidad">
                        
                        <div class="text">
                            <p>Hacemos diseño grafico para eventos, invitaciones a casamientos, menus, invitaciones, cumpleaños, bautismos,ect. </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="box-part text-center" data-aos="flip-left" data-aos-duration="1500">
                        <img src="img/about/innovacionVerde.png" alt="innovacion">
                        
                        <div class="text">
                            <p>Tambien podemos contribuir con producción fotográfica, edición de fotos, retoque digital, edicion de videos.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="box-part text-center" data-aos="flip-left" data-aos-duration="1500"> 
                        <img src="img/about/comunicacionVerde.png" alt="comunicacion">
                        
                        <div class="text">
                            <p>Potenciamos tus redes, fan pages. Hacemos Social Media, Fotografia para redes, flyers y videos para posteos y publicidad. </p>
                        </div>
                    </div>
                </div>
            </div>
          </div>
    </div>



</div>
@endsection