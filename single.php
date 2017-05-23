<!-- Archivo de cabecera global de Wordpress template para los post -->
<!--Autores: Francisco Javier Castañeda Trujillo-->
<!--CIDWA 2017-->
 <?php get_header(); ?>
 <!-- Contenido del Post -->
 <?php if (have_posts() ) : the_post(); ?>
 	<section>
 		<h1><?php the_title(); ?></h1>
 		<time datetime="<?php the_time ('Y-m-j'); ?>"><?php the_time('j F, Y'); ?> </time>
 		<?php the_content(); ?>
 		<address>Por <?php the_author_posts_link() ?></address>
 	</section>
 <?php else: ?>
 	<p><?php _e('Ups!, esta entrada no existe.') ?></p>
 <?php endif; ?>
 <!-- Archivo de barra lateral por defecto -->
 <?php get_sidebar(); ?>
 <!-- Archivo de pié global de Wordpress -->
 <?php get_footer(); ?>
