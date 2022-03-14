<?php
/**
* Template Name: PostForm
*/

get_header();



$types = get_terms([
	'taxonomy'      =>  'type',
	'hide_empty'    => false
]);
?>

<div class="content">

	<form action="<?= admin_url('admin-post.php'); ?>" method="post" >

		<label for="habitation_thumbnail">Image du bien</label>
		<input type="file" name="habitation_thumbnail" id="habitation_thumbnail">

		<label for="habitation_title">Titre du bien</label>
		<input type="text" name="habitation_title" id="habitation_title">

		<label for="habitation_description">Description du bien</label>
		<input type="text" name="habitation_description" id="habitation_description">

		<label for="habitation_price">Prix du bien</label>
		<input type="text" name="habitation_price" id="habitation_price">€ </br>

        <input type="hidden" name="action" value="francishuster">
		<?php wp_nonce_field('GOAT_habitation_post', 'GOAT_habitation_nonce')?>

		<label for="habitation_type">Type de bien</label>
		<select name="habitation_type" id="habitation_type">
			<?php foreach ($types as $type) :?>
				<option value="<?= $type->term_id; ?>"> <?= $type->name; ?></option>
			<?php endforeach; ?>
		</select>

<!--		<input type="hidden" name="action" value="GOAT_habitation_post">-->
<!--		--><?php //wp_nonce_field('GOAT_habitation_post', 'GOAT_habitation_nonce')?>

		<button type="submit">Envoyer</button>

	</form>


</div>

<?php
get_footer();
?>