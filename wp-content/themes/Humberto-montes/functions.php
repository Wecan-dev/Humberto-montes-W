<?php 
the_post_thumbnail();
the_post_thumbnail('thumbnail');       // Thumbnail (por defecto 150px x 150px max)
the_post_thumbnail('medium');          // Media resolución (por defecto 300px x 300px max)
the_post_thumbnail('large');           // Alta resolución (por defecto 640px x 640px max)
the_post_thumbnail('full');            // Resolución original de la imagen (sin modificar)

add_theme_support( 'post-thumbnails' );
the_post_thumbnail( array(100,100) ); 


// remove_filter( 'the_content', 'wpautop' );
// remove_filter( 'the_excerpt', 'wpautop' );


/*******truncar cantidad de palabras******/
function excerpt($limit) {
	$excerpt = explode(' ', get_the_excerpt(), $limit);
	if (count($excerpt)>=$limit) {
		array_pop($excerpt);
		$excerpt = implode(" ",$excerpt).'...';
	} else {
		$excerpt = implode(" ",$excerpt);
	}
	$excerpt = preg_replace('`[[^]]*]`','',$excerpt);
	return $excerpt;
}
/*******truncar cantidad de palabras******/



function my_theme_setup() {
	add_theme_support( 'woocommerce' );
}
add_action( 'after_setup_theme', 'my_theme_setup' );


// Register Custom Banner Home
function Banner() {

	$labels = array(
		'name'                  => _x( 'Banner ', 'Post Type General Name', 'nivel' ),
		'singular_name'         => _x( 'Banner', 'Post Type Singular Name', 'nivel' ),
		'menu_name'             => __( 'Banners', 'nivel' ),
		'name_admin_bar'        => __( 'Banners', 'nivel' ),
		'archives'              => __( 'Archivo', 'nivel' ),
		'attributes'            => __( 'Atributos', 'nivel' ),
		'parent_item_colon'     => __( 'Artículo principal', 'nivel' ),
		'all_items'             => __( 'Todos los artículos', 'nivel' ),
		'add_new_item'          => __( 'Agregar ítem nuevo', 'nivel' ),
		'add_new'               => __( 'Añadir nuevo', 'nivel' ),
		'new_item'              => __( 'Nuevo artículo', 'nivel' ),
		'edit_item'             => __( 'Editar elemento', 'nivel' ),
		'update_item'           => __( 'Actualizar artículo', 'nivel' ),
		'view_item'             => __( 'Ver ítem', 'nivel' ),
		'view_items'            => __( 'Ver artículos', 'nivel' ),
		'search_items'          => __( 'Buscar artículo', 'nivel' ),
		'not_found'             => __( 'Extraviado', 'nivel' ),
		'not_found_in_trash'    => __( 'No se encuentra en la basura', 'nivel' ),
		'featured_image'        => __( 'Foto principal', 'nivel' ),
		'set_featured_image'    => __( 'Establecer imagen destacada', 'nivel' ),
		'remove_featured_image' => __( 'Remove featured image', 'nivel' ),
		'use_featured_image'    => __( 'Usar como imagen destacada', 'nivel' ),
		'insert_into_item'      => __( 'Insertar en el elemento', 'nivel' ),
		'uploaded_to_this_item' => __( 'Subido a este artículo', 'nivel' ),
		'items_list'            => __( 'Lista de artículos', 'nivel' ),
		'items_list_navigation' => __( 'Lista de elementos de navegación', 'nivel' ),
		'filter_items_list'     => __( 'Lista de elementos de filtro', 'nivel' ),
	);
	$args = array(
		'label'                 => __( 'Banner Home', 'nivel' ),
		'description'           => __( 'Post Type Description', 'nivel' ),
		'labels'                => $labels,
		'supports'              => array( 'title','editor', 'thumbnail' ),
		'taxonomies'            => array(  ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-images-alt2',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'Banner', $args );

}
add_action( 'init', 'Banner', 0 );


function Peregrinaje()
{

	$labels = array(
		'name'                  => _x('Peregrinaje', 'Post Type General Name', 'apk'),
		'singular_name'         => _x('Peregrinaje', 'Post Type Singular Name', 'apk'),
		'menu_name'             => __('Peregrinaje', 'apk'),
		'name_admin_bar'        => __('Peregrinaje', 'apk'),
		'archives'              => __('Item Archives', 'apk'),
		'attributes'            => __('Item Attributes', 'apk'),
		'parent_item_colon'     => __('Parent Item:', 'apk'),
		'all_items'             => __('All Items', 'apk'),
		'add_new_item'          => __('Add New Item', 'apk'),
		'add_new'               => __('Add New', 'apk'),
		'new_item'              => __('New Item', 'apk'),
		'edit_item'             => __('Edit Item', 'apk'),
		'update_item'           => __('Update Item', 'apk'),
		'view_item'             => __('View Item', 'apk'),
		'view_items'            => __('View Items', 'apk'),
		'search_items'          => __('Search Item', 'apk'),
		'not_found'             => __('Not found', 'apk'),
		'not_found_in_trash'    => __('Not found in Trash', 'apk'),
		'featured_image'        => __('Featured Image', 'apk'),
		'set_featured_image'    => __('Set featured image', 'apk'),
		'remove_featured_image' => __('Remove featured image', 'apk'),
		'use_featured_image'    => __('Use as featured image', 'apk'),
		'insert_into_item'      => __('Insert into item', 'apk'),
		'uploaded_to_this_item' => __('Uploaded to this item', 'apk'),
		'items_list'            => __('Items list', 'apk'),
		'items_list_navigation' => __('Items list navigation', 'apk'),
		'filter_items_list'     => __('Filter items list', 'apk'),
	);
	$args = array(
		'label'                 => __('Peregrinaje', 'apk'),
		'description'           => __('Peregrinaje', 'apk'),
		'labels'                => $labels,
		'supports'              => array('title', 'editor'),
		'taxonomies'            => array(),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-admin-users',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type('Peregrinaje', $args);
}
add_action('init', 'Peregrinaje', 0);




// Register Custom Banner Home
function LoQueTenemos() {

	$labels = array(
		'name'                  => _x( 'Lo Que Tenemos ', 'Post Type General Name', 'nivel' ),
		'singular_name'         => _x( 'Lo Que Tenemos', 'Post Type Singular Name', 'nivel' ),
		'menu_name'             => __( 'Lo Que Tenemos', 'nivel' ),
		'name_admin_bar'        => __( 'Lo Que Tenemos', 'nivel' ),
		'archives'              => __( 'Archivo', 'nivel' ),
		'attributes'            => __( 'Atributos', 'nivel' ),
		'parent_item_colon'     => __( 'Artículo principal', 'nivel' ),
		'all_items'             => __( 'Todos los artículos', 'nivel' ),
		'add_new_item'          => __( 'Agregar ítem nuevo', 'nivel' ),
		'add_new'               => __( 'Añadir nuevo', 'nivel' ),
		'new_item'              => __( 'Nuevo artículo', 'nivel' ),
		'edit_item'             => __( 'Editar elemento', 'nivel' ),
		'update_item'           => __( 'Actualizar artículo', 'nivel' ),
		'view_item'             => __( 'Ver ítem', 'nivel' ),
		'view_items'            => __( 'Ver artículos', 'nivel' ),
		'search_items'          => __( 'Buscar artículo', 'nivel' ),
		'not_found'             => __( 'Extraviado', 'nivel' ),
		'not_found_in_trash'    => __( 'No se encuentra en la basura', 'nivel' ),
		'featured_image'        => __( 'Foto principal', 'nivel' ),
		'set_featured_image'    => __( 'Establecer imagen destacada', 'nivel' ),
		'remove_featured_image' => __( 'Remove featured image', 'nivel' ),
		'use_featured_image'    => __( 'Usar como imagen destacada', 'nivel' ),
		'insert_into_item'      => __( 'Insertar en el elemento', 'nivel' ),
		'uploaded_to_this_item' => __( 'Subido a este artículo', 'nivel' ),
		'items_list'            => __( 'Lista de artículos', 'nivel' ),
		'items_list_navigation' => __( 'Lista de elementos de navegación', 'nivel' ),
		'filter_items_list'     => __( 'Lista de elementos de filtro', 'nivel' ),
	);
	$args = array(
		'label'                 => __( 'Banner Home', 'nivel' ),
		'description'           => __( 'Post Type Description', 'nivel' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'thumbnail' ),
		'taxonomies'            => array(  ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-images-alt2',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'LoQueTenemos', $args );

}
add_action( 'init', 'LoQueTenemos', 0 );


// Register Custom Aliados
function Aliados() {

	$labels = array(
		'name'                  => _x( 'Aliados', 'Post Type General Name', 'Shipal' ),
		'singular_name'         => _x( 'Aliados', 'Post Type Singular Name', 'Shipal' ),
		'menu_name'             => __( 'Aliados', 'Shipal' ),
		'name_admin_bar'        => __( 'Aliados', 'Shipal' ),
		'archives'              => __( 'Archivo', 'Shipal' ),
		'attributes'            => __( 'Atributos', 'Shipal' ),
		'parent_item_colon'     => __( 'Artículo principal', 'Shipal' ),
		'all_items'             => __( 'Todos los Aliados', 'Shipal' ),
		'add_new_item'          => __( 'Agregar nuevo Aliados', 'Shipal' ),
		'add_new'               => __( 'Añadir nuevo', 'Shipal' ),
		'new_item'              => __( 'Nuevo Aliados', 'Shipal' ),
		'edit_item'             => __( 'Editar Aliados', 'Shipal' ),
		'update_item'           => __( 'Actualizar artículo', 'Shipal' ),
		'view_item'             => __( 'Ver ítem', 'Shipal' ),
		'view_items'            => __( 'Ver artículos', 'Shipal' ),
		'search_items'          => __( 'Buscar artículo', 'Shipal' ),
		'not_found'             => __( 'Extraviado', 'Shipal' ),
		'not_found_in_trash'    => __( 'No se encuentra en la basura', 'Shipal' ),
		'featured_image'        => __( 'Foto principal', 'Shipal' ),
		'set_featured_image'    => __( 'Establecer imagen destacada', 'Shipal' ),
		'remove_featured_image' => __( 'Remove featured image', 'Shipal' ),
		'use_featured_image'    => __( 'Usar como imagen destacada', 'Shipal' ),
		'insert_into_item'      => __( 'Insertar en el elemento', 'Shipal' ),
		'uploaded_to_this_item' => __( 'Subido a este artículo', 'Shipal' ),
		'items_list'            => __( 'Lista de artículos', 'Shipal' ),
		'items_list_navigation' => __( 'Lista de elementos de navegación', 'Shipal' ),
		'filter_items_list'     => __( 'Lista de elementos de filtro', 'Shipal' ),
	);
	$args = array(
		'label'                 => __( 'Aliados', 'Shipal' ),
		'description'           => __( 'Post Type Description', 'Shipal' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'thumbnail' ),
		'taxonomies'            => array(  ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-buddicons-buddypress-logo',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'Aliados', $args );

}
add_action( 'init', 'Aliados', 0 );





// Register Custom Testimonios
function Testimonios() {

	$labels = array(
		'name'                  => _x( 'Testimonios', 'Post Type General Name', 'Shipal' ),
		'singular_name'         => _x( 'Testimonios', 'Post Type Singular Name', 'Shipal' ),
		'menu_name'             => __( 'Testimonios', 'Shipal' ),
		'name_admin_bar'        => __( 'Testimonios', 'Shipal' ),
		'archives'              => __( 'Archivo', 'Shipal' ),
		'attributes'            => __( 'Atributos', 'Shipal' ),
		'parent_item_colon'     => __( 'Artículo principal', 'Shipal' ),
		'all_items'             => __( 'Todos los Testimonios', 'Shipal' ),
		'add_new_item'          => __( 'Agregar nuevo testimonio', 'Shipal' ),
		'add_new'               => __( 'Añadir nuevo', 'Shipal' ),
		'new_item'              => __( 'Nuevo testimonio', 'Shipal' ),
		'edit_item'             => __( 'Editar testimonio', 'Shipal' ),
		'update_item'           => __( 'Actualizar artículo', 'Shipal' ),
		'view_item'             => __( 'Ver ítem', 'Shipal' ),
		'view_items'            => __( 'Ver artículos', 'Shipal' ),
		'search_items'          => __( 'Buscar artículo', 'Shipal' ),
		'not_found'             => __( 'Extraviado', 'Shipal' ),
		'not_found_in_trash'    => __( 'No se encuentra en la basura', 'Shipal' ),
		'featured_image'        => __( 'Foto principal', 'Shipal' ),
		'set_featured_image'    => __( 'Establecer imagen destacada', 'Shipal' ),
		'remove_featured_image' => __( 'Remove featured image', 'Shipal' ),
		'use_featured_image'    => __( 'Usar como imagen destacada', 'Shipal' ),
		'insert_into_item'      => __( 'Insertar en el elemento', 'Shipal' ),
		'uploaded_to_this_item' => __( 'Subido a este artículo', 'Shipal' ),
		'items_list'            => __( 'Lista de artículos', 'Shipal' ),
		'items_list_navigation' => __( 'Lista de elementos de navegación', 'Shipal' ),
		'filter_items_list'     => __( 'Lista de elementos de filtro', 'Shipal' ),
	);
	$args = array(
		'label'                 => __( 'Testimonios', 'Shipal' ),
		'description'           => __( 'Post Type Description', 'Shipal' ),
		'labels'                => $labels,
		'supports'              => array( 'title' ),
		'taxonomies'            => array(  ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-format-quote',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'Testimonios', $args );

}
add_action( 'init', 'Testimonios', 0 );



// Register Custom Testimonios
function QuienesSomos() {

	$labels = array(
		'name'                  => _x( 'Quienes Somos', 'Post Type General Name', 'Shipal' ),
		'singular_name'         => _x( 'Quienes Somos', 'Post Type Singular Name', 'Shipal' ),
		'menu_name'             => __( 'Quienes Somos', 'Shipal' ),
		'name_admin_bar'        => __( 'Quienes Somos', 'Shipal' ),
		'archives'              => __( 'Archivo', 'Shipal' ),
		'attributes'            => __( 'Atributos', 'Shipal' ),
		'parent_item_colon'     => __( 'Artículo principal', 'Shipal' ),
		'all_items'             => __( 'Todos los QuienesSomos', 'Shipal' ),
		'add_new_item'          => __( 'Agregar nuevo', 'Shipal' ),
		'add_new'               => __( 'Añadir nuevo', 'Shipal' ),
		'new_item'              => __( 'Nuevo', 'Shipal' ),
		'edit_item'             => __( 'Editar', 'Shipal' ),
		'update_item'           => __( 'Actualizar artículo', 'Shipal' ),
		'view_item'             => __( 'Ver ítem', 'Shipal' ),
		'view_items'            => __( 'Ver artículos', 'Shipal' ),
		'search_items'          => __( 'Buscar artículo', 'Shipal' ),
		'not_found'             => __( 'Extraviado', 'Shipal' ),
		'not_found_in_trash'    => __( 'No se encuentra en la basura', 'Shipal' ),
		'featured_image'        => __( 'Foto principal', 'Shipal' ),
		'set_featured_image'    => __( 'Establecer imagen destacada', 'Shipal' ),
		'remove_featured_image' => __( 'Remove featured image', 'Shipal' ),
		'use_featured_image'    => __( 'Usar como imagen destacada', 'Shipal' ),
		'insert_into_item'      => __( 'Insertar en el elemento', 'Shipal' ),
		'uploaded_to_this_item' => __( 'Subido a este artículo', 'Shipal' ),
		'items_list'            => __( 'Lista de artículos', 'Shipal' ),
		'items_list_navigation' => __( 'Lista de elementos de navegación', 'Shipal' ),
		'filter_items_list'     => __( 'Lista de elementos de filtro', 'Shipal' ),
	);
	$args = array(
		'label'                 => __( 'Quienes Somos', 'Shipal' ),
		'description'           => __( 'Post Type Description', 'Shipal' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor' ),
		'taxonomies'            => array(  ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-format-quote',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'QuienesSomos', $args );

}
add_action( 'init', 'QuienesSomos', 0 );




// Register Custom Testimonios
function Contacto() {

	$labels = array(
		'name'                  => _x( 'Contacto', 'Post Type General Name', 'Shipal' ),
		'singular_name'         => _x( 'Contacto', 'Post Type Singular Name', 'Shipal' ),
		'menu_name'             => __( 'Contacto', 'Shipal' ),
		'name_admin_bar'        => __( 'Contacto', 'Shipal' ),
		'archives'              => __( 'Archivo', 'Shipal' ),
		'attributes'            => __( 'Atributos', 'Shipal' ),
		'parent_item_colon'     => __( 'Artículo principal', 'Shipal' ),
		'all_items'             => __( 'Todos los Contacto', 'Shipal' ),
		'add_new_item'          => __( 'Agregar nuevo', 'Shipal' ),
		'add_new'               => __( 'Añadir nuevo', 'Shipal' ),
		'new_item'              => __( 'Nuevo', 'Shipal' ),
		'edit_item'             => __( 'Editar', 'Shipal' ),
		'update_item'           => __( 'Actualizar artículo', 'Shipal' ),
		'view_item'             => __( 'Ver ítem', 'Shipal' ),
		'view_items'            => __( 'Ver artículos', 'Shipal' ),
		'search_items'          => __( 'Buscar artículo', 'Shipal' ),
		'not_found'             => __( 'Extraviado', 'Shipal' ),
		'not_found_in_trash'    => __( 'No se encuentra en la basura', 'Shipal' ),
		'featured_image'        => __( 'Foto principal', 'Shipal' ),
		'set_featured_image'    => __( 'Establecer imagen destacada', 'Shipal' ),
		'remove_featured_image' => __( 'Remove featured image', 'Shipal' ),
		'use_featured_image'    => __( 'Usar como imagen destacada', 'Shipal' ),
		'insert_into_item'      => __( 'Insertar en el elemento', 'Shipal' ),
		'uploaded_to_this_item' => __( 'Subido a este artículo', 'Shipal' ),
		'items_list'            => __( 'Lista de artículos', 'Shipal' ),
		'items_list_navigation' => __( 'Lista de elementos de navegación', 'Shipal' ),
		'filter_items_list'     => __( 'Lista de elementos de filtro', 'Shipal' ),
	);
	$args = array(
		'label'                 => __( 'Contacto', 'Shipal' ),
		'description'           => __( 'Post Type Description', 'Shipal' ),
		'labels'                => $labels,
		'supports'              => array( 'title' ),
		'taxonomies'            => array(  ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-format-quote',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'Contacto', $args );

}
add_action( 'init', 'Contacto', 0 );


// colocar en el title el nombre de la page 
function wpdocs_filter_wp_title( $title, $sep ) {
	global $paged, $page;

	if ( is_feed() )
		return $title;

    // Add the site name.
	$title .= get_bloginfo( 'name' );

    // Add the site description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		$title = "$title $sep $site_description";

    // Add a page number if necessary.
	if ( $paged >= 2 || $page >= 2 )
		$title = "$title $sep " . sprintf( __( 'Page %s', 'twentytwelve' ), max( $paged, $page ) );

	return $title;
}
add_filter( 'wp_title', 'wpdocs_filter_wp_title', 10, 2 );