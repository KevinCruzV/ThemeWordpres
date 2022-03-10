<?php






function GOAT_theme_support(){
	add_theme_support( 'title-tag' );
	add_theme_support('post-thumbnails');
	add_theme_support('menus');
	register_nav_menus(
		array('primary-menu' => 'Top Menu')
	);

	register_nav_menu('footer', 'Pied de page');
}

/*
 * Bootstrap Hook to manage CSS
 */
function GOAT_theme_bootstrap(){
	wp_enqueue_script('Bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css');
}

/*
 * Style of the theme
 * The file Hooking is style.css
 */
function GOAT_theme_style(){
	wp_enqueue_style('style','style.css');
}

function GOAT_title_separator(){

	return '|';

}
function GOAT_register_style_taxonomy(){

	$labels = [
		'name' => 'Styles',
		'singular_name' => 'Style',
		'search_items' => 'Rechercher style',
		'all_items' => 'Tous les styles'

	];

	$args = [
		'labels' => $labels,
		'public' => true,
		'hierarchical' => true,
		'show_in_rest' => true,
		'show_admin_column' => true
	];

	register_taxonomy('style',['post'],$args);
}


function GOAT_register_habitation_cpt() {

	/**
	 * Post Type: Habitation.
	 */

	$labels = [
		"name"          => __('Habitation',"GOAT"),
		"singular_name" => __( "Habitation", "GOAT" ),
		"menu_name"     => __( "Les Habitations", "GOAT" ),
		"all_items"     => __( "Toutes les Habitations", "GOAT" ),
		"add_new"       => __( "Ajouter un nouveau", "GOAT" ),
		"add_new_item"  => __( "Ajouter une nouvelle habitation", "GOAT" ),
		"edit_item"     => __( "Modifier habitation", "GOAT" ),
		"new_item"      => __( "Nouvelle habitation", "GOAT" ),
		"view_item"     => __( "Voir habitation", "GOAT" ),
		"view_items"    => __( "Voir les livres", "GOAT" ),
		"search_items"  => __( "Recherche une habitation", "GOAT" ),
		"not_found"     => __( "Aucune habitation trouvé", "GOAT" ),
	];

	$args = [
		"label"                 => __( "Habitation", "GOAT" ),
		"labels"                => $labels,
		"description"           => "CPT pour des habitation",
		"public"                => true,
		"show_in_rest"          => true,
		"rest_base"             => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive"           => true,
		"delete_with_user"      => false,
		"capability_type"       => "post",
		"map_meta_cap"          => true,
		"hierarchical"          => false,
		"rewrite"               => [ "slug" => "habitation", "with_front" => true ],
		"query_var"             => true,
		"supports"              => [ "title", "custom-fields", "thumbnail", "editor", "excerpt" ],
		"show_in_graphql"       => false,
		"taxonomies"            => ["style"],
	];

	register_post_type('habitation', $args);
}


add_action( 'init', 'GOAT_register_habitation_cpt' );
add_filter('document_title_separator','GOAT_title_separator');
add_action('after_setup_theme', 'GOAT_theme_support');
add_action('wp_enqueue_scripts','GOAT_theme_bootstrap');
add_action('wp_enqueue_scripts','GOAT_theme_style');
add_action('init', 'GOAT_register_style_taxonomy');
add_action('after_switch_theme', function (){
	wp_insert_term('Maison', 'Style');
	flush_rewrite_rules();
});


