<?php
/*
* Template Name: Maison
*/
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
                        <small><?php the_author(); ?></small>
                        <p><?php the_excerpt();?></p>
                        <button><a href="<?php the_permalink();?>"> Voir plus </a></button>
                    </div>
                </div>
            </div>
        <?php endwhile;?>
    </div>
    <?= the_posts_pagination(); ?>
<?php else: ?>
	<h2>Il n'y a pas de post</h2>
<?php endif;?>

<?php
get_footer();


