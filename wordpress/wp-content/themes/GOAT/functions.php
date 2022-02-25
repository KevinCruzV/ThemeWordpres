<?php






/*
 * WordPress manage the document title.
 * By adding theme support, we declare that this theme does not use a
 * hard-coded <title> tag in the document head, and expect WordPress to
 * provide it for us.
 */
function GOAT_theme_support(){
	add_theme_support( 'title-tag' );
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



