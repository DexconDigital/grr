<?php $page ='inicio';include 'include/header.php'; ?>
<!-- slide de imagenes -->
<main id="hero">
    <div id="carouselHero" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="images/slide1.png" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="images/slide2.png" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="images/slide3.png" class="d-block w-100" alt="...">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselHero" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Siguiente</span>
        </a>
        <a class="carousel-control-next" href="#carouselHero" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Atras</span>
        </a>
        <div class="overlay">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-7 offset-md-3 text-center text-md-center">
                        <h1 class="font-weight-bold">GRR FINCA RAIZ</h1>
                        <p class="d-none d-md-block">¡El inmueble que quieres está aqui!
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<!-- slide de imagenes fin -->
<!-- Busqueda -->
<?php include 'include/buscador.php'; ?>
<!-- fin formulario -->
<!-- Servicios -->
<section id="services" class="houses-section">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="sec-title centered">
                <div class="title">Nos esmeramos en ofrecerles a nuestros clientes el mejor servicio, atención y
                    asesoría</div>
                <h2>Nuestros servicios</h2>
                <div class="separator"></div>
            </div>
            <div class="col-12">
                <div class="row">
                    <div class="col-10 offset-1 pl-0 pr-0">
                        <div class="house-block col-lg-4 col-md-6 col-sm-12">
                            <div class="inner-box">
                                <div class="image">
                                    <img src="images/imagen-arriendo.png" alt="imagen referente a arriendos">
                                    <div class="overlay-box">
                                        <div class="overlay-inner">
                                            <div class="content">
                                                <h3><a href="quienes-somos.php#servicios" style="color:inherit;">ARRIENDOS</a></h3>
                                            </div>
                                            <a class="purchased" href="quienes-somos.php#servicios">
                                                Ver más</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="house-block col-lg-4 col-md-6 col-sm-12">
                            <div class="inner-box">
                                <div class="image">
                                    <img src="images/imagen-ventas.png" alt="Imagen referente a ventas">
                                    <div class="overlay-box">
                                        <div class="overlay-inner">
                                            <div class="content">
                                                <h3><a href="quienes-somos.php#servicios" style="color:inherit;">VENTAS</a></h3>
                                            </div>
                                            <a class="purchased" href="quienes-somos.php#servicios">Ver más</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="house-block col-lg-4 offset-lg-0 col-md-6 offset-md-3 col-sm-12">
                            <div class="inner-box">
                                <div class="image">
                                    <img src="images/imagen-avaluos.png" alt="imagen referente a avaluos">
                                    <div class="overlay-box">
                                        <div class="overlay-inner">
                                            <div class="content">
                                            <h3><a href="quienes-somos.php#servicios" style="color:inherit;">AVALÚOS</a></h3>
                                            </div>
                                            <a class="purchased" href="quienes-somos.php#servicios">Ver más</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- propiedades destacadas -->
<section id="destacados">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="sec-title centered">
                <div class="title">Nuestras propiedades destacadas en venta y alquiler</div>
                <h2>Propiedades Destacadas</h2>
                <div class="separator"></div>
            </div>
            <div class="col-12">
                <div class="row">
                    <div class="col-12 col-md-10 offset-md-1 pl-0 pr-0" id="propiedades_destacadas">
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="call-to-action" style="background-image:url(images/banner.png)">
    <div class="auto-container">
        <div class="row clearfix">
            <div class="content-column col-md-8 col-sm-12 col-xs-12">
                <h2>Gestione sus servicios en línea</h2>
                <div class="text">Acceda a los servicios en línea que tenemos disponibles para usted</div>
            </div>
            <div class="btn-column col-md-4 col-sm-12 col-xs-12">
                <a href="clientes.php" class="btn btn-primary enviar">Clientes</a>
            </div>
        </div>
    </div>
</section>
<section id="Aliados">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">
            <div class="sec-title centered">
                <h2>Nuestros aliados</h2>
                <div class="separator"></div>
            </div>
            </div>
            <div class="col-10 offset-1 pl-0">
                <!-- <div class="owl-carousel owl-theme responsiveSlide"> -->
                    <div class="row justify-content-center">
                        <div class="col-sm-12 col-md-4"><img src="images/LOGO EL LIBERTADOR.png" alt="" class="img-responsive"></div>
                        <!-- <div class="col-sm-12 col-md-4"><img src="images/SIMI.png" alt="" class="img-responsive"></div> -->
                        <div class="col-sm-12 col-md-4"><img src="images/LOGO bolivar.png" alt="" class="img-responsive"></div>
                    </div>
                <!-- </div> -->
            </div>
        </div>
    </div>
</section>

<!-- footer -->
<?php include 'include/footer.php'; ?>
<!-- fin footer -->
<!-- Conexion api -->
<script src="conexion_api/token_api.js"></script>
<script src="conexion_api/validadores.js"></script>
<script src="conexion_api/buscador.js"></script>
<script src="conexion_api/modelo_inmueble.js"></script>
<script src="conexion_api/inmuebles_destacados.js"></script>
</body>
</html>