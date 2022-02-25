<?php






/*
 * Base tools of the theme
 */
add_theme_support( 'title-tag' );

function wpgoat_theme_support()
{
    add_theme_support( 'title-tag' );
    add_theme_support('title-tag');
    add_theme_support('post-thumbnnails');

    add_theme_support('menus');
}

register_nav_menus(
    array('primary-menu' => 'Top Menu')
);
function GOAT_theme_support(){
	add_theme_support( 'title-tag' );
	add_theme_support('post-thumbnails');
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

add_filter('document_title_separator','GOAT_title_separator');
add_action('after_setup_theme', 'GOAT_theme_support');
add_action('wp_enqueue_scripts','GOAT_theme_bootstrap');
add_action('wp_enqueue_scripts','GOAT_theme_style');



