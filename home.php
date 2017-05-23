<!-- Archivo principal de página de Wordprees, HOME -->
<?php get_header(); ?>

<!-- Listado de post -->
<?php if ( have_post() ): ?>
	<section>
		<?php while (have_post() ) : the_post(); ?>
			<article>
				<header>
					<h1><a href="<? php the_permalink(); ?>"><?php the_title(); ?></a></h1>
					<time datetime="<?php the_time('Y-m-j'); ?>"><?php the_time('j F, Y'); ?></time>
				</header>
				<?php the_excerpt();?>
				<footer>
					<address>Por <?php the_autor_post_link() ?></address>
				</footer>
			</article>
		<?php endwhile; ?>
		<div class="pagination">
			<span class="in-left"><?php next_post_link (' Entradas antiguas'); ?></span>
			<span class="in-right"><?php previous_post_link ('Entradas Recientes'); ?></span>
		</div>
	</section>
<?php else : ?>
	<p><?php _e ('UPS!, no hay entradas.');?></p>
<?php endif; ?>

<!--Archivo de la barra lateral por defecto -->
<?php get_sidebar(); ?>

<!--Archivo de pié de página de Wordpress-->
<?php get_footer(); ?>

