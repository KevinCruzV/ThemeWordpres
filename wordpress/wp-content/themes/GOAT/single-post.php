<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage GOAT
 * @since GOAT
 */

get_header();
?>
<div class="singlePost">
	<?php if(have_posts()):?>
		<?php while (have_posts()) : the_post();?>
            <div class="singlePostContainer">
	            <?php the_post_thumbnail( 'medium_large' ) ?>
                <div class="singlePostInfo">
					<?php the_title('<h2>', '</h2>'); ?>
                    <p> Poster par: <small><?php the_author(); ?></small></p>

                        <span><?php the_content();?></span>
                        <p class="priceNight"><?= get_post_meta(get_the_ID(),'house_price',true) ?> / nuit</p>

                   <!-- <p class="text-card"><small>Écrit le : <?php the_date();?></small></p> -->


                </div>
            </div>

		<?php endwhile;?>
	<?php else: ?>
        <h2>Il n'y a pas de post</h2>
	<?php endif;?>
</div>


<?php
get_footer();
