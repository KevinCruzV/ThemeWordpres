<?php
get_header();
?>

<?php if(have_posts()) :?>
	<div>

		<?php while (have_posts()) : the_post();?>
			<div class="col">
				<div class="card">
					<img src="<?php the_post_thumbnail_url();?>" class="card-img-top">
					<div class="card-body">
						<?php the_title('<h2>', '</h2>'); ?>
						<p><?php the_content(); ?></p>
						<a href="<?php the_permalink();?>"> Acheter : <?= get_post_meta(get_the_ID(),'house_price',true) ?> </a>
					</div>
				</div>
			</div>
		<?php endwhile;?>
	</div>

<?php else: ?>
	<h2>Il n'y a pas de post</h2>
<?php endif;?>

<?php
get_footer();
