<?php

get_header();
?>

<h1>Voir toutes les habitations</h1>

<?php if(have_posts()) :?>
	<div>

		<?php while (have_posts()) : the_post();?>
		<?php get_template_part('template-parts/post-card', 'post')?>
		<?php endwhile;?>
	</div>
	<?= paginate_links(); ?>
<?php else: ?>
	<h2>Il n'y a pas de post</h2>
<?php endif;?>

<?php
get_footer();