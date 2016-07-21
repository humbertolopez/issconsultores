<?php get_header(); ?>

<!-- SLIDER CAPACITACION -->

    <section class="cont-slider-capacitacion">

        <div class="slider-capacitacion">

            <div class="slider-wrapper theme-default">

                <div id="slider" class="nivoSlider slider-capacitaciones">
                    <?php
                        $sliderdestacados = new WP_Query(array(
                            'category_name' => 'curso-capacitacion',
                            'posts_per_page' => -1,
                        ));
                        if($sliderdestacados->have_posts()) : while($sliderdestacados->have_posts()) : $sliderdestacados->the_post();                        
                    ?>                    
                    <img src="<?php if(has_post_thumbnail()){the_post_thumbnail_url('cap-slider');} ?>" alt="<?php the_title(); ?>" title="#<?php echo $post->post_name; ?>" />
                    <?php endwhile; endif; ?>
                </div>
                <?php
                    if($sliderdestacados->have_posts()) : while($sliderdestacados->have_posts()) : $sliderdestacados->the_post();
                ?>
                <div id="<?php echo $post->post_name; ?>" class="nivo-html-caption">
                    <p>Capacitaci&oacute;n de<br><span><?php the_title(); ?></span><br>Para establecer estrategias a mediano y largo plazo</p>
                </div>
                <?php endwhile; endif; wp_reset_postdata(); ?>
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

<!-- TERMINA SLIDER CAPACITACION -->



<!-- TITULO CAPACITACION -->

    <section class="cont-titulo-capacitacion">

        <div class="titulo-capacitacion">

            <img src="<?php echo get_template_directory_uri(); ?>/images/iss-consultores-capacitaciones-titulo-img.png" alt="ISS Consultores" />

            <h2>Conoce los beneficios que tendr&aacute; tu empresa</h2>

        </div>

    </section>

<!-- TERMINA TITULO CAPACITACION -->



<!-- OBTENDRAS CAPACITACION -->

    <section class="cont-obtendras-capacitacion">

        <div class="obtendras-capacitacion">

            <h3>Obtendr&aacute;s una reducci&oacute;n de hasta el...</h3>

            <div class="grafica">

                <span class="graf chart" data-percent="90">

                    <span class="percent"></span>

                </span>

                <p>en tiempos de ciclo de manufactura</p>

                <script>

                    document.addEventListener('DOMContentLoaded', function() {

                        var chart = window.chart = new EasyPieChart(document.querySelector('.graf'), {

                            easing: 'easeOutElastic',

                            delay: 6000,

                            barColor: '#541913',

                            trackColor: '#D6D6D6',

                            scaleColor: false,

                            lineWidth: 20,

                            trackWidth: 16,

                            lineCap: 'butt',

                            onStep: function(from, to, percent) {

                                this.el.children[0].innerHTML = Math.round(percent);

                            }

                        });



                    });

                    </script>

            </div>

            <div class="grafica">

                <span class="graf2 chart" data-percent="70">

                    <span class="percent"></span>

                </span>

                <p>en tiempos muertos manufactureros del negocio</p>

                <script>

                document.addEventListener('DOMContentLoaded', function() {

                    var chart = window.chart = new EasyPieChart(document.querySelector('.graf2'), {

                        easing: 'easeOutElastic',

                        delay: 7000,

                        barColor: '#541913',

                        trackColor: '#D6D6D6',

                        scaleColor: false,

                        lineWidth: 20,

                        trackWidth: 16,

                        lineCap: 'butt',

                        onStep: function(from, to, percent) {

                            this.el.children[0].innerHTML = Math.round(percent);

                        }

                    });



                });

                </script>

            </div>

            <div class="grafica">

                <span class="graf3 chart" data-percent="75">

                    <span class="percent"></span>

                </span>

                <p>en procesos</p>

                <script>

                document.addEventListener('DOMContentLoaded', function() {

                    var chart = window.chart = new EasyPieChart(document.querySelector('.graf3'), {

                        easing: 'easeOutElastic',

                        delay: 8000,

                        barColor: '#541913',

                        trackColor: '#D6D6D6',

                        scaleColor: false,

                        lineWidth: 20,

                        trackWidth: 16,

                        lineCap: 'butt',

                        onStep: function(from, to, percent) {

                            this.el.children[0].innerHTML = Math.round(percent);

                        }

                    });



                });

                </script>

            </div>

            <div class="grafica">

                <span class="graf4 chart" data-percent="90">

                    <span class="percent"></span>

                </span>

                <p>en desperdicios f&iacute;sicos</p>

                <script>

                document.addEventListener('DOMContentLoaded', function() {

                    var chart = window.chart = new EasyPieChart(document.querySelector('.graf4'), {

                        easing: 'easeOutElastic',

                        delay: 9000,

                        barColor: '#541913',

                        trackColor: '#D6D6D6',

                        scaleColor: false,

                        lineWidth: 20,

                        trackWidth: 16,

                        lineCap: 'butt',

                        onStep: function(from, to, percent) {

                            this.el.children[0].innerHTML = Math.round(percent);

                        }

                    });



                });

                </script>

            </div>

            <div class="grafica">

                <span class="graf5 chart" data-percent="35">

                    <span class="percent"></span>

                </span>

                <p>del costo total desembolsable de procesos</p>

                <script>

                document.addEventListener('DOMContentLoaded', function() {

                    var chart = window.chart = new EasyPieChart(document.querySelector('.graf5'), {

                        easing: 'easeOutElastic',

                        delay: 10000,

                        barColor: '#541913',

                        trackColor: '#D6D6D6',

                        scaleColor: false,

                        lineWidth: 20,

                        trackWidth: 16,

                        lineCap: 'butt',

                        onStep: function(from, to, percent) {

                            this.el.children[0].innerHTML = Math.round(percent);

                        }

                    });



                });

                </script>

            </div>

        </div>

        <div class="obtendras-capacitacion">

        <h3>Mejores del...</h3>

            <div class="grafica">

                <span class="graf6 chart" data-percent="60">

                    <span class="percent"></span>

                </span>

                <p>en indicadores de servicio al cliente</p>

                <script>

                    document.addEventListener('DOMContentLoaded', function() {

                        var chart = window.chart = new EasyPieChart(document.querySelector('.graf6'), {

                            easing: 'easeOutElastic',

                            delay: 6000,

                            barColor: '#541913',

                            trackColor: '#D6D6D6',

                            scaleColor: false,

                            lineWidth: 20,

                            trackWidth: 16,

                            lineCap: 'butt',

                            onStep: function(from, to, percent) {

                                this.el.children[0].innerHTML = Math.round(percent);

                            }

                        });



                    });

                    </script>

            </div>

            <div class="grafica">

                <span class="graf7 chart" data-percent="70">

                    <span class="percent"></span>

                </span>

                <p>en efectividad del negocio y su absorci&oacute;n de costos fijos</p>

                <script>

                document.addEventListener('DOMContentLoaded', function() {

                    var chart = window.chart = new EasyPieChart(document.querySelector('.graf7'), {

                        easing: 'easeOutElastic',

                        delay: 7000,

                        barColor: '#541913',

                        trackColor: '#D6D6D6',

                        scaleColor: false,

                        lineWidth: 20,

                        trackWidth: 16,

                        lineCap: 'butt',

                        onStep: function(from, to, percent) {

                            this.el.children[0].innerHTML = Math.round(percent);

                        }

                    });



                });

                </script>

            </div>

        <script src="<?php echo get_template_directory_uri(); ?>/js/easypiechart.js"></script>

        </div>

    </section>

<!-- TERMINA OBTENDRAS CAPACITACION -->



<!-- INCLUYEN CAPACITACIONES -->

    <section class="cont-incluyen-capacitacion">

        <div class="incluyen-capacitacion">

            <h3>Nuestras capacitaciones incluyen</h3>

            <ul>

                <li><img src="<?php echo get_template_directory_uri(); ?>/images/iss-consultores-capacitaciones-landing-diversas-disciplinas-icono.png" alt="ISS Consultores" /><p>La oportunidad de compartir las experiencias con profesionales de diversas disciplinas</p></li>

                <li><img src="<?php echo get_template_directory_uri(); ?>/images/iss-consultores-capacitaciones-landing-archivo-electronico-icono.png" alt="ISS Consultores" /><p>Acceso a las presentaciones y materiales en el archivo electr&oacute;nico</p></li>

                <li><img src="<?php echo get_template_directory_uri(); ?>/images/iss-consultores-capacitaciones-landing-estacionamiento-icono.png" alt="ISS Consultores" /><p>Estacionamiento</p></li>

                <li><img src="<?php echo get_template_directory_uri(); ?>/images/iss-consultores-capacitaciones-landing-coffee-break-icono.png" alt="ISS Consultores" /><p>Coffee break ma&ntilde;ana y tarde</p></li>

                <li><img src="<?php echo get_template_directory_uri(); ?>/images/iss-consultores-capacitaciones-landing-diploma-icono.png" alt="ISS Consultores" /><p>Diploma de participaci&oacute;n</p></li>

                <li><img src="<?php echo get_template_directory_uri(); ?>/images/iss-consultores-capacitaciones-landing-comida-icono.png" alt="ISS Consultores" /><p>Comida de mediod&iacute;a</p></li>

            </ul>

            <div class="btn-incluyen"><a href="#agenda" target="_self">VER AGENDA</a></div>

        </div>

    </section>

<!-- TERMINA INCLUYEN CAPACITACIONES -->



<!-- VAMOS CAPACITACION -->

    <section class="cont-vamos-capacitacion">

        <div class="vamos-capacitacion">

            <div class="img-vamos"><img src="<?php echo get_template_directory_uri(); ?>/images/iss-consultores-capacitaciones-vamos-img.png" alt="ISS Consultores" /></div>

            <div class="txt-vamos">

                <h2>Vamos hasta donde t&uacute; te encuentras</h2>

                <p>Ofrecemos consultor&iacute;as y capacitaciones personalizadas a las necesidades que tu empresa demanda</p>

                <div class="btn-vamos"><a href="#formCapa">SOLICITAR ASESOR&Iacute;A</a></div>

            </div>

        </div>

    </section>

<!-- TERMINA VAMOS CAPACITACION -->



<!-- AGENDA CAPACITACION -->

    <section id="agenda" class="cont-agenda-capacitacion">

        <div class="agenda-capacitacion">

            <h2>Agenda<br><span>de capacitaciones programadas</span></h2>

            <h3>Obt&eacute;n 10%<br><span>pagando en l&iacute;nea</span></h3>



            <div class="tabs-capacitacion">

                    <ul class="tabs">

                        <?php 

                            $cats = get_categories(array(

                                'parent' => 2,

                                'hide_empty' => false,

                                'exclude' => '9',

                                'orderby' => 'name',

                                'order' => ASC,

                            ));

                            foreach ($cats as $cat) {

                                echo '<li><a href="#'.$cat->slug.'">'.$cat->name.'</a></li>';

                            }

                        ?>
                        <li><a href="#todos">Todos</a></li>

                    </ul>

                    <div class="clr"></div>

                    <div class="block">

                            <?php

                                $catsarts = get_categories(array(

                                    'cat' => 2,

                                    'hide_empty' => false,

                                    'orderby' => 'name',

                                    'order' => ASC,

                                    'exclude' => 9,

                                ));

                                foreach ($catsarts as $singlecat) {

                                    ?>

                                        <article id="<?php echo $singlecat->slug; ?>">

                                            <?php

                                                $querycat = new WP_Query(array(

                                                    'category_name' => $singlecat->slug,

                                                    'posts_per_page' => -1,

                                                ));

                                                if($querycat->have_posts()) : while($querycat->have_posts()) : $querycat->the_post()

                                            ?>

                                                <div class="cont-gral-cap">

                                                <!-- art indiv -->

                                                    <div class="cont-cap">

                                                        <?php the_post_thumbnail('curso-indiv'); ?>

                                                        <div class="txt-cont-cap">

                                                            <p class="ttl-curso"><?php the_title(); ?></p>

                                                            <?php $precio = get_post_meta($post->ID,'_precionormal',true); if(!empty($precio)) { echo '<p class="precio-normal">'.$precio.' + IVA</p>'; } ?>

                                                            <?php $precioesp = get_post_meta($post->ID,'_precioespecial',true); if(!empty($precioesp)) { echo '<p class="precio-dcto">'.$precioesp.' + IVA</p>'; } ?>

                                                            <?php $fechas = get_post_meta($post->ID,'_fechascap',true); if(!empty($fechas)) { echo '<p class="fechas">'.$fechas.'</p>'; } ?>                                                        

                                                            <div class="btn-curso"><a href="<?php the_permalink(); ?>">CONOCER MÁS</a></div>

                                                        </div>

                                                    </div>

                                                <!-- fin art indiv -->

                                                </div>                                               

                                            <?php endwhile; endif; wp_reset_postdata(); ?>

                                        </article>

                                    <?php                                

                                }

                            ?>
                                        <article id="todos">
                                            <?php

                                                $querycat = new WP_Query(array(
                                                    'cat' => '3,4,5,6,7',
                                                    'posts_per_page' => -1,
                                                ));
                                                if($querycat->have_posts()) : while($querycat->have_posts()) : $querycat->the_post()
                                            ?>
                                            <div class="cont-gral-cap">
                                            <!-- art indiv -->
                                                <div class="cont-cap">
                                                    <?php the_post_thumbnail('curso-indiv'); ?>
                                                    <div class="txt-cont-cap">
                                                        <p class="ttl-curso"><?php the_title(); ?></p>
                                                        <?php $precio = get_post_meta($post->ID,'_precionormal',true); if(!empty($precio)) { echo '<p class="precio-normal">'.$precio.' + IVA</p>'; } ?>
                                                        <?php $precioesp = get_post_meta($post->ID,'_precioespecial',true); if(!empty($precioesp)) { echo '<p class="precio-dcto">'.$precioesp.' + IVA</p>'; } ?>
                                                        <?php $fechas = get_post_meta($post->ID,'_fechascap',true); if(!empty($fechas)) { echo '<p class="fechas">'.$fechas.'</p>'; } ?>
                                                        <div class="btn-curso"><a href="<?php the_permalink(); ?>">CONOCER MÁS</a></div>
                                                    </div>
                                                </div>
                                            <!-- fin art indiv -->
                                            </div>
                                            <?php endwhile; endif; wp_reset_postdata(); ?>
                                        </article>

                    </div>                    

                    

                    <script type="text/javascript">

                        $(function(){

                        $('ul.tabs li:first').addClass('active');

                        $('.block article').hide();

                        $('.block article:first').show();

                        $('ul.tabs li').on('click',function(){

                          $('ul.tabs li').removeClass('active');

                          $(this).addClass('active')

                          $('.block article').hide();

                          var activeTab = $(this).find('a').attr('href');

                          $(activeTab).show();

                          return false;

                          });

                        })

                    </script>

                </div>

        </div>

    </section>

<!-- TERMINA AGENDA CAPACITACION -->



<!-- ESCRIBENOS CAPACITACION -->

    <section id="formCapa" class="cont-escribenos-capacitacion">

        <div class="escribenos-capacitacion">

            <h2>Obtén cotización</h2>

            <p>Para capacitación y consultoría personalizada en tu empresa.</p>

            <form method="POST" action="<?php echo get_template_directory_uri(); ?>/obten-cotizacion-script.php">

                <input class="campos-cap" type="text" name="nombre" placeholder="Nombre" required />

                <input class="campos-cap" type="email" name="correo" placeholder="Correo electr&oacute;nico" required />

                <input type="hidden" name="url" value="<?php bloginfo('url'); ?>/capacitacion/" />

                <select class="campos-cap" name="tamanoempresa" required>

                    <option class="option" selected>Tamaño de empresa</option>

                    <option class="option" value="5 a 10 personas">5 a 10 personas</option>

                    <option class="option" value="5 a 50 personas">11 a 50 personas</option>

                    <option class="option" value="51 a 250 personas">51 a 250 personas</option>

                    <option class="option" value="251 a 500 personas">251 a 500 personas</option>

                    <option class="option" value="501 o más">501 personas o más</option>

                </select>

                <textarea class="campos-cap" name="mensaje" placeholder="Mensaje" required></textarea>

                <input class="btn-enviar-cap" type="submit" name="submit" value="ENVIAR">

            </form>

        </div>

    </section>

<!-- TERMINA ESCRIBENOS CAPACITACION -->

<?php get_footer(); ?>