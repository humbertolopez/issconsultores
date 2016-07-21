<?php include('header.php'); ?>

<!-- SLIDER CAPACITACION -->
    <section class="cont-slider-capacitacion">
        <div class="slider-capacitacion">
            <div class="slider-wrapper theme-default">
                <div id="slider" class="nivoSlider">
                    <img src="images/iss-consultores-capacitaciones-slider-uno.jpg" alt="ISS Consultores" title="#htmlcaption" />
                </div>
                <div id="htmlcaption" class="nivo-html-caption">
                    <p>Capacitaci&oacute;n de<br><span>administraci&oacute;n estrat&eacute;gica por directrices Hoshin Kanrin</span><br>Para establecer estrategias a mediano y largo plazo</p> 
                </div>
            </div>
            <script type="text/javascript" src="js/jquery-1.9.0.min.js"></script>
            <script type="text/javascript" src="js/jquery.nivo.slider.js"></script>
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
            <img src="images/iss-consultores-capacitaciones-titulo-img.png" alt="ISS Consultores" />
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
        <script src="js/easypiechart.js"></script>
        </div>
    </section>
<!-- TERMINA OBTENDRAS CAPACITACION -->

<!-- INCLUYEN CAPACITACIONES -->
    <section class="cont-incluyen-capacitacion">
        <div class="incluyen-capacitacion">
            <h3>Nuestras capacitaciones incluyen</h3>
            <ul>
                <li><img src="images/iss-consultores-capacitaciones-landing-diversas-disciplinas-icono.png" alt="ISS Consultores" /><p>La oportunidad de compartir las experiencias con profesionales de diversas disciplinas</p></li>
                <li><img src="images/iss-consultores-capacitaciones-landing-archivo-electronico-icono.png" alt="ISS Consultores" /><p>Acceso a las presentaciones y materiales en el archivo electr&oacute;nico</p></li>
                <li><img src="images/iss-consultores-capacitaciones-landing-estacionamiento-icono.png" alt="ISS Consultores" /><p>Estacionamiento</p></li>
                <li><img src="images/iss-consultores-capacitaciones-landing-coffee-break-icono.png" alt="ISS Consultores" /><p>Coffee break ma&ntilde;ana y tarde</p></li>
                <li><img src="images/iss-consultores-capacitaciones-landing-diploma-icono.png" alt="ISS Consultores" /><p>Diploma de participaci&oacute;n</p></li>
                <li><img src="images/iss-consultores-capacitaciones-landing-comida-icono.png" alt="ISS Consultores" /><p>Comida de mediod&iacute;a</p></li>
            </ul>
            <div class="btn-incluyen"><a href="#" target="_self">VER AGENDA</a></div>
        </div>
    </section>
<!-- TERMINA INCLUYEN CAPACITACIONES -->

<!-- VAMOS CAPACITACION -->
    <section class="cont-vamos-capacitacion">
        <div class="vamos-capacitacion">
            <div class="img-vamos"><img src="images/iss-consultores-capacitaciones-vamos-img.png" alt="ISS Consultores" /></div>
            <div class="txt-vamos">
                <h2>Vamos hasta donde t&uacute; te encuentras</h2>
                <p>Ofrecemos consultor&iacute;as y capacitaciones personalizadas a las necesidades que tu empresa demanda</p>
                <div class="btn-vamos"><a href="#" target="_self">SOLICITAR ASESOR&Iacute;A</a></div>
            </div>
        </div>
    </section>
<!-- TERMINA VAMOS CAPACITACION -->

<!-- AGENDA CAPACITACION -->
    <section class="cont-agenda-capacitacion">
        <div class="agenda-capacitacion">
            <h2>Agenda<br><span>de capacitaciones programadas</span></h2>
            <h3>Obt&eacute;n 10%<br><span>pagando en l&iacute;nea</span></h3>

            <div class="tabs-capacitacion">
                    <ul class="tabs">
                        <li><a href="#procesos">Procesos</a></li>
                        <li><a href="#gestion">Gesti&oacute;n de calidad</a></li>
                        <li><a href="#diseno">Dise&ntilde;o de calidad</a></li>
                        <li><a href="#aseguramiento">Aseguramiento de calidad</a></li>
                    </ul>
                    <div class="clr"></div>
                    <div class="block">
                        
                        <article id="procesos">
                            <div class="cont-gral-cap">
                                <div class="cont-cap">
                                    <img src="images/iss-consultores-capacitaciones-curso-img.jpg" alt="ISS Consultores" />
                                    <div class="txt-cont-cap">
                                        <p class="ttl-curso">Control estad&iacute;stico de Procesos</p>
                                        <p class="precio-normal">$4,500</p>
                                        <p class="precio-dcto">$4,000</p>
                                        <p class="fechas">20 y 21 de Junio<br>21 y 22 de Noviembre</p>
                                        <div class="btn-curso"><a href="#" target="_self">CONOCER M&Aacute;S</a></div>
                                    </div>
                                </div>
                            </div>
                            <div class="cont-gral-cap">
                                <div class="cont-cap">
                                    <img src="images/iss-consultores-capacitaciones-curso-img.jpg" alt="ISS Consultores" />
                                    <div class="txt-cont-cap">
                                        <p class="ttl-curso">Control estad&iacute;stico de Procesos</p>
                                        <p class="precio-normal">$4,500</p>
                                        <p class="precio-dcto">$4,000</p>
                                        <p class="fechas">20 y 21 de Junio<br>21 y 22 de Noviembre</p>
                                        <div class="btn-curso"><a href="#" target="_self">CONOCER M&Aacute;S</a></div>
                                    </div>
                                </div>
                            </div>
                            <div class="cont-gral-cap">
                                <div class="cont-cap">
                                    <img src="images/iss-consultores-capacitaciones-curso-img.jpg" alt="ISS Consultores" />
                                    <div class="txt-cont-cap">
                                        <p class="ttl-curso">Control estad&iacute;stico de Procesos</p>
                                        <p class="precio-normal">$4,500</p>
                                        <p class="precio-dcto">$4,000</p>
                                        <p class="fechas">20 y 21 de Junio<br>21 y 22 de Noviembre</p>
                                        <div class="btn-curso"><a href="#" target="_self">CONOCER M&Aacute;S</a></div>
                                    </div>
                                </div>
                            </div>
                        </article>

                        <article id="gestion">
                            <div class="cont-gral-cap">
                                <div class="cont-cap">
                                    <img src="images/iss-consultores-capacitaciones-curso-img.jpg" alt="ISS Consultores" />
                                    <div class="txt-cont-cap">
                                        <p class="ttl-curso">Control estad&iacute;stico de Procesos</p>
                                        <p class="precio-normal">$4,500</p>
                                        <p class="precio-dcto">$4,000</p>
                                        <p class="fechas">20 y 21 de Junio<br>21 y 22 de Noviembre</p>
                                        <div class="btn-curso"><a href="#" target="_self">CONOCER M&Aacute;S</a></div>
                                    </div>
                                </div>
                            </div>
                            <div class="cont-gral-cap">
                                <div class="cont-cap">
                                    <img src="images/iss-consultores-capacitaciones-curso-img.jpg" alt="ISS Consultores" />
                                    <div class="txt-cont-cap">
                                        <p class="ttl-curso">Control estad&iacute;stico de Procesos</p>
                                        <p class="precio-normal">$4,500</p>
                                        <p class="precio-dcto">$4,000</p>
                                        <p class="fechas">20 y 21 de Junio<br>21 y 22 de Noviembre</p>
                                        <div class="btn-curso"><a href="#" target="_self">CONOCER M&Aacute;S</a></div>
                                    </div>
                                </div>
                            </div>
                            <div class="cont-gral-cap">
                                <div class="cont-cap">
                                    <img src="images/iss-consultores-capacitaciones-curso-img.jpg" alt="ISS Consultores" />
                                    <div class="txt-cont-cap">
                                        <p class="ttl-curso">Control estad&iacute;stico de Procesos</p>
                                        <p class="precio-normal">$4,500</p>
                                        <p class="precio-dcto">$4,000</p>
                                        <p class="fechas">20 y 21 de Junio<br>21 y 22 de Noviembre</p>
                                        <div class="btn-curso"><a href="#" target="_self">CONOCER M&Aacute;S</a></div>
                                    </div>
                                </div>
                            </div>
                            <div class="cont-gral-cap">
                                <div class="cont-cap">
                                    <img src="images/iss-consultores-capacitaciones-curso-img.jpg" alt="ISS Consultores" />
                                    <div class="txt-cont-cap">
                                        <p class="ttl-curso">Control estad&iacute;stico de Procesos</p>
                                        <p class="precio-normal">$4,500</p>
                                        <p class="precio-dcto">$4,000</p>
                                        <p class="fechas">20 y 21 de Junio<br>21 y 22 de Noviembre</p>
                                        <div class="btn-curso"><a href="#" target="_self">CONOCER M&Aacute;S</a></div>
                                    </div>
                                </div>
                            </div>
                            <div class="cont-gral-cap">
                                <div class="cont-cap">
                                    <img src="images/iss-consultores-capacitaciones-curso-img.jpg" alt="ISS Consultores" />
                                    <div class="txt-cont-cap">
                                        <p class="ttl-curso">Control estad&iacute;stico de Procesos</p>
                                        <p class="precio-normal">$4,500</p>
                                        <p class="precio-dcto">$4,000</p>
                                        <p class="fechas">20 y 21 de Junio<br>21 y 22 de Noviembre</p>
                                        <div class="btn-curso"><a href="#" target="_self">CONOCER M&Aacute;S</a></div>
                                    </div>
                                </div>
                            </div>
                            <div class="cont-gral-cap">
                                <div class="cont-cap">
                                    <img src="images/iss-consultores-capacitaciones-curso-img.jpg" alt="ISS Consultores" />
                                    <div class="txt-cont-cap">
                                        <p class="ttl-curso">Control estad&iacute;stico de Procesos</p>
                                        <p class="precio-normal">$4,500</p>
                                        <p class="precio-dcto">$4,000</p>
                                        <p class="fechas">20 y 21 de Junio<br>21 y 22 de Noviembre</p>
                                        <div class="btn-curso"><a href="#" target="_self">CONOCER M&Aacute;S</a></div>
                                    </div>
                                </div>
                            </div>
                        </article>

                        <article id="diseno">
                            <div class="cont-gral-cap">
                                <div class="cont-cap">
                                    <img src="images/iss-consultores-capacitaciones-curso-img.jpg" alt="ISS Consultores" />
                                    <div class="txt-cont-cap">
                                        <p class="ttl-curso">Control estad&iacute;stico de Procesos</p>
                                        <p class="precio-normal">$4,500</p>
                                        <p class="precio-dcto">$4,000</p>
                                        <p class="fechas">20 y 21 de Junio<br>21 y 22 de Noviembre</p>
                                        <div class="btn-curso"><a href="#" target="_self">CONOCER M&Aacute;S</a></div>
                                    </div>
                                </div>
                            </div>
                            <div class="cont-gral-cap">
                                <div class="cont-cap">
                                    <img src="images/iss-consultores-capacitaciones-curso-img.jpg" alt="ISS Consultores" />
                                    <div class="txt-cont-cap">
                                        <p class="ttl-curso">Control estad&iacute;stico de Procesos</p>
                                        <p class="precio-normal">$4,500</p>
                                        <p class="precio-dcto">$4,000</p>
                                        <p class="fechas">20 y 21 de Junio<br>21 y 22 de Noviembre</p>
                                        <div class="btn-curso"><a href="#" target="_self">CONOCER M&Aacute;S</a></div>
                                    </div>
                                </div>
                            </div>
                            <div class="cont-gral-cap">
                                <div class="cont-cap">
                                    <img src="images/iss-consultores-capacitaciones-curso-img.jpg" alt="ISS Consultores" />
                                    <div class="txt-cont-cap">
                                        <p class="ttl-curso">Control estad&iacute;stico de Procesos</p>
                                        <p class="precio-normal">$4,500</p>
                                        <p class="precio-dcto">$4,000</p>
                                        <p class="fechas">20 y 21 de Junio<br>21 y 22 de Noviembre</p>
                                        <div class="btn-curso"><a href="#" target="_self">CONOCER M&Aacute;S</a></div>
                                    </div>
                                </div>
                            </div>
                        </article>

                        <article id="aseguramiento">
                            <div class="cont-gral-cap">
                                <div class="cont-cap">
                                    <img src="images/iss-consultores-capacitaciones-curso-img.jpg" alt="ISS Consultores" />
                                    <div class="txt-cont-cap">
                                        <p class="ttl-curso">Control estad&iacute;stico de Procesos</p>
                                        <p class="precio-normal">$4,500</p>
                                        <p class="precio-dcto">$4,000</p>
                                        <p class="fechas">20 y 21 de Junio<br>21 y 22 de Noviembre</p>
                                        <div class="btn-curso"><a href="#" target="_self">CONOCER M&Aacute;S</a></div>
                                    </div>
                                </div>
                            </div>
                            <div class="cont-gral-cap">
                                <div class="cont-cap">
                                    <img src="images/iss-consultores-capacitaciones-curso-img.jpg" alt="ISS Consultores" />
                                    <div class="txt-cont-cap">
                                        <p class="ttl-curso">Control estad&iacute;stico de Procesos</p>
                                        <p class="precio-normal">$4,500</p>
                                        <p class="precio-dcto">$4,000</p>
                                        <p class="fechas">20 y 21 de Junio<br>21 y 22 de Noviembre</p>
                                        <div class="btn-curso"><a href="#" target="_self">CONOCER M&Aacute;S</a></div>
                                    </div>
                                </div>
                            </div>
                            <div class="cont-gral-cap">
                                <div class="cont-cap">
                                    <img src="images/iss-consultores-capacitaciones-curso-img.jpg" alt="ISS Consultores" />
                                    <div class="txt-cont-cap">
                                        <p class="ttl-curso">Control estad&iacute;stico de Procesos</p>
                                        <p class="precio-normal">$4,500</p>
                                        <p class="precio-dcto">$4,000</p>
                                        <p class="fechas">20 y 21 de Junio<br>21 y 22 de Noviembre</p>
                                        <div class="btn-curso"><a href="#" target="_self">CONOCER M&Aacute;S</a></div>
                                    </div>
                                </div>
                            </div>
                            <div class="cont-gral-cap">
                                <div class="cont-cap">
                                    <img src="images/iss-consultores-capacitaciones-curso-img.jpg" alt="ISS Consultores" />
                                    <div class="txt-cont-cap">
                                        <p class="ttl-curso">Control estad&iacute;stico de Procesos</p>
                                        <p class="precio-normal">$4,500</p>
                                        <p class="precio-dcto">$4,000</p>
                                        <p class="fechas">20 y 21 de Junio<br>21 y 22 de Noviembre</p>
                                        <div class="btn-curso"><a href="#" target="_self">CONOCER M&Aacute;S</a></div>
                                    </div>
                                </div>
                            </div>
                            <div class="cont-gral-cap">
                                <div class="cont-cap">
                                    <img src="images/iss-consultores-capacitaciones-curso-img.jpg" alt="ISS Consultores" />
                                    <div class="txt-cont-cap">
                                        <p class="ttl-curso">Control estad&iacute;stico de Procesos</p>
                                        <p class="precio-normal">$4,500</p>
                                        <p class="precio-dcto">$4,000</p>
                                        <p class="fechas">20 y 21 de Junio<br>21 y 22 de Noviembre</p>
                                        <div class="btn-curso"><a href="#" target="_self">CONOCER M&Aacute;S</a></div>
                                    </div>
                                </div>
                            </div>
                            <div class="cont-gral-cap">
                                <div class="cont-cap">
                                    <img src="images/iss-consultores-capacitaciones-curso-img.jpg" alt="ISS Consultores" />
                                    <div class="txt-cont-cap">
                                        <p class="ttl-curso">Control estad&iacute;stico de Procesos</p>
                                        <p class="precio-normal">$4,500</p>
                                        <p class="precio-dcto">$4,000</p>
                                        <p class="fechas">20 y 21 de Junio<br>21 y 22 de Noviembre</p>
                                        <div class="btn-curso"><a href="#" target="_self">CONOCER M&Aacute;S</a></div>
                                    </div>
                                </div>
                            </div>
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
    <section class="cont-escribenos-capacitacion">
        <div class="escribenos-capacitacion">
            <h2>Escr&iacute;benos</h2>
            <p>Te mantendremos informado de nuestros pr&oacute;ximos cursos y responderemos tus dudas</p>
            <form method="POST" action="#">
                <input class="campos-cap" type="text" name="nombre" placeholder="Nombre" required />
                <input class="campos-cap" type="email" name="correo" placeholder="Correo electr&oacute;nico" required />
                <select class="campos-cap" name="servicio-interes" required>
                    <option selected>Servicio de inter&eacute;s</option>
                    <option value="uno">Servicio Uno</option>
                    <option value="dos">Servicio Dos</option>
                    <option value="tres">Servicio Tres</option>
                </select>
                <select class="campos-cap" name="tamano-empresa" required>
                    <option selected>Tama&ntilde;o de empresa</option>
                    <option value="5-a-10">5 a 10 personas</option>
                    <option value="11-a-20">11 a 20 personas</option>
                    <option value="21-a-40">21 a 40 personas</option>
                    <option value="40-o-mas">41 o m&aacute;s personas</option>
                </select>
                <textarea class="campos-cap" name="mensaje" placeholder="Mensaje" required></textarea>
                <input class="btn-enviar-cap" type="submit" value="ENVIAR">
            </form>
        </div>
    </section>
<!-- TERMINA ESCRIBENOS CAPACITACION -->

<?php include('footer.php'); ?>