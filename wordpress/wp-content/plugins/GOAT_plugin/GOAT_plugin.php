<?php
/**
 * Plugin Name: Goat Plugin
 * Description: Un plugin pour qui génère un formulaire d'habitation
 * Author: Kevin CRUZ
 * Version: 1
 */

//if(defined('ABSPATH')){
//	wp_die('acces interdit');
//}

register_activation_hook(__FILE__, function (){
	$admin = get_role('administrator');
	$admin->add_cap('manage_habitation');

	add_role('habitation_manager', 'Habitation Manager', [
		'read' => true,
		'manage_habitation' => true
	]);
});

require_once ('ThemeWordpres/wordpress/wp-content/themes/GOAT/classes/AddHabitation.php');





function init_plug() {
	add_shortcode( 'add_habitation', function () {
		$manager = new AddHabitation();

		return $manager->generateForm();
	} );

	add_action('admin_post_GOAT_habitation_post', function (){
		AddHabitation::handleForm();
	});
}



add_action('init','init_plug');

