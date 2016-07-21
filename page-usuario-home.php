<?php get_header(); ?>
<?php 
	if(is_user_logged_in()) {
		?>
		<section class="cont-titulo-consultoria">
	        <div class="titulo-user-home">
	            <h2>Bienvenido a ISS, Consultores</h2>
	            <p>Aquí podrás consultar la información sobre nuestras próximas capacitaciones, descargar temarios y comprar tu lugar con descuento especial.</p>
	        </div>
	    </section>
	    <section class="cont-girosemp-index">
	            <div class="girosemp-index user-options">
	                <ul>
	                    <li>
	                    	<a href="<?php bloginfo('url'); ?>/usuario-home/editar-usuario/">
		                    	<img src="http://imagencomunicacionimpresa.net/issconsultores/wp-content/themes/issconsultores/images/tus-datos.png" alt="ISS Consultores">
		                    	<p class="max-width250">Añade tus datos.</p>
	                    	</a>
                    	</li>
	                    <li>
	                    	<a href="<?php bloginfo('url'); ?>/usuario-home/capacitaciones/">
		                    	<img src="http://imagencomunicacionimpresa.net/issconsultores/wp-content/themes/issconsultores/images/iss-consultores-giros-educativo.png" alt="ISS Consultores">
		                    	<p class="max-width250">Consulta nuestras capacitaciones.</p>
		                    </a>
	                    </li>
	                    <li>
	                    	<a href="<?php bloginfo('url'); ?>/consultoria/#compra-diagnostico-anchor">
		                    	<img src="http://imagencomunicacionimpresa.net/issconsultores/wp-content/themes/issconsultores/images/iss-consultores-giros-hotelero.png" alt="ISS Consultores">
		                    	<p class="max-width250">Solicita el diagnóstico para tu empresa.</p>
		                    </a>
                    	</li> 
	                </ul>
	            </div>
	        </section>
		<?php
	}
	else
	{
		?>
			<section class="content-login">
				<?php echo do_shortcode('[custom-login-form]'); ?>
			</section>
		<?php
	}
?>
<?php get_footer(); ?>