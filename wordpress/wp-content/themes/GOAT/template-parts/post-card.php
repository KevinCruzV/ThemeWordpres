<div class="card-container">
	<div class="card-container__inner">
		<div class="card-container__inner-img">
			<img src="<?php the_post_thumbnail_url();?>">
		</div>
		<div class="card-container__inner-txt">
			<div class="card-container__inner-txt__container">
				<?php the_title('<h2>', '</h2>'); ?>
				<div class="card-container__inner-txt__container__author">
					<?php the_author(); ?>
				</div>
			</div>
			<div class="card-container__inner-txt__excerpt"><?php the_excerpt();?></div>
			<a class="card-container__inner-txt__btn" href="<?php the_permalink();?>"> Voir les disponibilités</a>
		</div>
	</div>
</div>