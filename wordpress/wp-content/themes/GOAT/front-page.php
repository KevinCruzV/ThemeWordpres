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
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

get_header();
?>
    <div class="homePage">
        <section class="ideaSection">
            <div class="ideaText">
                <h1>Des idées pour votre prochain voyage !</h1>
                <a href="#">Voir toutes les destinations</a>
            </div>
			<?php if ( have_posts() ) : ?>
                <div class="ideaContainer">
					<?php while ( have_posts() ) : the_post(); ?>
                        <div class="idea">
							<?php the_post_thumbnail( 'homepage-thumb' ) ?>
							<?php the_title( '<h2>', '</h2>' ); ?>
                            <button><a href="<?= get_post_type_archive_link( 'post' ); ?>"> Voir les biens en
                                    location </a></button>
                        </div>
					<?php endwhile; ?>
                </div>
			<?php else: ?>
                <h2>Il n'y a pas de post</h2>
			<?php endif; ?>
        </section>
        <section class="bestSection">
            <div class="bestText">
                <h1>Les mieux notées !</h1>
                <a href="#">Voir tous les biens</a>
            </div>
		    <?php if ( have_posts() ) : ?>
                <div class="bestContainer">
				    <?php while ( have_posts() ) : the_post(); ?>
                        <div class="best">
	                        <?php get_template_part('template-parts/post-card', 'post')?>
                           
                        </div>
				    <?php endwhile; ?>
                </div>
		    <?php else: ?>
                <h2>Il n'y a pas de post</h2>
		    <?php endif; ?>
        </section>
    </div>


<?php
get_footer();