<?php get_header(); ?>

<!-- ESCRIBENOS CAPACITACION -->

    <section id="formCapa" class="cont-escribenos-capacitacion">

        <div class="escribenos-capacitacion">

            <h2>Comunícate con nosotros</h2>

            <p>Obtén información sobre capacitaciones y asesorías personalizadas en tu empresa.</p>

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