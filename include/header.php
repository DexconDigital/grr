<!DOCTYPE html>
<html lang="es">

<head>
    <meta name="keywords" content="Arriendo de inmuebles, venta de inmuebles, inmobiliaria, arriendo apartamento, arriendo casa, venta apartamentos, venta casa, casas en arriendo, apartamentos en arriendo"/>
    <meta name="description" content="Inmobiliaria Grr, pagina de ventas, arriendos y avaluos de inmuebles, puedes comprar y arrendar los mejores inmuebles en bogota" />
    <meta property="og:type"               content="Inmuebles, Inmobiliaria" />
    <meta property="og:title"              content="Inmueble de Grr Finca Raiz" />
    <meta property="og:description"        content="¡Mira este increible inmueble!" />
    <meta property="og:image"              content="http://www.grrfincaraiz.com.co/grr/images/slide3.png" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="robots" content="noindex" />
    <meta name="author" content="Dexcon Digital" />
    <meta name="copyright" content="www.dexcondigital.com" />
    <title>GRR Finca Raiz</title>
    <link rel="shortcut icon" href="images/LogoGrr.png" type="image/x-icon">
    <!-- Stylesheets -->
    <link rel="stylesheet" href="./css/bootstrap3.css">
    <link href="./css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="css/all.css">
    <link href="./css/style.css" rel="stylesheet">
    <link href="./css/responsive.css" rel="stylesheet">
    <link rel="stylesheet" href="./css/owl.carousel.min.css">
    <link rel="stylesheet" href="./css/owl.theme.default.min.css">
    <link rel="stylesheet" href="./css/style2.css">
    <?php if($page == 'inmuebles'){
        echo '<link rel="stylesheet" href="./css/carrousel.inmuebles.css">';
    }?>
    <!-- <link rel="shortcut icon" href="" type="image/x-icon">
    <link rel="icon" href="" type="image/x-icon"> -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
</head>

<body>
    <!-- Main Header-->
    <header class="main-header">
        <!-- Header Top One -->
        <div class="header-top-one">
            <div class="container-fluid">
                <div class="inner-container clearfix">
                    <!--Top Left-->
                    <div class="top-left">
                        <ul class="links clearfix">
                            <li><a href="mailto:grrfincaraiz@yahoo.com" style="color:#092f50"><i class="far fa-envelope"></i> grrfincaraiz@yahoo.com</a></li>
                        </ul>
                    </div>
                    <!--Top Right-->
                    <div class="top-right clearfix">
                        <!--social-icon-->
                        <div class="social-icon">
                            <ul class="clearfix">
                                <li><a target="_blank" href="https://www.facebook.com/grr.fincaraiz.1?ref=bookmarks"><img src="images/facebook.png" alt="icon facebook" style="height:22px; width:auto;"></a></li>
                                <!-- <li><a href=""><img src="images/twitter.png" alt="icon twitter" style="height:22px; width:auto;"></li> -->
                                <li><a target="_blank" href="https://www.instagram.com/grr_fincaraiz/?hl=es-la"><img src="images/instagram.png" alt="icon facebook" style="height:22px; width:auto;"></a></li>
                                <li><a target="_blank" href="https://api.whatsapp.com/send?phone=573143612092&text=&source=&data="><img src="images/whatsapp.png" alt="icon whatsapp" style="height:22px; width:auto;"></a></li>
                                <li><a target="_blank" href="https://www.youtube.com/channel/UCDw7z49ZfgvhMU_oCVGnpbw?view_as=subscriber"><img src="images/youtube.png" alt="icon youtube" style="height:22px; width:auto;"></a></li>
                            </ul>
                        </div>
                        <ul class="number">
                            <li><span class="icon fas fas fa-phone"></span><a href="tel:6013106093" style="color:inherit;">(601) 3106093</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header Top One End -->
        <!-- Main Box -->
        <div class="main-box">
            <div class="container-fluid">
                <div class="outer-container clearfix">
                    <!--Logo Box-->
                    <div class="logo-box p-0">
                        <div class="logo">
                            <a href="index.php" class="ml-4">
                                <img src="./images/LogoGrr.png" alt="Logo de la inmobiliaria Grr" style="height:100px; width:auto;">
                            </a>
                        </div>
                    </div>
                    <!--Nav Outer-->
                    <div class="nav-outer clearfix">
                        <!-- Main Menu -->
                        <nav class="main-menu">
                            <div class="navbar-header">
                                <!-- Toggle Button -->
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div>
                            <div class="navbar-collapse collapse clearfix">
                                <ul class="navigation clearfix">
                                    <li class="<?php if ($page == 'inicio') {
                                                    echo 'current';
                                                } ?>"><a href="./index.php">Inicio</a></li>
                                    <li class="<?php if ($page == 'quienes') {
                                                    echo 'current';
                                                } ?>"><a href="./quienes-somos.php">Quienes Somos</a></li>
                                    <li class="<?php if ($page == 'inmuebles') {
                                                    echo 'current';
                                                } ?>"><a href="./inmuebles.php">Inmuebles</a></li>
                                    <li class="<?php if ($page == 'clientes') {
                                                    echo 'current';
                                                } ?>"><a href="./clientes.php">Clientes</a></li>
                                    <li class="<?php if ($page == 'contacto') {
                                                    echo 'current';
                                                } ?>"><a href="./contacto.php">Contáctenos</a></li>
                                    <li>
                                        <a href="https://gateway2.tucompra.com.co/sites/grrfincaraiz" target="_blank" class="p-0"> <img src="./images/logopse.png" alt="" class="img-responsive mx-auto d-block" style="width:4.4em;"></a>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                        <!-- Main Menu End-->
                    </div>
                    <!--Nav Outer End-->

                </div>
            </div>
        </div>

        <!--Sticky Header-->
        <div class="sticky-header">
            <div class="header-top-one">
                <div class="container-fluid">
                    <div class="inner-container clearfix">
                        <!--Top Left-->
                        <div class="top-left">
                            <ul class="links clearfix">
                            <li><a href="mailto:grrfincaraiz@yahoo.com"><i class="far fa-envelope"></i> grrfincaraiz@yahoo.com</a></li>
                                
                            </ul>
                        </div>
                        <!--Top Right-->
                        <div class="top-right clearfix">
                            <!--social-icon-->
                            <div class="social-icon">
                                <ul class="clearfix">
                                <li><a href=""><img src="images/facebook.png" alt="icon facebook" style="height:22px; width:auto;"></a></li>
                                <!-- <li><a href=""><img src="images/twitter.png" alt="icon twitter" style="height:22px; width:auto;"></li> -->
                                <li><a href=""><img src="images/instagram.png" alt="icon facebook" style="height:22px; width:auto;"></a></li>
                                <li><a href=""><img src="images/whatsapp.png" alt="icon whatsapp" style="height:22px; width:auto;"></a></li>
                                <li><a href=""><img src="images/youtube.png" alt="icon youtube" style="height:22px; width:auto;"></a></li>
                                </ul>
                            </div>
                            <ul class="number">
                                <li><span class="icon fas fa-phone"></span><a href="tel:6013106093" style="color:inherit;">(601) 3106093</a></li>
                            </ul>
                        </div>

                    </div>

                </div>
            </div>
            <div class="container-fluid">
                <!--Logo-->
                <div class="logo pull-left">
                    <a href="index.php" class="img-responsive ml-4"><img src="./images/LogoGrr.png" alt="" title=""></a>
                </div>

                <!--Right Col-->
                <div class="right-col pull-right">
                    <!-- Main Menu -->
                    <nav class="main-menu">
                        <div class="navbar-header">
                            <!-- Toggle Button -->
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>

                        <div class="navbar-collapse collapse clearfix">
                            <ul class="navigation clearfix">
                                <li class="<?php if ($page == 'inicio') {
                                                echo 'current';
                                            } ?>"><a href="./index.php">Inicio</a></li>
                                <li class="<?php if ($page == 'quienes') {
                                                echo 'current';
                                            } ?>"><a href="./quienes-somos.php">Quienes Somos</a></li>
                                <li class="<?php if ($page == 'inmuebles') {
                                                echo 'current';
                                            } ?>"><a href="./inmuebles.php">Inmuebles</a></li>
                                <li class="<?php if ($page == 'clientes') {
                                                echo 'current';
                                            } ?>"><a href="./clientes.php">Clientes</a></li>
                                <li class="<?php if ($page == 'contacto') {
                                                echo 'current';
                                            } ?>"><a href="./contacto.php">Contáctenos</a></li>
                                <li>
                                    <a href="https://gateway2.tucompra.com.co/sites/grrfincaraiz" target="_blank" class="p-0 pt-2"><img src="./images/logopse.png" alt="" class="img-responsive mx-auto d-block" style="width:3.5em;"></a>
                                </li>
                            </ul>
                    </nav><!-- Main Menu End-->
                </div>

            </div>
        </div>
    </header>