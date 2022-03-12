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
 * @subpackage GOAT
 * @since GOAT
 */

get_header();
?>

<?php if(have_posts()) :?>

	<?php while (have_posts()) : the_post();?>

		<div class="card">
			<img src="<?php the_post_thumbnail_url();?>" class="card-img-top" alt="image">
			<div class="card-body">
				<?php the_title('<h2>', '</h2>'); ?>
				<small><?php the_author(); ?></small>
				<p class="text-card"><?php the_content();?></p>
				<p class="text-card"><small>Écrit le : <?php the_date();?></small></p>
			</div>
		</div>

	<?php endwhile;?>
<?php else: ?>
	<h2>Il n'y a pas de post</h2>
<?php endif;?>

<?php
get_footer();
