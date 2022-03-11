<div class="col">
	<div class="card">
		<img src="<?php the_post_thumbnail_url();?>" class="card-img-top">
		<div class="card-body">
			<?php the_title('<h2>', '</h2>'); ?>
			<p><?php the_excerpt();?></p>
			<small><?php the_author(); ?></small>
			<button><a href="<?php the_permalink();?>"> Voir plus </a></button>
		</div>
	</div>
</div>