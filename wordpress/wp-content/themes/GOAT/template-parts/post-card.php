<div class="col">
	<div class="card">
		<img src="<?php the_post_thumbnail_url();?>" class="card-img-top">
		<div class="card-body">
			<?php the_title('<h2>', '</h2>'); ?>
			<small><?php the_author(); ?></small>
			<p><?php the_excerpt();?></p>
			<button><a href="<?php the_permalink();?>"> Voir plus </a></button>
		</div>
	</div>
</div>