<?php

/*
 * WordPress manage the document title.
 * By adding theme support, we declare that this theme does not use a
 * hard-coded <title> tag in the document head, and expect WordPress to
 * provide it for us.
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