<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

get_header();
?>

<h1> Yo </h1>

<?php if(have_posts()) :?>

    <?php while (have_posts()) : the_post();
      get_template_part('template-parts/post-card');
	endwhile;
	 the_posts_pagination();
    else: ?>
        <h2>Il n'y a pas de post</h2>
<?php endif;?>

<?php
get_footer();
