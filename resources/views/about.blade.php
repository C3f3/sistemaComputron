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
        <div class="container mt-5">
            <div class="row">
                <div class="col-md-6 text-center py-3" >
                    <h2 class="font-weight-light text-white">Sobre Nosotros</h2>
                    <p class="mt-4">Somos un emprendimiento constituido por un equipo de jovenes especializados en brindar distintas
                        soluciones. Buscamos abordar cada desafio con una solucion personalizada. Acercate y te asesoramos...</p>
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
                <div class="box-part text-center">
                    <img src="img/about/eficiencia.png" alt="eficiencia">
                    <div class="title">
                        <h4>Eficiencia</h4>
                    </div>
                    <div class="text">
                        <p>Lorem ipsum dolor sit amet, id quo eruditi eloquentiam. Assum decore te sed. Elitr
                            scripta ocurreret qui ad.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="box-part text-center">
                    <img src="img/about/calidad.png" alt="calidad">
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
                <div class="box-part text-center">
                    <img src="img/about/innovacion.png" alt="innovacion">
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
                <div class="box-part text-center">
                    <img src="img/about/comunicacion.png" alt="comunicacion">
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
<div class="section testimonials mt-3">
    <div class="container">
        <div class="content-text mb-0 text-center">
            <h3 class="font-weight-light text-white">Mira lo que algunos clientes dicen de nosotros</h2>
        </div>
        <div class="col-lg-10 pt-lg-2 pt-sm-0 mt-lg-1 mt-sm-0 pb-2 offset-lg-1 bg-dark text-light">
            <div id="client-testimonial-carousel" class="carousel slide" data-ride="carousel" style="height:250px;">
                <div class="carousel-inner">
                    <div class="carousel-item active text-center p-2">
                        <blockquote class="blockquote text-center">
                            <p class="mb-0"><ion-icon name="chevron-back"></ion-icon>Everybody is a genius. But if you judge
                                a fish by its ability to climb a tree, it will live its whole life believing that it
                                is stupid.<ion-icon name="chevron-forward"></ion-icon>
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
                    <div class="carousel-item text-center p-2">
                        <blockquote class="blockquote text-center">
                            <p class="mb-0"><ion-icon name="chevron-back"></ion-icon> Imagination is more important than
                                knowledge. Knowledge is limited. Imagination encircles the world.<ion-icon name="chevron-forward"></ion-icon>
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
                    <div class="carousel-item text-center p-2">
                        <blockquote class="blockquote text-center">
                            <p class="mb-0"><ion-icon name="chevron-back"></ion-icon> A person who never made a mistake never
                                tried anything new.<ion-icon name="chevron-forward"></ion-icon>
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