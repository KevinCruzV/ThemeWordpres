<?php

class Banner {

	public function __construct()
	{
		add_action('admin_menu', [$this, 'addMenu']);
	}

	public function addMenu()
	{
		add_menu_page(
			'Ajouter une bannière dans le header',
			'Bannière',
			'manage_option',
			'GOAT_header_banner', [$this, 'GOAT_render_header_banner'],
			'dashicons-info',
			80

		);
	}

	public function GOAT_render_header_banner()
	{
		echo 'Hello Word !';
	}

}