<?php get_header(); ?>
	<section class="cont-top-datos">
	    <div class="top-datos">
	        <h2>Nuestras próximas capacitaciones programadas.</h2>
	    </div>
	</section>
	<section class="content-aviso">
		<ul class="capacitaciones-list">
			<?php
				$capacitaciones = new WP_Query(array(
					'cat' => '3,4,5,6,7',
					'posts_per_page' => -1,
				));
				if($capacitaciones->have_posts()) : while($capacitaciones->have_posts()) : $capacitaciones->the_post();
			?>
			<li>
				<h3><a href="<?php the_permalink(); ?>"><?php the_title() ;?></a></h3>
				<?php $fechas = get_post_meta($post->ID,'_fechascap',true); if(!empty($fechas)) { echo '<p class="fechas"><strong>Fecha y horarios:</strong> '.$fechas.'</p>'; } ?>
				<?php $precioesp = get_post_meta($post->ID,'_precioespecial',true); if(!empty($precioesp)) { echo '<p class="precio-dcto"><strong>Precio especial compra en línea:</strong> '.$precioesp.' + IVA</p>'; } ?>
				<?php $temario = get_post_meta($post->ID,'_pdftemario',true); if(!empty($temario)) { echo '<p class="pdftemario"><a href="'.$temario.'" target="_blank">Descarga el temario en PDF</a>'; } ?>
			</li>
			<?php endwhile; endif; wp_reset_postdata(); ?>
		</ul>
	</section>
<?php get_footer(); ?>