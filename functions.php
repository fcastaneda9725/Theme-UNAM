<?php 

/**
	*Crear nuestros menús gestionables desde el
	*administrador de Wordpress.
*/

function mis_menus() 
{
	register_nav_menus(
		array(
			'navegation' => __ ('Menú de navegación'),
			)
		);
}
add_action ( 'init', 'mis_menus' );

/**
	*Crear una zona de widgets que podremos gestionar
	*fácilmente desde administrador de Worspress.
*/

function mis_widgets()
{
	register_sidebar(
		array(
			'name'			=> __( 'Sidebar'),
			'id'			=> 'sidebar',
			'before_widget'	=> '<div class="widget">',
			'after_widget'	=> '</div>',
			'before_title' 	=> '<h3>',
			'after_title'	=> '</h3>',
		)
	);
}
add_action('init','mis_widgets');

	/**
		*Filtrar resultados de búsqueda para que solo muestre
		*post en el listado
	*/

function buscar_solo_posts($query)
{
	if($query->is_search)
	{
		$query->set('post_type','post');
	}

	return $query;
}
add_filter('pre_get_post','buscar_solo_posts');


?>