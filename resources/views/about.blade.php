@extends('layouts.base')

@section('content')

<div class="section">
    <div class="about aos-item" data-aos="fade-up">
        <div class="content text-center">
            <img src="img/logo-redondo.png" class="img-fluid" alt="logo-de-fondo">
            <h1>COMPUTRON</h1>
            <p>Tu Solucion Informatica</p>
        </div>

    </div>
    <div class="section bg-dark aos-item" data-aos="zoom-in" data-aos-duration="1500">
        <div class="container mt-5">
            <div class="row">
                <div class="col-md-6 text-center py-3" >
                    <h2 class="font-weight-light text-white">Sobre Nosotros</h2>
                    <p class="mt-4">Somos un emprendimiento constituido por un grupo de jóvenes especializados en tecnología. 
                        Nos abocamos a brindar soluciones tanto al ámbito corporativo como al usuario medio. 
                        Buscamos afrontar cada desafío con una solución personalizada que se adapte a la realidad de cada cliente. 
                        Nuestro objetivo es posicionarnos como referentes en innovación tecnológica.</p>
                    <p class="mt-4">Acércate, atendemos cada consulta de forma personalizada. 
                        Estamos dispuestos a compartir nuestro conocimiento para brindarte la solución que buscas...</p>
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
                    <img src="img/about/eficienciaVerde.png" alt="Honestidad">
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
                    <img src="img/about/calidadVerde.png" alt="calidad">
                    <div class="title">
                        <h4>Calidad</h4>
                    </div>
                    <div class="text">
                        <p>Lorem ipsum dolor sit amet, id quo eruditi eloquentiam. Assum decore te sed. Elitr
                            scripta ocurreret qui ad.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="box-part text-center" data-aos="flip-left" data-aos-duration="1500">
                    <img src="img/about/innovacionVerde.png" alt="innovacion">
                    <div class="title">
                        <h4>Innovacion</h4>
                    </div>
                    <div class="text">
                        <p>Lorem ipsum dolor sit amet, id quo eruditi eloquentiam. Assum decore te sed. Elitr
                            scripta ocurreret qui ad.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="box-part text-center" data-aos="flip-left" data-aos-duration="1500"> 
                    <img src="img/about/comunicacionVerde.png" alt="comunicacion">
                    <div class="title">
                        <h4>Comunicacion</h4>
                    </div>
                    <div class="text">
                        <p>Lorem ipsum dolor sit amet, id quo eruditi eloquentiam. Assum decore te sed. Elitr
                            scripta ocurreret qui ad.</p>
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
            <h2 class="font-weight-light text-white">Mira lo que algunos clientes dicen de nosotros</h2>
        </div>
        <div class="col-lg-10 pt-lg-2 pt-sm-0 mt-lg-1 mt-sm-0 pb-2 offset-lg-1 bg-dark text-light">
            <div id="client-testimonial-carousel" class="carousel slide" data-ride="carousel" style="height:250px;">
                <div class="carousel-inner">
                    <div class="carousel-item active text-center">
                        <blockquote class="blockquote text-center">
                            <p class="mb-0">Everybody is a genius. But if you judge
                                a fish by its ability to climb a tree, it will live its whole life believing that it
                                is stupid.
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
                                <ion-icon name="star-half"></ion-icon>
                            </p>
                        </blockquote>
                    </div>
                    <div class="carousel-item text-center ">
                        <blockquote class="blockquote text-center">
                            <p class="mb-0">  Imagination is more important than
                                knowledge. Knowledge is limited. Imagination encircles the world.
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