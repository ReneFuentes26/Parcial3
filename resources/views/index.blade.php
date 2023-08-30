@extends('layouts.app')

@section('content')

<div class="container-fluid position-relative p-0">
    <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel" style="height: 50%;">
                <div class="carousel-inner">
                    <div class="carousel-item active carousel-image-container">
                        <img class="w-100" style="width: 50%;" src="images/imagen1.jpg" alt="Image">
                        <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                            <div class="p-3" style="max-width: 900px;">
                                <h1 class="texto-titulo">Grandes Ofertas</h1>
                                <h1 class="display-1 text-white mb-md-4 animated zoomIn">Para que te lleves tus zapatos a mejor precio.</h1>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item carousel-image-container">
                        <img class="w-100" src="images/imagen2.jpg" alt="Image">
                        <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                            <div class="p-3" style="max-width: 900px;">
                                <h1 class="texto-titulo">Los mejores zapatos de la zona</h1>
                                <h1 class="display-1 text-white mb-md-4 animated zoomIn">La más alta calidad al mejor precio</h1>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item carousel-image-container">
                        <img class="w-100" src="images/imagen3.jpg" alt="Image">
                        <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                            <div class="p-3" style="max-width: 900px;">
                                <h1 class="texto-titulo">Tus marcas Favoritas</h1>
                                <h1 class="display-1 text-white mb-md-4 animated zoomIn">Para que estes siempre a la moda</h1>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Anterior</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#header-carousel"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Siguiente</span>
                </button>
            </div>
    </div>


<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-7">
                <div class="position-relative pb-3 mb-5" style="margin-bottom: 0px;">
                    <h5 class="texto-titulo">Sobre nosotros</h5>
                    <h1 class="mb-0">Nuestro compromiso contigo.</h1><br>
                    <div class="d-flex align-items-center mb-4 wow fadeIn" data-wow-delay="0.6s">
                        <p class="mb-4 text-justify" style="margin-top:0px;">
                            CrunchyShoe siempre esta pendiente para cualquier zapato que necesites, desde uno tennis para
                            correr, hasta unos zapatos deportivos de alta gamma, nuestro comprosimo no solo es vender zapatos, sino
                            hacer que el cliente tenga lo mejores zapatos a calidad-precio y no necesite estar de tienda en tienda
                            para encontrar sus zapatos deseados, porque aqui en CrunchyShoes tenemos todo tipo de zapatos.
                            <br>Nosotros te ofrecemos lo siguiente:
                        </p>

                    </div>
                   

                    <a href="{{url('integrante')}}" class="btn btn-primary py-3 w-100 px-5 mt-3 wow zoomIn text-center" data-wow-delay="0.9s" style="color:white; font-weight: bold;">Nuestro equipo</a>
                </div>
            </div>
            <div class="col-lg-5" style="min-height: 300px;">
                <div class="position-relative h-100">
                    <img class="position-absolute" data-wow-delay="0.9s" src="images/Crunchy.png" style="object-fit: cover;">
                </div>
            </div>
        </div>
    </div>
</div>
<hr>

<div class="container-fluid service position-relative px-5 py-5 mt-5 wow fadeInUp" style="margin-bottom: 135px;">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-5 col-md-6">
                <div class="bg-primary border-inner text-center text-white p-5">
                    <h4 class="text-uppercase mb-3 text-white">Zapatos casuales</h4>
                    <p>Los mejores zapatos casuales de toda la zona</p>

                </div>
            </div>


            <div class="col-lg-5 col-md-6 center">
                <div class="bg-primary border-inner text-center text-white p-5">
                    <h4 class="text-uppercase mb-3 text-white">Tennis</h4>
                    <p>Tambien tenemos variedad de tenis para que puedas elegir a tu gusto</p>
                </div>

            </div>
            <p class="text-white mb-4">Compra con nosotros para recibir los increíbles descuentos y promociones que te ofrece nuestra plataforma.</p>
            <a href="{{url('/zapatos')}}" class="btn btn-primary border-inner py-3 px-5 me-3 text-white">¡Compra Ya!</a>
        </div>

<style>
    .service::after {
        position: absolute;
        content: "";
        width: 100%;
        height: calc(100% - 45px);
        top: 135px;
        left: 0;
        background: linear-gradient(rgba(187, 102, 49, 0.7), rgba(138, 65, 206, 0.6)), url(../images/Crunchy.png) center center no-repeat;
        background-size: cover;
        z-index: -1;
    }
    .carousel-image-container {
        position: relative;
    }

    .carousel-image-container::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(128, 0, 128, 0.3);
    }

    .texto-titulo{
        font-size: 60px;
        font-weight: bold; 
        text-shadow:
                1px 1px 1px orange,
                2px 2px 1px orange,
                3px 3px 1px orange;
        color: white;
    }

</style>

@endsection

@section('footer')
    @include('home')
@endsection
