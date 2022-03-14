<?php

namespace classes;
use function admin_url;
use function current_user_can;
use function get_current_user_id;
use function get_terms;
use function media_handle_upload;
use function set_post_thumbnail;
use function wp_insert_post;
use function wp_nonce_field;
use function wp_redirect;
use function wp_verify_nonce;

class AddHabitation {
	private $types;

	public function __construct() {
		$this->types = get_terms( [
			'taxonomy'   => 'modele',
			'hide_empty' => false
		] );
	}

	public static function handleForm() {
		if ( current_user_can( 'manage_habitations' ) && wp_verify_nonce( $_POST['GOAT_habitation_nonce'], 'GOAT_habitation_post' ) ) {

			$post_args = array(
				'post_title'   => $_POST['habitation_title'],
				'post_content' => $_POST['habitation_description'],
				'post_type'    => 'Habitation',
				'post_status'  => 'publish',
				'post_author'  => get_current_user_id(),
				'tax_input'    => [
					'Type' => [ $_POST['habitation_type'] ]
				],

				'meta_input' => [
					'habitation_prix' => $_POST['habitation_price']
				],
			);


			$post_Id        = wp_insert_post( $post_args );
			$attachement_id = media_handle_upload( 'habitation_thumbnail', $post_Id );
			set_post_thumbnail( $post_Id, $attachement_id );
			wp_redirect( home_url( '?p=' . $post_Id ) );
		}
	}

	public function generateForm() {
		ob_start();
		?>

        <form action="<?= admin_url( 'admin-post.php' ); ?>" method="post" enctype="multipart/form-data">

            <label for="habitation_thumbnail">Image du bien</label>
            <input type="file" name="habitation_thumbnail" id="habitation_thumbnail">

            <label for="habitation_title">Titre du bien</label>
            <input type="text" name="habitation_title" id="habitation_title">

            <label for="habitation_description">Description du bien</label>
            <input type="text" name="habitation_description" id="habitation_description">

            <label for="habitation_price">Prix du bien</label>
            <input type="text" name="habitation_price" id="habitation_price">€ </br>

            <label for="habitation_type">Type de bien</label>
            <select name="habitation_type" id="habitation_type">
				<?php foreach ( $this->types as $type ) : ?>
                    <option value="<?= $type->term_id; ?>"> <?= $type->name; ?></option>
				<?php endforeach; ?>
            </select>

            <input type="hidden" name="action" value="GOAT_habitation_post">
			<?php wp_nonce_field( 'GOAT_habitation_post', 'GOAT_habitation_nonce' ) ?>

            <button type="submit">Envoyer</button>

        </form>

		<?php
		return ob_get_clean();
	}

}