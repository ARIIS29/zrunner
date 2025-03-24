<!DOCTYPE html>
<html lang="es-MX">

<head>
    <!-- Essential Meta Tags -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php echo descripcion(); ?>">
    <meta name="keywords" content="<?php echo palabras_clave(); ?>">
    <meta name="author" content="<?php echo autor(); ?>">
    <meta name="facebook-domain-verification" content="7bx61wy6b31i7u0raork9bry1ivd61" />

    <!-- Title and Favicon -->
    <title><?php echo isset($pagina_titulo) ? $pagina_titulo . " | " : ""; ?><?php echo titulo() ? titulo() : ""; ?></title>
    <link rel="icon" href="<?php echo base_url('app-assets/images/logo2.png') ?>" type="image/png" sizes="16x16">

    <!-- Open Graph Meta Tags (Facebook, LinkedIn) -->
    <meta property="og:title" content="<?php echo og_title(); ?>">
    <meta property="og:description" content="<?php echo og_description(); ?>">
    <meta property="og:image" content="<?php echo base_url('app-assets/images/og-zrunner.jpg') ?>">
    <meta property="og:url" content="<?php echo og_url(); ?>">
    <meta property="og:type" content="website">
    <meta property="og:locale" content="es_MX">

    <!-- Twitter Card Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?php echo twitter_title(); ?>">
    <meta name="twitter:description" content="<?php echo twitter_description(); ?>">
    <meta name="twitter:image" content="<?php echo twitter_image(); ?>">
    <meta name="twitter:site" content="<?php echo twitter_site(); ?>">

    <!-- Additional SEO Meta Tags -->
    <meta name="robots" content="index, follow">
    <meta name="theme-color" content="#ffffff">

    <!-- CSS Files -->
    <link href="<?php echo base_url('assets/css/main.css" rel="stylesheet') ?>" type="text/css">
    <link href="<?php echo base_url('app-assets/css/bootstrap.min.css') ?>" rel="stylesheet" type="text/css" id="bootstrap">
    <link href="<?php echo base_url('app-assets/css/plugins.css') ?>" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url('app-assets/css/swiper.css') ?>" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url('app-assets/css/coloring.css') ?>" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url('app-assets/css/style.css') ?>" rel="stylesheet" type="text/css">
    <link id="colors" href="<?php echo base_url('app-assets/css/colors/scheme-01.css') ?>" rel="stylesheet" type="text/css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Noto+Sans:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <!-- Consulta los estilos del tema en app-assets/css/style.css -->

    <?php if (isset($styles) && is_array($styles)) : ?>
        <?php foreach ($styles as $style) : ?>
            <link rel="stylesheet" type="text/css" href="<?php echo !$style['es_rel'] ? $style['href'] : base_url() . 'assets/css/' . $style['href']; ?>">
        <?php endforeach; ?>
    <?php endif; ?>

</head>

<body>
    <div id="wrapper">

        <header class="header-full transparent">
            <div class="container-fluid">
                <div class="row navbar-expand-lg navbar-dark">
                    <div class="col-md-12">
                        <div class="de-flex sm-pt10">
                            <div class="de-flex-col">
                                <div class="de-flex-col">
                                    <!-- logo begin -->
                                    <div id="logo">
                                        <a href="<?php echo base_url() ?>">
                                            <img class="logo-main" src="<?php echo base_url('app-assets/images/logo.png') ?>" alt="logo" width="143">
                                            <img class="logo-mobile" src="<?php echo base_url('app-assets/images/logo.png') ?>" alt="logo" width="100">
                                        </a>
                                    </div>
                                    <!-- logo close -->
                                </div>
                            </div>

                            <div class="de-flex-col header-col-mid">
                                <ul id="mainmenu" class="mainmenu">
                                    <li><a class="menu-item" href="<?php echo base_url('#quienes') ?>">QUIÉNES SOMOS</a></li>
                                    <li><a class="menu-item" href="<?php echo base_url('#eventos') ?>">EVENTOS EN MARCHA</a></li>
                                    <li><a class="menu-item" href="#galeria">GALERÍA</a></li>
                                    <li><a class="menu-item" href="#patrocinio">PATROCINADORES</a></li>
                                    <li><a class="menu-item" target="_blank" href="https://www.facebook.com/profile.php?id=61566148617307"><img src="<?php echo base_url('app-assets/images/icono-facebook.png') ?>" alt="Logo" width="37"></a></li>
                                    <li><a class="menu-item" target="_blank" href="https://www.instagram.com/zrunner7/"><img src="<?php echo base_url('app-assets/images/icono-insta.png') ?>" alt="Logo" width="37"></a></li>
                                </ul>
                                <!-- <span id="menu-btn"></span> -->

                                <!-- Botón del menú móvil -->
                                <button class="navbar-toggler" type="button" data-bs-toggle="modal" data-bs-target="#menuModal" aria-controls="menuModal" aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="navbar-toggler-icon"></span>
                                </button>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <!-- Modal para el menú móvil -->
        <div class="modal fade modal-menu-movil" id="menuModal" tabindex="-1" aria-labelledby="menuModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content modal-menu">
                    <div class="modal-header border-0">
                        <div class="row">
                            <div class="col text-center">
                                <img src="<?php echo base_url('app-assets/images/logo.png') ?>" alt="Logo" width="120"> <!-- Logo -->
                            </div>
                        </div>
                    </div>
                    <div class="modal-body">

                        <div class="row">
                            <div class="col">

                                <ul class="list-unstyled mt-3">
                                    <li><a href="#quienes-movil" class="menu-link" data-bs-dismiss="modal">QUIÉNES SOMOS</a></li>
                                    <li><a href="#eventos" class="menu-link" data-bs-dismiss="modal">EVENTOS EN MARCHA</a></li>
                                    <li><a href="#galeria" class="menu-link" data-bs-dismiss="modal">GALERÍA</a></li>
                                    <li><a href="#patrocinio-movil" class="menu-link" data-bs-dismiss="modal">PATROCINADORES</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="container d-flex justify-content-center align-items-center">
                            <ul class="list-unstyled d-flex gap-3">
                                <li><a target="_blank" href="https://www.facebook.com/profile.php?id=61566148617307"><img src="<?php echo base_url('app-assets/images/icono-facebook.png') ?>" alt="Logo" width="37"></a></li>
                                <li><a target="_blank" href="https://www.instagram.com/zrunner7/"><img src="<?php echo base_url('app-assets/images/icono-insta.png') ?>" alt="Logo" width="39"></a></li><!-- Logo -->
                            </ul>
                        </div>

                        <div class="row p-t-40">
                            <div class="col">
                                <button type="button" class="btn-close btn-close-white close-menu-movil" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                        </div>

                    </div>


                </div>
            </div>
        </div>

        <script>
            document.addEventListener("DOMContentLoaded", function() {
                const sections = document.querySelectorAll("section");
                const navLinks = document.querySelectorAll(".mainmenu .menu-item");

                function highlightMenu() {
                    let scrollPosition = window.scrollY + 150; // Ajuste para mejorar la detección

                    sections.forEach((section) => {
                        if (
                            section.offsetTop <= scrollPosition &&
                            section.offsetTop + section.offsetHeight > scrollPosition
                        ) {
                            navLinks.forEach((link) => {
                                link.classList.remove("activa"); // Quita la clase de todos los enlaces

                                // Extraer solo el ID del href del link (sin base_url)
                                let linkHref = link.getAttribute("href").split("#")[1];

                                if (linkHref === section.id) {
                                    link.classList.add("activa"); // Activa el enlace correspondiente
                                }
                            });
                        }
                    });
                }

                // Resaltar menú cuando se hace clic
                navLinks.forEach((link) => {
                    link.addEventListener("click", function() {
                        navLinks.forEach((l) => l.classList.remove("activa"));
                        this.classList.add("activa");
                    });
                });

                window.addEventListener("scroll", highlightMenu);
                highlightMenu(); // Llamada inicial para detectar la posición actual
            });
        </script>