<!doctype html>
<html lang="en">
    <head>
        <?php wp_head(); ?>
		<meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
            <title>ISS Consultores</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta name="description" content="" />
        <meta name="keywords" content="" />

        <link rel="shortcut icon" href="favicon.png" type="image/x-icon"/>
	    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css" />
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/default.css" />
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/nivo-slider.css" />
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/elastislide.css" />

        <script src="http://code.jquery.com/jquery-latest.js"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/js/modernizr.custom.17475.js"></script>
  	</head>

<body>
<!-- HEADER-->
<header>
<!-- CONTENEDOR HEADER -->
    <div class="cont-header">
    <!-- LOGO -->
        <h1><a href="<?php bloginfo('url'); ?>" target="_self"><img src="<?php echo get_template_directory_uri(); ?>/images/iss-consultores-logo.png" alt="ISS Consultores" /></a></h1>
    <!-- BTN MENU MOBIL -->
        <div class="menu_bar">
            <a href="#" class="bt-menu"><img src="<?php echo get_template_directory_uri(); ?>/images/menu-icon.png" /></a>
        </div>
    <!-- NAVEGACION -->
        <nav>
            <ul>
                <li><a href="<?php bloginfo('url'); ?>">INICIO</a></li>
                <li class="submenu">
                    <a href="#">SERVICIOS&nbsp;<span>&#9660;</span></a>
                    <ul class="children">
                        <li><a href="<?php bloginfo('url'); ?>/capacitacion">CAPACITACIÓN</a></li>
                        <li><a href="<?php bloginfo('url'); ?>/consultoria">CONSULTORÍA</a></li>
                        <li><a href="<?php bloginfo('url'); ?>/proyectos">PROYECTOS</a></li>
                    </ul>
                </li>
                <li><a href="<?php bloginfo('url'); ?>/nosotros">NOSOTROS</a></li>
                <li><a href="<?php bloginfo('url'); ?>/blog">BLOG</a></li>
                <li><a href="<?php bloginfo('url'); ?>/contacto">CONTACTO</a></li>
                <?php
                    if(is_user_logged_in())
                    {
                        ?> <li><a href="<?php echo wp_logout_url(); ?>">CERRAR SESIÓN</a></li> <?php
                    }
                ?>
            </ul>
        </nav>
        <div class="user-icon">
            <a href="<?php bloginfo('url'); ?>/usuario-home/"></a>
        </div>
    <!-- TERMINA NAVEGACION -->
    </div>
</header>
<!-- TERMINA HEADER -->