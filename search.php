<!-- Archivo principal de página de Wordprees, HOME -->
<!--Autores: Francisco Javier Castañeda Trujillo-->
<!--CIDWA 2017-->
<?php get_header(); ?>
<!-- Búsqueda -->
<p>Resultado de la búsqueda para <strong><?php echo get_search_query() ?></strong></p>
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
					<?php the_tags('<ul><li>','</li><li>','</li></ul>'); ?>
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
 
