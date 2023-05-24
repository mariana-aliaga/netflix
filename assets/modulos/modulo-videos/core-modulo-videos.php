<?php  /*  videos */

function videos_register() {

    $labels = array(
        'name' => _x('videos', 'post type general name'),
        'singular_name' => _x('videos', 'post type singular name'),
        'add_new' => _x('Agregar video', 'slideshow_two item'),
        'add_new_item' => __('Agregar video'),
        'edit_item' => __('Editar video'),
        'new_item' => __('Nueva video'),
        'view_item' => __('Ver el video'),
        'search_items' => __('Buscar video'),
        'not_found' =>  __('No se encontraron'),
        'not_found_in_trash' => __('No se encontraron en la basura'),
        'parent_item_colon' => ''
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'publicly_queryable'    => true,
        'show_ui' => true,
        'query_var' => true,
        'rewrite' => true,
		'exclude_from_search'   => false,
        'capability_type' => 'post',
        'menu_icon'  => 'dashicons-format-video',
        'hierarchical' => false,
        'menu_position' => null,
        'supports'=> array( 'title','thumbnail', 'excerpt', 'editor'),
        'rewrite' => array('slug' => 'videos', 'with_front' => false)
      ); 

    register_post_type( 'videos' , $args );
}
add_action('init', 'videos_register');

/*taxonomia de tipo de videos*/
function tipo_videos() {

	register_taxonomy(
		'tipo-videos',
		'videos',
		array(
			'label' => __( 'Tipo videos' ),
			'rewrite' => array( 'slug' => 'tipo-videos' ),
			'hierarchical' => true,
			 // Allow automatic creation of taxonomy columns on associated post-types table?
			 'show_admin_column'   => true,
			 // Show in quick edit panel?
			 'show_in_quick_edit'  => true,
		)
	);
}
add_action( 'init', 'tipo_videos' );
/*taxonomia de tipo de videos*/


/*taxonomia de genero de videos*/
function genero_videos() {

    register_taxonomy(
        'genero-videos',
        'videos',
        array(
            'label' => __( 'Genero Videos' ),
            'rewrite' => array( 'slug' => 'genero-videos' ),
            'hierarchical' => true,
                // Allow automatic creation of taxonomy columns on associated post-types table?
                'show_admin_column'   => true,
                // Show in quick edit panel?
                'show_in_quick_edit'  => true,
        )
    );
}
add_action( 'init', 'genero_videos' );
/*taxonomia de genero de videos*/


/*taxonomia de capitulos*/
function capitulos() {

    register_taxonomy(
        'capitulos',
        'videos',
        array(
            'label' => __( 'Capitulos' ),
            'rewrite' => array( 'slug' => 'capitulos' ),
            'hierarchical' => true,
                // Allow automatic creation of taxonomy columns on associated post-types table?
                'show_admin_column'   => true,
                // Show in quick edit panel?
                'show_in_quick_edit'  => true,
        )
    );
}
add_action( 'init', 'capitulos' );
/*taxonomia de capitulos*/

