<?php 
/*
* Template Name:Template page about
*/
get_header();
?>

<?php if(have_posts()) :?>
	<div>
		<?php while (have_posts()) : the_post();?>
        <h1 class="title-page"><?php the_title();?></h1>
		<?php endwhile;?>
	</div>
<?php endif;?>

<?php get_footer(); ?>