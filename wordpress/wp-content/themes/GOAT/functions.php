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


add_filter('document_title_separator','GOAT_title_separator');
add_action('after_setup_theme', 'GOAT_theme_support');
add_action('wp_enqueue_scripts','GOAT_theme_bootstrap');
add_action('wp_enqueue_scripts','GOAT_theme_style');
add_action('init', 'GOAT_register_style_taxonomy');



