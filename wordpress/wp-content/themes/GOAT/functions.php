<?php

require_once 'classes/Banner.php';


function GOAT_theme_support(){

	add_theme_support( 'title-tag' );
	add_theme_support('post-thumbnails');
	add_theme_support('menus');

	register_nav_menus(
		array('header' => 'Header ')
	);

	register_nav_menu('footer', 'Footer');
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
function GOAT_theme_scripts(){
	wp_enqueue_style('StyleGoat', get_template_directory_uri()."/assets/css/main.css", array(), null );
	wp_enqueue_script( 'ScriptGoat', get_template_directory_uri(). "/js/exemple.js", array('jquery'), false );
}

function GOAT_title_separator(){

	return '|';

}

function GOAT_register_style_taxonomy(){

	$labels = [
		'name' => 'Type',
		'singular_name' => 'Type',
		'search_items' => 'Rechercher Type',
		'all_items' => 'Tous les types'

	];

	$args = [
		'labels' => $labels,
		'public' => true,
		'hierarchical' => true,
		'show_in_rest' => true,
		'show_admin_column' => true
	];

	register_taxonomy('type',['habitation'],$args);
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
		"menu_icon"             => 'dashicons-building',
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
		"taxonomies"            => ['type'],
		"capabilities"          => array(
			'edit_post'         => 'manage_habitations',
			'read_post'         => 'manage_habitations',
			'delete_post'         => 'manage_habitations'
		)
	];

	register_post_type('habitation', $args);
}


add_filter('manage_habitation_posts_columns', function ($col){
	return array(
		'cb' => $col['cb'],
		'title' => $col['title'],
		'image' => 'Image',
		'price' => 'Prix',
		'taxonomy-type' => $col['taxonomy-type'],
		'date' => $col['date']
	);


});
add_action('manage_habitation_posts_custom_columns', function ($col, $post_id) {
	if($col === 'image') {

		the_post_thumbnail('thumbnail', $post_id);

	} elseif ($col === 'price') {

		echo get_post_meta($post_id,'house_price', true);
	}

}, 10, 2);



add_action( 'init', 'GOAT_register_habitation_cpt' );
add_filter('document_title_separator','GOAT_title_separator');
add_action('after_setup_theme', 'GOAT_theme_support');
add_action('wp_enqueue_scripts','GOAT_theme_bootstrap');
add_action('wp_enqueue_scripts','GOAT_theme_scripts');
add_action('init', 'GOAT_register_style_taxonomy');

add_action('after_switch_theme', function (){
	$admin = get_role('administrator');
	$admin->add_cap('manage_habitations');
});

add_action( 'after_setup_theme', 'wpdocs_theme_setup' );
function wpdocs_theme_setup() {
	add_image_size( 'homepage-thumb', 367, 268);
}



