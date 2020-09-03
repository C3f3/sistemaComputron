@extends('layouts.base')

@section('content')
<div class="section">
    
    <!------------------Primera Seccion --Reparacion--------------->
    <div class="section hero-image aos-item"   data-aos="zoom-in" data-aos-duration="1500">
        <div class="container-fluid text-center d-flex align-items-center"  id="express">
            <div class="content mx-auto ">
                <h2>Servicios Express</h2>
                <p>Trabajos inmediatos</p>
            </div>
            
        </div>         
    </div>
    <div class="section bg-dark">
        <div class="py-5 container">
            <div class="content text-center">
                <h2 class="font-weight-light text-white">Nuestros Servicios</h2>
                <p class="text-white mt-4">Ofrecemos la posibilidad de realizar trabajos inmeditatos para tu mayor comodidad, tales como instalacion y configuracionde de impresoras en red, instalacion de programas, formateo 
                    de sistema operativo y mucho mas. Consultanos!! </p>
            </div>
        </div>
    </div>
    <div class="horizontal-divider mx-auto my-md-5"></div>
    <!--cards-->
 

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