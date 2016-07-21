<?php get_header(); ?>
<?php if(in_category('blog'))
{
    ?>
        <!-- fb -->
        <div id="fb-root"></div>
        <script>(function(d, s, id) {
          var js, fjs = d.getElementsByTagName(s)[0];
          if (d.getElementById(id)) return;
          js = d.createElement(s); js.id = id;
          js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.7&appId=277398232594496";
          fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script>
        <!-- fb -->
        <section class="content-aviso">
            <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
            <h1><?php the_title(); ?></h1>
            <?php the_post_thumbnail(); ?>
            <?php the_content(); ?>
            <?php endwhile; endif; ?>
        </section>
        <section class="content-aviso">
            <div class="fb-comments" data-href="<?php the_permalink(); ?>" data-numposts="5" data-width="100%"></div>
        </section>
        <section class="blog-arts block">
            <h2 class="mas-blog">Más artículos dentro del blog</h2>
            <ul class="block">
                <?php
                    $blogarts = new WP_Query(array(
                        'category_name' => 'blog',
                        'posts_per_page' => 2,
                        'order' => 'rand',
                    ));
                    if($blogarts->have_posts()) : while($blogarts->have_posts()) : $blogarts->the_post();
                    remove_filter('the_excerpt','wpautop');
                ?>          
                <li>
                    <h2 class="blog"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                    <?php the_post_thumbnail('blog-cat-page'); ?>
                    <div class="thedate block">
                        <p class="dateicon"><?php echo get_the_date(); ?></p>
                        <p class="commenticon"><span class="fb-comments-count" data-href="<?php the_permalink(); ?>"></span> Comentario(s)</p>
                        <p class="shareicon">Share</p>
                    </div>
                    <p class="excerpt"><?php the_excerpt(); ?></p>
                </li>
                <?php endwhile; endif; wp_reset_postdata(); ?>
            </ul>
        </section>
    <?php
}
else
{
    ?>
        <!-- TOP CURSOS CAPACITACION SINGLE -->
            <section class="cont-top-single">
                <div class="top-single">
                    <?php
                        if(have_posts()) : while(have_posts()) : the_post();
                    ?>
                    <?php the_post_thumbnail('curso-img'); ?>
                    <div class="datos-single">
                        <div class="txt-single">
                            <h2><?php the_title(); ?></h2>
                            <?php
                                //meta fecha
                                $fecha = get_post_meta($post->ID,'_fechascap',true);
                                if(!empty($fecha))
                                {
                                    echo '<p class="fecha">'.$fecha.'</p>';
                                }
                                else
                                {
                                    echo '<p class="fecha">Fechas por definir</p>';
                                }
                                //meta de precio normal
                                $precionormal = get_post_meta($post->ID,'_precionormal',true);
                                $precioesp = get_post_meta($post->ID,'_precioespecial',true);
                                if(!empty($precionormal) && empty($precioesp))
                                {
                                    echo '<p class="precio">'.$precionormal.'</p>';
                                }
                                else if (!empty($precionormal) && !empty($precioesp))
                                {
                                    echo '<p class="precio-normal">'.$precionormal.' + IVA</p><p class="precio-dcto">'.$precioesp.' + IVA</p>';
                                }
                                else 
                                {   
                                    echo '<p class="precio">Precio por definir</p>';
                                }
                                //meta del lugar
                                $lugar = get_post_meta($post->ID,'_lugar',true);
                                if(!empty($lugar))
                                {
                                    echo '<p class="lugar"><span>Lugar: </span>'.$lugar.'</p>';
                                }
                                else
                                {
                                    echo '<p class="lugar"><span>Lugar:</span> Por definir</p>';
                                }
                                //meta del duracion
                                $duracion = get_post_meta($post->ID,'_duracion',true);
                                if(!empty($duracion))
                                {
                                    echo '<p class="duracion"><span>Duración: </span>'.$duracion.'</p>';
                                }
                                else
                                {
                                    echo '<p class="duracion"><span>Duración:</span> Por definir</p>';
                                }
                            ?>                    
                            <h3>Tambi&eacute;n vamos a tu empresa</h3>
                            <div class="btn-single"><a href="#" target="_self">DESCARGAR TEMARIO</a></div>
                        </div>
                    <?php endwhile; endif; ?>
                        <div class="form-single">
                            <p>Obtén el temario para este curso.</p>
                            <form method="POST" action="<?php echo get_template_directory_uri(); ?>/descargatemario-script.php">
                                <input class="campos-single" type="txt" name="nombre" placeholder="Nombre" required />
                                <input class="campos-single" type="email" name="correo" placeholder="Correo electrónico" required />
                                <select class="campos-consultoria" name="tamanoempresa" required>
                                    <option class="option" selected>Tamaño de empresa</option>
                                    <option class="option" value="5 a 10 personas">5 a 10 personas</option>
                                    <option class="option" value="5 a 50 personas">11 a 50 personas</option>
                                    <option class="option" value="51 a 250 personas">51 a 250 personas</option>
                                    <option class="option" value="251 a 500 personas">251 a 500 personas</option>
                                    <option class="option" value="501 o más">501 personas o más</option>
                                </select>
                                <input type="hidden" name="temariopdf" value="<?php $post = $wp_query->post; $temariopdf = get_post_meta($post->ID,'_pdftemario',true); echo $temariopdf; ?>">
                                <input type="hidden" name="url" value="<?php the_permalink(); ?>" />
                                <textarea class="campos-single" name="mensaje" placeholder="Mensaje" required></textarea>
                                <input class="btn-enviar-single" type="submit" name="submit" value="DESCARGA EL TEMARIO" />
                            </form>
                        </div>
                    </div>
                    <div class="reservar-single">
                        <?php
                            $precioesp = get_post_meta($post->ID,'_precioespecial',true);
                            if($precioesp != '')
                            {
                                ?>
                                    <h3>Paga en l&iacute;nea para obtener <span>10%</span></h3>
                                    <!-- paypal button -->
                                    <form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post" target="_top">
                                        <input type="hidden" name="cmd" value="_xclick">
                                        <input type="hidden" name="business" value="humberto@suchiate.net">
                                        <input type="hidden" name="item_name" value="<?php $title = remove_accents(the_title()); echo $title; ?>">
                                        <input type="hidden" name="lc" value="MX">
                                        <input type="hidden" name="return" value="<?php the_permalink(); ?>">
                                        <input type="hidden" name="rm" value="1">
                                        <input type="hidden" name="cbt" value="Regresar al sitio web de ISS Consultores">
                                        <input type="hidden" name="amount" value="<?php echo $precioesp; ?>">
                                        <input type="hidden" name="currency_code" value="MXN">
                                        <input type="hidden" name="button_subtype" value="services">
                                        <input type="hidden" name="no_note" value="0">
                                        <input type="hidden" name="bn" value="PP-BuyNowBF:btn_buynow_LG.gif:NonHostedGuest">
                                        <input type="image" src="https://www.paypalobjects.com/es_XC/i/btn/btn_buynow_LG.gif" border="0" name="submit" alt="PayPal, la forma más segura y rápida de pagar en línea.">
                                        <img alt="" border="0" src="https://www.paypalobjects.com/en_AU/i/scr/pixel.gif" width="1" height="1">
                                    </form>                            
                                    <!-- fin paypal button -->
                                <?php
                            }
                        ?>
                        <!-- <div class="btn-reservar-single"><a href="#" target="_self">RESERVAR</a></div> -->
                        <p class="disp">10 lugares disponibles</p>
                    </div>
                </div>
            </section>
        <!-- TERMINA TOP CURSOS CAPACITACION SINGLE -->

        <!-- AGENDA CAPACITACION -->
            <section class="cont-agenda-capacitacion">
                <div class="agenda-capacitacion">

                    <div class="tabs-capacitacion">
                            <ul class="tabs">
                                <li><a href="#beneficios">Beneficios<br>&nbsp;</a></li>
                                <li><a href="#participantes">Los participantes<br>ser&aacute;n capaces de...</a></li>
                                <li><a href="#dirigido">El curso est&aacute;<br>dirigido a...</a></li>
                            </ul>
                            <div class="clr"></div>
                            <div class="block">
                                
                                <article id="beneficios" class="beneficios">
                                    <ul>
                                        <?php
                                            $compartir = get_post_meta($post->ID,'_compartir',true);
                                            $estacionamiento = get_post_meta($post->ID,'_estacionamiento',true);
                                            $diploma = get_post_meta($post->ID,'_diploma',true);
                                            $manual = get_post_meta($post->ID,'_manual',true);
                                            $acceso = get_post_meta($post->ID,'_acceso',true);
                                            $coffee = get_post_meta($post->ID,'_coffeebreak',true);
                                            $comida = get_post_meta($post->ID,'_comida',true);
                                            if($compartir == 'true')
                                            {
                                                echo '<li><img src="'.get_template_directory_uri().'/images/iss-consultores-capacitaciones-landing-diversas-disciplinas-icono.png" alt="ISS Consultores" /><p>La oportunidad de compartir las experiencias con profesionales de diversas disciplinas</p></li>';
                                            }
                                            if($estacionamiento == 'true')
                                            {
                                                echo '<li><img src="'.get_template_directory_uri().'/images/iss-consultores-capacitaciones-landing-estacionamiento-icono.png" alt="ISS Consultores" /><p>Estacionamiento</p>';
                                            }
                                            if($diploma == 'true')
                                            {
                                                echo '<li><img src="'.get_template_directory_uri().'/images/iss-consultores-capacitaciones-landing-diploma-icono.png" alt="ISS Consultores" /><p>Diploma de participación</p>';
                                            }
                                            if($manual == 'true')
                                            {
                                                echo '<li><img src="'.get_template_directory_uri().'/images/iss-consultores-capacitaciones-landing-manual-icono.png" alt="ISS Consultores" /><p>Manual por participante</p>';
                                            }
                                            if($acceso == 'true')
                                            {
                                                echo '<li><img src="'.get_template_directory_uri().'/images/iss-consultores-capacitaciones-landing-archivo-electronico-icono.png" alt="ISS Consultores" /><p>Acceso a las presentaciones y materiales en el archivo electrónico</p>';
                                            }
                                            if($coffee == 'true')
                                            {
                                                echo '<li><img src="'.get_template_directory_uri().'/images/iss-consultores-capacitaciones-landing-coffee-break-icono.png" alt="ISS Consultores" /><p>Coffee break mañana y tarde</p>';
                                            }                                    
                                            if($comida == 'true')
                                            {
                                                echo '<li><img src="'.get_template_directory_uri().'/images/iss-consultores-capacitaciones-landing-comida-icono.png" alt="ISS Consultores" /><p>Comida de mediodía</p>';
                                            }
                                        ?>
                                    </ul>
                                </article>

                                <article id="participantes" class="participantes">
                                    <h2>Los participantes serán capaces de:</h2>
                                    <?php the_content(); ?>
                                </article>

                                <article id="dirigido" class="dirigido">
                                    <h2>Este curso va dirigido a...</h2>
                                    <?php
                                        global $post;
                                        $cursoid = $post->ID;
                                        $dirigido = get_post_meta($cursoid,'_dirigido',true);
                                        echo $dirigido;
                                    ?>
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
    <?php
}

?>

<?php include('footer.php'); ?>