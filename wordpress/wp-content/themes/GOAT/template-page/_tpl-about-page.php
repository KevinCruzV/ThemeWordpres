<?php 
/*
* Template Name:Template page about
*/
get_header();
?>

<?php if(have_posts()) :?>

	<div class="presentation-projet">
		<?php while (have_posts()) : the_post();?>
        <h1 class="title-page"><?php the_title();?></h1>
		<div class="presentation-projet__p"><?php the_content(); ?></div>
		<?php endwhile;?>
	</div>

	<div class="team-projet">
		<h2>L'équipe</h2>
		<div class="team-projet__container">
			<div class="team-projet__container-cart">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/img/kevinc.jpg" alt="">
				<h3><strong>Kévin Cruz</strong><br>Back-end Développeur</h3>
			</div>
			<div class="team-projet__container-cart">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/img/hugo.jpg" alt="">
				<h3><strong>Hugo Cachon</strong><br>Back-end Développeur</h3>
			</div>
			<div class="team-projet__container-cart">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/img/noham.jpg" alt="">
				<h3><strong>Noham Hirep</strong><br>Front-end Développeur</h3>
			</div>
			<div class="team-projet__container-cart">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/img/kevinl.jpg" alt="">
				<h3><strong>Kévin Lacroix</strong><br>FullStack Développeur</h3>
			</div>
		</div>
	</div>


<?php endif;?>

<?php get_footer(); ?>