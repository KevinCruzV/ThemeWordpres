<?php
get_header();

$term_slugs = [];
$terms = get_the_terms(get_the_ID(),'type');
foreach ($terms as $term)
{
	$term_slugs[] = $term->name;
}


$house_args = array(
	'post_type' => 'habitation',
	'post__not_in' => [get_the_ID()],
    'post_per_page' => 3,
	'orderby' => 'rand',

	'meta_query' => array(
		array(
			'key' => 'house_price',
			'value' => get_post_meta(get_the_ID(),'house_price',true),
		),

	),
    'tax_query' => array(
	    array(
		    'taxonomy' => 'type',
            'field' => 'slug',
            'terms' => $term_slugs
	    ),

    )
);
$house = new WP_Query ( $house_args );


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
						<a href="<?php the_permalink();?>"> Acheter : <?= get_post_meta(get_the_ID(),'house_price',true);?>€</a>
					</div>
				</div>
			</div>

            <?php if($house->have_posts()) :?>
                <h3>Vous aimerez aussi</h3>
                <div>
                    <?php while ($house->have_posts()) : $house->the_post();
                        get_template_part('template-parts/post-card', 'habitation');
                    endwhile; ?>
                </div>
            <?php endif; ?>
            <?php wp_reset_postdata(); ?>
		<?php endwhile;?>
	</div>

<?php else: ?>
	<h2>Il n'y a pas de post</h2>
<?php endif;?>

<?php
get_footer();
