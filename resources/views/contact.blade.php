@extends('layouts.base')

@section('content')

<div class="section">
    <div class="about" data-aos="fade-up">
        <div class="content text-center">
            <img src="img/logo-redondo.png" class="img-fluid" alt="logo-de-fondo">
            <h1>COMPUTRON</h1>
            <p>Tu Solución Informática</p>
        </div>

    </div>
    <div class="section bg-dark" data-aos="zoom-in" data-aos-duration="1500">
        <div class="py-5 container">
            <div class="content text-center">
                <h2 class="font-weight-light text-white">Contacto</h2>
                <p class="text-white mt-4">Tus consultas son bienvenidas: </p>
            </div>
            @if (Session::has('aviso'))
            <div class="alert alert-info mt-3">{{ Session::get('aviso') }}</div>
            @endif
        </div>
    </div>
</div>
<div class="section container" data-aos="fade-up">
    <div id="contact">
        <div class="row mb-3 mt-2" >
            <div class="col-lg-5 mb-lg-2 mb-4" data-aos="flip-left" data-aos-duration="1500">
                <div class="card mx-2">
                    <div class="card-body">
                     
                        <!-- Header -->
                        <div class="form-header text-dark">
                            <h3 class="mt-2"><i class="fas fa-envelope"></i> Por favor, Escríbenos:</h3>
                        </div>
                        <p class="text-dark">Te responderemos lo antes posible.</p>
                        <!-- Body -->
                       
                        <form id="form" action="{{route('contact.store')}}" method="POST" name="formulario"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="md-form mt-3">
                                <i class="fas fa-user prefix grey-text"></i>
                                <input type="text" id="form-name" name="Nombre" class="form-control"
                                    placeholder="Nombre" required>
                                @error('Nombre')
                                    <p class="text-danger">* El nombre es obligatorio</p>
                                @enderror
                            </div>
                            <div class="md-form mt-3">
                                <i class="fas fa-envelope prefix grey-text"></i>
                                <input type="text" name="Email" id="form-email" class="form-control"
                                    placeholder="Email" required>
                                @error('Email')
                                    <p class="text-danger">* El email es obligatorio</p>
                                @enderror
                            </div>
                            <div class="md-form mt-3">
                                <i class="fas fa-tag prefix grey-text"></i>
                                <input type="text" name=" Asunto" id="form-Subject" class="form-control"
                                    placeholder="Asunto" required>
                                @error('Asunto')
                                    <p class="text-danger">* El asunto es obligatorio</p>
                                @enderror
                            </div>
                            <div class="md-form mt-3">
                                <i class="fas fa-pencil-alt prefix grey-text"></i>
                                <textarea id="form-text" name="Mensaje" class="form-control md-textarea" rows="6"
                                    placeholder="mensaje" required></textarea>
                                @error('Mensaje')
                                    <p class="text-danger">* El mensaje es obligatorio</p>
                                @enderror
                            </div>
                            <div class="text-center mt-3">
                                <button type="submit" class="btn btn-success fullwidth">Enviar</button>
                            </div>
                        </form>

                    </div>
                </div>
                <!-- Form with header -->
            </div>
            <div class="col-lg-7" data-aos="flip-left" data-aos-duration="1500">
                <!--Google map-->
                <div id="map-container-section" class="z-depth-1-half map-container-section mb-4 mx-2"
                    style="height: 450px">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1811.0709175124978!2d-65.43259069144432!3d-24.79059633694238!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x941bc35e19397241%3A0x3c8748bbd61e1e9!2sCOMPUTRON!5e0!3m2!1ses-419!2sar!4v1594703955042!5m2!1ses-419!2sar" 
                    width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                    
                </div>
                <!-- Buttons-->
                <div class="row text-center">
                    <div class="col-md-4">
                        <a class="btn-floating blue accent-1">
                            <i class="fas fa-map-marker-alt"></i>
                        </a>
                        <p>Salta, 4400</p>
                        <p class="mb-md-0">Salta, Argentina</p>
                    </div>
                    <div class="col-md-4">
                        <a class="btn-floating blue accent-1">
                            <i class="fas fa-phone"></i>
                        </a>
                        <p>387-6 370 500</p>
                        <p class="mb-md-0">Lun - Vie, 8:00-22:00</p>
                    </div>
                    <div class="col-md-4">
                        <a class="btn-floating blue accent-1">
                            <i class="fas fa-envelope"></i>
                        </a>
                        <p>387-6 207 833</p>
                        <p class="mb-0">computronsalta@gmail.com</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection