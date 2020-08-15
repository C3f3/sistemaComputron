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
    <div class="horizontal-divider mx-auto my-md-5"></div>

    <div class="gallery">

        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <img src="/img/secciones/gaming/gaming1.jpg" alt="">
                </div>
                <div class="col-md-6">
                    <img src="/img/secciones/gaming/gaming2.jpg" alt="">
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <img src="/img/secciones/gaming/gaming3.jpg" alt="">
                </div>
                <div class="col-md-6">
                    <img src="/img/secciones/gaming/gaming4.jpg" alt="">
                </div>
            </div>
            

        </div>
    </div>
    <div class="horizontal-divider mx-auto my-md-5"></div>




</div>
@endsection