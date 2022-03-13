<?php
/**
* Template Name: Ville
* Template Post Type: page, post
* Description:
*/

get_header();
?>


<?php if(have_posts()) :?>

	<?php while (have_posts()) : the_post();?>
		<?= get_template_part('template-parts/post-card');?>
	<?php endwhile;?>
	<?php the_posts_pagination(); ?>
<?php else: ?>
	<h2>Il n'y a pas de post</h2>
<?php endif;?>

<?php
get_footer();

