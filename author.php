<!-- Archivo principal de página de Wordpress-->
<!--Autores: Francisco Javier Castañeda Trujillo-->
<!--CIDWA 2017-->
<?php get_header(); ?>
<!-- Autor -->
<p>Post de <strong><?php echo get_the_author(); ?></strong></p>
<!-- Listado de post -->
<?php if ( have_posts() ): ?>
	<section>
		<?php while (have_posts() ) : the_post(); ?>
			<article>
				<header>
					<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
					<time datetime="<?php the_time('Y-m-j'); ?>"><?php the_time('j F, Y'); ?></time>
					<?php the_category(); ?>
				</header>
				<?php the_excerpt(); ?>
				<footer>
					<address>Por <?php the_author_posts_link() ?></address>
				</footer>
			</article>
		<?php endwhile; ?>
		<div class="pagination">
			<span class="in-left"><?php next_posts_link (' Entradas antiguas'); ?></span>
			<span class="in-right"><?php previous_posts_link ('Entradas Recientes'); ?></span>
		</div>
	</section>
<?php else : ?>
	<p><?php _e ('UPS!, no hay entradas.');?></p>
<?php endif; ?>

<!--Archivo de la barra lateral por defecto -->
<?php get_sidebar(); ?>

<!--Archivo de pié de página de Wordpress-->
<?php get_footer(); ?>

 
 
