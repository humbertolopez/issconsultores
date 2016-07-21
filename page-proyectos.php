<?php include('header.php'); ?>



<!-- SLIDER PROYECTOS-->

    <section class="cont-slider-proyectos">

        <div class="slider-proyectos">

            <div class="slider-wrapper theme-default">

                <div id="slider" class="nivoSlider">

                    <img src="<?php echo get_template_directory_uri(); ?>/images/iss-consultores-proyectos-slider-uno.jpg" alt="ISS Consultores" title="#htmlcaption" />

                </div>

                <div id="htmlcaption" class="nivo-html-caption">

                    <p>Desarrollamos soluciones de productividad que<br><span>reducen costos operativos<br>y aumenta la rentabilidad</span></p> 

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

    </section>

<!-- TERMINA SLIDER CONSULTORIA -->



<!-- TITULO CONSULTORIA -->

    <section class="cont-titulo-proyectos">

        <div class="titulo-proyectos">

            <h2>Proyectos</h2>

            <p>Te ayudamos desde la mejora de una operaci&oacute;n espec&iacute;fica hasta proyectos complejos en los que intervengan varios procesos de fabricaci&oacute;n, sistemas de producci&oacute;n, sistemas log&iacute;sticos, distribuci&oacute;n de equipos en planta, entre otros</p>

        </div>

    </section>

<!-- TERMINA TITULO CONSULTORIA -->



<!-- DIAGNOSTICO CONSULTORIA -->

    <section class="cont-diagnostico-proyectos">

        <div class="diagnostico-proyectos">

            <p>Las soluciones de productividad que desarrollamos te ayudar&aacute;n a<br><span>aumentar la rentabilidad y reducir los gastos operativos</span></p>

            <div class="comienza-diagnostico">

                <div class="lista-diagnostico">

                    <ul>

                        <li><img src="<?php echo get_template_directory_uri(); ?>/images/iss-consultores-consultoria-planeacion-normativa-icono.png" alt="ISS Consultores" /><p>Sistemas de producci&oacute;n</p></li>

                        <li><img src="<?php echo get_template_directory_uri(); ?>/images/iss-consultores-consultoria-planeacion-estrategica-icono.png" alt="ISS Consultores" /><p>Estudios de localizaci&oacute;n de planta</p></li>

                        <li><img src="<?php echo get_template_directory_uri(); ?>/images/iss-consultores-consultoria-manual-organizacional-icono.png" alt="ISS Consultores" /><p>Sistemas de operaci&oacute;n</p></li>

                        <li><img src="<?php echo get_template_directory_uri(); ?>/images/iss-consultores-consultoria-gestion-calidad-icono.png" alt="ISS Consultores" /><p>Estudios en general de factibilidad operativa</p></li>

                        <li><img src="<?php echo get_template_directory_uri(); ?>/images/iss-consultores-consultoria-implementacion-5s-icono.png" alt="ISS Consultores" /><p>Sistemas log&iacute;sticos</p></li>

                        <li><img src="<?php echo get_template_directory_uri(); ?>/images/iss-consultores-consultoria-implementacion-tqm-icono.png" alt="ISS Consultores" /><p>Estudios de distribuci&oacute;n de equipos (LAY-OUT &oacute;ptimo)</p></li>

                        <li><img src="<?php echo get_template_directory_uri(); ?>/images/iss-consultores-consultoria-implementacion-tpm-icono.png" alt="ISS Consultores" /><p>Mejora de procesos</p></li>

                        <li><img src="<?php echo get_template_directory_uri(); ?>/images/iss-consultores-consultoria-productividad-icono.png" alt="ISS Consultores" /><p>Estudios para establecer o mejorar sistemas productivos</p></li>

                        <li><img src="<?php echo get_template_directory_uri(); ?>/images/iss-consultores-consultoria-implementacion-tpm-icono.png" alt="ISS Consultores" /><p>Dise&ntilde;o del trabajo</p></li>

                        <li><img src="<?php echo get_template_directory_uri(); ?>/images/iss-consultores-consultoria-productividad-icono.png" alt="ISS Consultores" /><p>Planes de calidad</p></li>

                    </ul>

                </div>

                <div class="form-diagnostico">

                    <h2>Obtén 10% de descuento al</h2>

                    <p>solicitar tu cotizaci&oacute;n en l&iacute;nea</p>

                    <form method="POST" action="<?php echo get_template_directory_uri(); ?>/diagnostico-script.php">

                        <input class="campos-consultoria" type="text" name="nombre" placeholder="Nombre" required />

                        <input class="campos-consultoria" type="email" name="correo" placeholder="Correo electr&oacute;nico" required />

                        <input type="hidden" name="url" value="<?php bloginfo('url'); ?>/proyectos" />

                        <select class="campos-consultoria" name="tamanoempresa" required>

                            <option class="option" selected>Tamaño de empresa</option>

                            <option class="option" value="5 a 10 personas">5 a 10 personas</option>

                            <option class="option" value="5 a 50 personas">11 a 50 personas</option>

                            <option class="option" value="51 a 250 personas">51 a 250 personas</option>

                            <option class="option" value="251 a 500 personas">251 a 500 personas</option>

                            <option class="option" value="501 o más">501 personas o más</option>

                        </select>

			 <select class="campos-consultoria" name="serviciointeres" required>

                            <option class="option" selected>Servicio de interés</option>

                            <option class="option" value="produccion">Sistemas de producción</option>

                            <option class="option" value="operacion">Sistemas de operación</option>

                            <option class="option" value="logisticos">Sistemas logísticos</option>

                            <option class="option" value="procesos">Mejora de procesos</option>

 			    <option class="option" value="trabajo">Diseño del trabajo</option>

 			    <option class="option" value="planta">Estudios de localización de planta</option>

			    <option class="option" value="operativa">Estudios en general de factibilidad operativa</option>

 			    <option class="option" value="lay-out">Estudios de distribución de equipos (LAY-OUT óptimo)</option>

 			    <option class="option" value="sistemas-productivos">Estudios para establecer o mejorar sistemas productivos</option>

 			    <option class="option" value="calidad">Planes de calidad</option>

                        </select>

                        <textarea class="campos-consultoria" name="mensaje" placeholder="Mensaje" required></textarea>

                        <input class="btn-enviar-consultoria" type="submit" name="submit" value="ENVIAR">

                    </form>

                    <img class="img-diag" src="<?php echo get_template_directory_uri(); ?>/images/iss-consultores-consultoria-contacto-indicador.png" alt="ISS Consultores" />

                </div>

            </div>

        </div>

    </section>

<!-- TERMINA DIAGNOSTICO CONSULTORIA -->



<?php include('footer.php'); ?>