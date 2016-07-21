<?php get_header(); ?>
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
	<section class="blog-head block">
		<?php 
			$destacado = new WP_Query(array(
					'category_name' => 'destacado',
					'posts_per_page' => 1,
				));
			if($destacado->have_posts()) : while($destacado->have_posts()) : $destacado->the_post();
			remove_filter('the_excerpt','wpautop');
		?>
			<div class="blog-head-art block">
				<div class="blog-img">
					<?php the_post_thumbnail('blog-cat-page'); ?>
				</div>
				<div class="blog-content">
					<h2 class="blog"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
					<div class="thedate block">
						<p class="dateicon"><?php the_date(); ?></p>
						<p class="commenticon"><span class="fb-comments-count" data-href="<?php the_permalink(); ?>"></span> Comentario(s)</p>
						<p class="shareicon">Share</p>
					</div>
					<p class="excerpt"><?php the_excerpt(); ?></p>
				</div>
			</div>
		<?php endwhile; endif; wp_reset_query(); ?>
	</section>
	<section class="blog-arts block">
		<ul class="block">
			<?php
				if(have_posts()) : while(have_posts()) : the_post();
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
			<?php endwhile; endif; ?>
		</ul>
	</section>
<?php get_footer(); ?>