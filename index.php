<?php get_header(); ?>



<!-- SLIDER TOP INDEX -->

<section class="cont-slider-top-index">

    <div class="cont-gral-slider-index">

    <!-- NIVO SLIDER -->

        <div class="slider-index">

            <div class="slider-wrapper theme-default">

                <div id="slider" class="nivoSlider">

                    <img src="<?php echo get_template_directory_uri(); ?>/images/iss-consultores-index-slider-uno.jpg" alt="ISS Consultores" />

 		    <img src="<?php echo get_template_directory_uri(); ?>/images/iss-consultores-index-slider-dos.jpg" alt="ISS Consultores" />

 		    <img src="<?php echo get_template_directory_uri(); ?>/images/iss-consultores-index-slider-tres.jpg" alt="ISS Consultores" />

		    <img src="<?php echo get_template_directory_uri(); ?>/images/iss-consultores-index-slider-cuatro.jpg" alt="ISS Consultores" />

                </div>

            </div>

            <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery-1.9.0.min.js"></script>

            <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.nivo.slider.js"></script>

            <script type="text/javascript">

                $(window).load(function() {

                $('#slider').nivoSlider();

                });

            </script>

        </div>

        <div class="slider-img"><img src="<?php echo get_template_directory_uri(); ?>/images/iss-consultores-index-slider-up.png" alt="ISS Consultores" />

</div>



<!-- INFO Y FORMULARIO -->

        <div class="info-top-index">



            <div class="info-aumenta"><p><span>Aumenta</span> la productividad</p></div>

            <div class="info-reduce"><p><span>Reduce</span> costos y gastos operativos</p></div>

        

            <div class="info-form">

                <div class="btn-proxima-cap"><a href="#" target="_self"><span>Pr&oacute;xima capacitaci&oacute;n</span><br>Sistema de control de calidad</a><span class="prox-ind">&#8250;</span></div>

                <form method="POST" action="<?php echo get_template_directory_uri(); ?>/newsletter-script.php">                    

                    <input type="text" name="nombre" id="nombre" placeholder="Nombre" required />

                    <input type="email" name="correo" id="correo" placeholder="Correo electr&oacute;nico" required />

                    <input type="hidden" name="url" id="url" value="<?php bloginfo('url'); ?>">

                    <input class="btn-enviar" type="submit" name="submit" value="ENVIAR">

                </form>

            </div>            

        </div>

    </div>

</section>

<!-- TERMINA SLIDER TOP INDEX -->



<!-- METODOLOGIA -->

    <section class="cont-metodologia-index">

        <div class="metodologia-index">

            <img src="<?php echo get_template_directory_uri(); ?>/images/iss-consultores-index-metodologia-top.png" alt="ISS Consultores" />

            <p>Nuestra metodolog&iacute;a cubre t&eacute;cnicas, herramientas y procesos innovadores de<br><span>competitividad japonesa</span><br><br><a href="<?php bloginfo('url'); ?>/nosotros" target="_self">CONOCER M&Aacute;S</a></p>

            <img class="met-cafe" src="<?php echo get_template_directory_uri(); ?>/images/iss-consultores-index-metodologia-cafe.png" alt="ISS Consultores" />

        </div>

    </section>

<!-- TERMINA METODOLOGIA -->



<!-- NUESTROS SERVICIOS INDEX -->

    <section class="cont-servicios-index">

        <div class="servicios-index">

        <h2>Nuestros servicios</h2>

            <p>se ajustan a tus necesidades, te aseguramos soluciones de productividad y rentabilidad para tu empresa</p>

            <div class="cat-servicios">

                <img src="<?php echo get_template_directory_uri(); ?>/images/iss-consultores-index-servicios-capacitaciones.jpg" alt="ISS Consultores" />

                <h3>Capacitación</h3>

                <p>Encontrarás conocimiento y entrenamiento referente al modelo que fue adoptado en Japón para enfrentar la competencia de un mercado internacional.</p>

                <div class="btn-cat-serv"><a href="<?php bloginfo('url'); ?>/capacitacion">CONOCER MÁS</a></div>

            </div>

            <div class="cat-servicios">

                <img src="<?php echo get_template_directory_uri(); ?>/images/iss-consultores-index-servicios-consultoria.jpg" alt="ISS Consultores" />

                <h3>Consultoría</h3>

                <p>Le brindamos a las PyMe’s los conocimientos y entrenamientos para que adopten las formas de trabajo que han demostrado competitividad a largo plazo.</p>

                <div class="btn-cat-serv"><a href="<?php bloginfo('url'); ?>/consultoria">CONOCER MÁS</a></div>

            </div>

            <div class="cat-servicios">

                <img src="<?php echo get_template_directory_uri(); ?>/images/iss-consultores-index-servicios-proyectos.jpg" alt="ISS Consultores" />

                <h3>Proyectos</h3>

                <p>Desarrollamos soluciones de productividad enfocados en aumentar la rentabilidad y reducir costos operativos para tu empresa.</p>

                <div class="btn-cat-serv"><a href="<?php bloginfo('url'); ?>/proyectos">CONOCER MÁS</a></div>

            </div>

        </div>

    </section>

<!-- TERMINA NUESTROS SERVICIOS INDEX -->



<!-- CLIENTES INDEX -->

    <section class="cont-clientes-index">

        <div class="clientes-index">

            <h2>Nos respaldan los clientes</h2>

            <p>a los que hemos ayudado con entrenamientos y consultorías para mejorar procesos y aumentar la productividad</p>

            <div class="carousel-clientes-index">

            <!-- Elastislide Carousel -->

                <ul id="carousel" class="elastislide-list">

                    <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/clientes/iss-consultores-clientes-andares.png" alt="ISS Consultores" /></a></li>

                    <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/clientes/iss-consultores-clientes-hotel-hilton.png" alt="ISS Consultores" /></a></li>

                    <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/clientes/iss-consultores-clientes-punto-sao-paulo.png" alt="ISS Consultores" /></a></li>

                    <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/clientes/iss-consultores-clientes-urrea.png" alt="ISS Consultores" /></a></li>

                    <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/clientes/jabil.png" alt="ISS Consultores" /></a></li>

                    <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/clientes/vitro.png" alt="ISS Consultores" /></a></li>

                    <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/clientes/cydsa.png" alt="ISS Consultores" /></a></li>                    

                </ul>

                <!-- End Elastislide Carousel -->

                <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquerypp.custom.js"></script>

                <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.elastislide.js"></script>

                <script type="text/javascript">                    

                    $( '#carousel' ).elastislide();                    

                </script>

            </div>

        </div>

    </section>

<!-- TERMINA CLIENTES INDEX -->



<!-- GIROS EMPRESARIALES INDEX -->

    <section class="cont-girosemp-index">

        <div class="girosemp-index">

            <h2>Giros empresariales</h2>

            <p>con los que hemos desarrollado proyectos</p>

            <ul>

                <li><img src="<?php echo get_template_directory_uri(); ?>/images/iss-consultores-giros-quimico.png" alt="ISS Consultores" /><p>Qu&iacute;mico</p></li>

                <li><img src="<?php echo get_template_directory_uri(); ?>/images/iss-consultores-giros-educativo.png" alt="ISS Consultores" /><p>Educativo</p></li>

                <li><img src="<?php echo get_template_directory_uri(); ?>/images/iss-consultores-giros-electronico.png" alt="ISS Consultores" /><p>Electr&oacute;nico</p></li>

                <li><img src="<?php echo get_template_directory_uri(); ?>/images/iss-consultores-giros-hotelero.png" alt="ISS Consultores" /><p>Hotelero</p></li>

                <li><img src="<?php echo get_template_directory_uri(); ?>/images/iss-consultores-giros-empaque.png" alt="ISS Consultores" /><p>Empaque</p></li>

                <li><img src="<?php echo get_template_directory_uri(); ?>/images/iss-consultores-giros-restaurantero.png" alt="ISS Consultores" /><p>Restaurantero</p></li>

                <li><img src="<?php echo get_template_directory_uri(); ?>/images/iss-consultores-giros-plasticos.png" alt="ISS Consultores" /><p>Pl&aacute;sticos</p></li>

                <li><img src="<?php echo get_template_directory_uri(); ?>/images/iss-consultores-giros-metal-mecanico.png" alt="ISS Consultores" /><p>Metal - Mec&aacute;nico</p></li>

                <li><img src="<?php echo get_template_directory_uri(); ?>/images/iss-consultores-giros-centros-comerciales.png" alt="ISS Consultores" /><p>Centros comerciales</p></li>

                <li><img src="<?php echo get_template_directory_uri(); ?>/images/iss-consultores-giros-joyeria.png" alt="ISS Consultores" /><p>Joyer&iacute;a</p></li>

                <li><img src="<?php echo get_template_directory_uri(); ?>/images/iss-consultores-giros-muebles.png" alt="ISS Consultores" /><p>Muebles</p></li>

                <li><img src="<?php echo get_template_directory_uri(); ?>/images/iss-consultores-giros-alimentos-bebidas.png" alt="ISS Consultores" /><p>Alimentos y bebidas</p></li>

            </ul>

        </div>

    </section>

<!-- TERMINA GIROS EMPRESARIALES INDEX -->

<?php get_footer(); ?>