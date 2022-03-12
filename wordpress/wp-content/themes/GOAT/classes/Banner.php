<?php

class Banner {


	const OPTION_GROUP = 'GOAT_group';
	const SETTING_SECTION = 'GOAT_section';

    public function __construct()
    {
	    add_action('admin_menu', [$this, 'addMenu']);
    }

	public static function init()
	{
		add_action('admin_menu', [self::class, 'addMenu']);
		add_action('admin_init', [self::class, 'registerSetting']);

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

	public static function registerSetting()
	{
		register_setting(
			self::OPTION_GROUP,
			self::BANNER_MESSAGE,
			'custom_header_banner',
			['default' => 'Rien ici']
		);

		add_settings_section(
			self::SETTING_SECTION,
			'Paramètres',
			function(){
				echo 'Modifiez la banniere d\'information dans le header';
			},
			self::MENU_PAGE_NAME
		);

		add_settings_field(
			'GOAT_banner_message',
			'Message de la banniere',
			function(){
				?>
				<textarea name="<?= self::BANNER_MESSAGE;?>"><?=get_option(self::BANNER_MESSAGE)?></textarea>
				<?php
			},
			self::MENU_PAGE_NAME,
			self::SETTING_SECTION
		);
	}





	public static function GOAT_render_header_banner()
	{
		?>
		<div>
			<h1><?= get_admin_page_title();?></h1>
			<form>
				<?php settings_fields(self::OPTION_GROUP);?>
				<?php do_settings_fields(self::MENU_PAGE_NAME);?>
				<?php submit_button();?>
			</form>
		</div>
		<?php
	}

}