<?php


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
    </div>

<?php
get_footer();

