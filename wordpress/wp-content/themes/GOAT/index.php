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

    <?php while (have_posts()) : the_post();?>
       <div class="col">
           <div class="card">
               <img src="<?php the_post_thumbnail_url();?>" class="card-img-top">
                <div class="card-body">
                    <?php the_title('<h2>', '</h2>'); ?>
                    <small><?php the_author(); ?></small>
                    <p><?php the_excerpt();?></p>
                    <button value="Lire plus"><?php the_permalink();?></button>
                </div>
           </div>
       </div>
	<?php endwhile;?>
<?php else: ?>
        <h2>Il n'y a pas de post</h2>
<?php endif;?>

<?php
get_footer();
