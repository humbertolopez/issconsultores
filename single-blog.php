<?php get_header(); ?>

<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
    <section class="content-aviso">
        <?php the_post_thumbnail(); ?>
        <h1><?php the_title(); ?></h1>
        <?php the_content(); ?>
    </section>  
<?php endwhile; endif; ?>

<?php get_footer(); ?>