@extends('layouts.base')

@section('content')
<div class="section">
    
    <!------------------Primera Seccion - Cursos--------------->
    <div class="section hero-image aos-item"   data-aos="zoom-in" data-aos-duration="1500">
        <div class="container-fluid text-center d-flex align-items-center"  id="design">
            <div class="content mx-auto ">
                <h2>Cursos</h2>
                <p>Aprende con nosotros</p>
            </div>
            
        </div>         
    </div>
    <div class="section bg-dark">
        <div class="py-5 container">
            <div class="content text-center">
                <p class="text-white mt-4">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Distinctio sit, iure quae necessitatibus repellat quo ex sint est, dolor, optio corrupti enim ullam iusto minus voluptatum fugiat. Nemo, dicta quam.</p>
            </div>
        </div>
    </div>
    <div class="horizontal-divider mx-auto my-md-5"></div>
    <!--cards-->
    <!--<div class="section bg-dark">
        <div class=" py-sm-3 py-md-3 container">
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="box-part text-center"  data-aos="flip-left" data-aos-duration="1500">
                        <img src="img/secciones/design/icono-1.png" alt="eficiencia">
                   
                        <div class="text">
                            <p> Elaboramos logotipos, folletos, tarjetas personales, flyers, catálogos, menús y mucho más. Creamos tu identidad visual.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="box-part text-center" data-aos="flip-left" data-aos-duration="1500">
                        <img src="img/secciones/design/icono-2.png" alt="calidad">
                        
                        <div class="text">
                            <p>Diseñamos material grafico para eventos sociales y corporativos. Confeccionamos invitaciones para cumpleaños, casamientos, bautismos y celebraciones en general.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="box-part text-center" data-aos="flip-left" data-aos-duration="1500">
                        <img src="img/secciones/design/icono-3.png" alt="innovacion">
                        
                        <div class="text">
                            <p>Ideamos ilustraciones para marketing. Diseñamos material para portadas de redes sociales, publicidad, perfiles corporativos, fan pages y posteos. Creamos etiquetas para packaging.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="box-part text-center" data-aos="flip-left" data-aos-duration="1500"> 
                        <img src="img/secciones/design/icono-4.png" alt="comunicacion">
                        
                        <div class="text">
                            <p>Trabajamos con fotógrafos profesionales. Hacemos producción, edición y retoque digital de fotos. También edición de videos. </p>
                        </div>
                    </div>
                </div>
            </div>
          </div>
    </div>-->

   <!-- <div class="horizontal-divider mx-auto my-5"></div>-->

    <div class="card-columns container ">
    

        <div class="card bg-ligth  text-dark p-1">
            <img class="card-img-top" src="/img/secciones/cursos/curso-card.jpeg" alt="Card image cap">
            <div class="card-body">
            <h5 class="card-title text-success">Titulo Curso</h5>
            <h6 class="card-subtitle mb-2 text-muted">profesor</h6>
            <p class="card-text">This is a longer card with supporting text below as a 
                natural lead-in to additional    content. This content is a little bit longer.</p>
            <hr>
            <p class="card-text"><i class="fa fa-check mx-1 text-success" aria-hidden="true"></i>texto para resaltar</p>
            <p class="card-text"> <i class="fa fa-check mx-1 text-success" aria-hidden="true"></i>texto para resaltar</p>
            <hr>
            <p class="card-text"> <i class="fa fa-clock-o mx-1 text-success" aria-hidden="true"></i>Duracion: <small>3 meses</small></p>
            <p class="card-text"><i class="fa fa-microphone mx-1 text-success" aria-hidden="true"></i>Modalidad: <small>Presencial</small></p>
            </div>
            <button type="button" class="btn btn-success btn-block">Ver Mas...</button>
        </div>
        <div class="card bg-ligth  text-dark p-1">
            <img class="card-img-top" src="/img/secciones/cursos/curso-card.jpeg" alt="Card image cap">
            <div class="card-body">
            <h5 class="card-title text-success">Titulo Curso</h5>
            <h6 class="card-subtitle mb-2 text-muted">Profesor</h6>
            <p class="card-text">This is a longer card with supporting text below as a 
                natural lead-in to additional    content. This content is a little bit longer.</p>
            <hr>
            <p class="card-text"><i class="fa fa-check mx-1 text-success" aria-hidden="true"></i>texto para resaltar</p>
            <p class="card-text"> <i class="fa fa-check mx-1 text-success" aria-hidden="true"></i>texto para resaltar</p>
            <hr>
            <p class="card-text"> <i class="fa fa-clock-o mx-1 text-success" aria-hidden="true"></i>Duracion: <small>3 meses</small></p>
            <p class="card-text"><i class="fa fa-microphone mx-1 text-success" aria-hidden="true"></i>Modalidad: <small>Presencial</small></p>
            </div>
            <button type="button" class="btn btn-success btn-block">Ver Mas...</button>
        </div>
        <div class="card bg-ligth  text-dark p-1">
            <img class="card-img-top" src="/img/secciones/cursos/curso-card.jpeg" alt="Card image cap">
            <div class="card-body">
            <h5 class="card-title text-success">Titulo Curso</h5>
            <h6 class="card-subtitle mb-2 text-muted">profesor</h6>
            <p class="card-text">This is a longer card with supporting text below as a 
                natural lead-in to additional    content. This content is a little bit longer.</p>
            
            <hr>
            <p class="card-text"> <i class="fa fa-clock-o mx-1 text-success" aria-hidden="true"></i>Duracion: <small>3 meses</small></p>
            <p class="card-text"><i class="fa fa-microphone mx-1 text-success" aria-hidden="true"></i>Modalidad: <small>Presencial</small></p>
            <hr>
            <p class="card-text"><i class="fa fa-check mx-1 text-success" aria-hidden="true"></i>texto para resaltar</p>
            <p class="card-text"> <i class="fa fa-check mx-1 text-success" aria-hidden="true"></i>texto para resaltar</p>
            </div>
            <button type="button" class="btn btn-success btn-block">Ver Mas...</button>
        </div>
        
        
        
    </div>

    <div class="horizontal-divider mx-auto my-5"></div>

    <!--<div class="gallery">

        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <img src="/img/secciones/design/design1.jpg" alt="">
                </div>
                <div class="col-md-6">
                    <img src="/img/secciones/design/design2.jpg" alt="">
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <img src="/img/secciones/design/design3.jpg" alt="">
                </div>
                <div class="col-md-6">
                    <img src="/img/secciones/design/design4.jpg" alt="">
                </div>
            </div>
            

        </div>
    </div>
    <div class="horizontal-divider mx-auto my-5"></div>-->
 



</div>
@endsection