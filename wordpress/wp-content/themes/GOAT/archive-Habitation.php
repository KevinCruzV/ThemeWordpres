<?php

get_header();
?>

<?php if(have_posts()) :?>
	<h1 class="title-page-habitations">Les locations disponibles</h1>
	<div class="habitations-all">

		<?php while (have_posts()) : the_post();?>
		<?php get_template_part('template-parts/post-card', 'post')?>
		<?php endwhile;?>
	</div>
	<div class="pagination-habitations">
		<?= paginate_links(); ?>
	</div>
<?php else: ?>
	<h2>Il n'y a pas de post</h2>
<?php endif;?>

<?php
get_footer();