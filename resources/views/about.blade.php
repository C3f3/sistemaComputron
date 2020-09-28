@extends('layouts.base')

@section('content')

<div class="section">
    <div class="about aos-item" data-aos="fade-up">
        <div class="content text-center">
            <img src="img/logo-redondo.png" class="img-fluid" alt="logo-de-fondo">
            <h1>COMPUTRON</h1>
            <p>Tu Solución Informática</p>
        </div>

    </div>
    <div class="section bg-dark aos-item" data-aos="zoom-in" data-aos-duration="1500">
        <div class="container mt-5">
            <div class="row">
                <div class="col-md-6 text-center py-3" >
                    <h2 class="font-weight-light text-white">Sobre Nosotros</h2>
                    <p class="mt-4">Somos un emprendimiento constituido por un grupo de jóvenes especializados en tecnología. 
                        Nos abocamos a brindar soluciones dirigidas tanto al ámbito corporativo como al usuario medio.</p>
                        <p class="mt-4"> 
                        Buscamos afrontar cada desafío con una solución personalizada que se adapte a la realidad de cada cliente. 
                        Nuestro objetivo es posicionarnos como referentes en innovación tecnológica.</p>
                    <p class="mt-4">Acércate, atendemos cada consulta de forma personalizada. 
                        Estamos dispuestos a asesorarte para brindar la solución que buscas...</p>
                </div>
                <div class="col-md-6 ">
                    <img src="./img/about/repair-about.jpg" alt="" class="image-card">
                </div>
            </div>
        </div>
    </div>
</div>
<div class="mx-auto horizontal-divider my-5">
</div>

<!--cards-->
<div class="section bg-dark">
    <div class=" py-sm-3 py-md-3 container">
        <div class="content text-center">
            <h2 class="font-weight-light text-white">Algunos de los valores que nos diferencian</h2>
        </div>
        <div class="row">
            <div class="col-lg-3 col-sm-6">
                <div class="box-part text-center"  data-aos="flip-left" data-aos-duration="1500">
                    <img src="img/about/honestidad.png" alt="Honestidad">
                    <div class="title">
                        <h4>Honestidad</h4>
                    </div>
                    <div class="text">
                        <p>Queremos que nuestros clientes confíen en nosotros y en nuestro trabajo. Aseguramos transparencia y confiabilidad. 
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="box-part text-center" data-aos="flip-left" data-aos-duration="1500">
                    <img src="img/about/calidad.png" alt="calidad">
                    <div class="title">
                        <h4>Calidad</h4>
                    </div>
                    <div class="text">
                        <p>Queremos aportarte valor. Buscamos ofrecer productos y servicios superiores y a un precio accesible.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="box-part text-center" data-aos="flip-left" data-aos-duration="1500">
                    <img src="img/about/innovacion.png" alt="innovacion">
                    <div class="title">
                        <h4>Innovación</h4>
                    </div>
                    <div class="text">
                        <p>Nos capacitamos constantemente en nuevas tecnologías y metodologías. 
                            Nuestro objetivo es llevar estas soluciones a las personas que las necesitan.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="box-part text-center" data-aos="flip-left" data-aos-duration="1500"> 
                    <img src="img/about/comunicacion.png" alt="comunicacion">
                    <div class="title">
                        <h4>Comunicación</h4>
                    </div>
                    <div class="text">
                        <p>Aspiramos a que la relación con nuestros clientes y socios sea sana, cordial, constructiva y fluida. 
                            Creemos en el enriquecimiento personal de todas las partes.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="mx-auto horizontal-divider my-5">
</div>
<div class="section testimonials mt-3" data-aos="zoom-in" data-aos-duration="1500">
    <div class="container">
        <div class="content-text mb-0 text-center">
            <h2 class="font-weight-light text-white">Mira lo que nuestros clientes dicen de nosotros</h2>
        </div>
        <div class="col-lg-10 pt-lg-2 pt-sm-0 mt-lg-1 mt-sm-0 pb-2 offset-lg-1 bg-dark text-light">
            <div id="client-testimonial-carousel" class="carousel slide" data-ride="carousel" style="height:250px;">
                <div class="carousel-inner">
                    <div class="carousel-item active text-center">
                        <blockquote class="blockquote text-center">
                            <p class="mb-0">Excelente servicio. Lleve mi Smart y en tiempo y forma me lo entregaron. Felicitaciones!!
                            </p>
                            <footer class="blockquote-footer">Jairo Vasquez<cite
                                    title="Source Title">Cliente</cite></footer>
                            <!-- Client review stars -->
                            <!-- "fas fa-star" for a full star, "far fa-star" for an empty star, "far fa-star-half-alt" for a half star. -->
                            <p class="client-review-stars">
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star-half"></ion-icon>
                            </p>
                        </blockquote>
                    </div>
                    <div class="carousel-item text-center ">
                        <blockquote class="blockquote text-center">
                            <p class="mb-0">Me encanto la asistencia y la atención. Los recomiendo. Se nota el compromiso con sus 
                                clientes. Gracias Computron.
                            </p>
                            <footer class="blockquote-footer">Marcos Cardozo <cite
                                    title="Source Title">Cliente</cite></footer>
                            <!-- Client review stars -->
                            <!-- "fas fa-star" for a full star, "far fa-star" for an empty star, "far fa-star-half-alt" for a half star. -->
                            <p class="client-review-stars">
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star"></ion-icon>
                            </p>
                        </blockquote>
                    </div>
                    <div class="carousel-item text-center">
                        <blockquote class="blockquote text-center">
                            <p class="mb-0"> A person who never made a mistake never
                                tried anything new.
                            </p>
                            <footer class="blockquote-footer">Albert Einstein <cite
                                    title="Source Title">genius</cite></footer>
                            <!-- Client review stars -->
                            <!-- "fas fa-star" for a full star, "far fa-star" for an empty star, "far fa-star-half-alt" for a half star. -->
                            <p class="client-review-stars">
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star"></ion-icon>
                            </p>
                        </blockquote>
                    </div>
                </div>
                <ol class="carousel-indicators">
                    <li data-target="#client-testimonial-carousel" data-slide-to="0" class="active"></li>
                    <li data-target="#client-testimonial-carousel" data-slide-to="1"></li>
                    <li data-target="#client-testimonial-carousel" data-slide-to="2"></li>
                </ol>
            </div>
        </div>
    </div>
</div>
@endsection