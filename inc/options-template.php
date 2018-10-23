<?php

// OPCIONES

	function theme_settings_page(){
		?>
		<div class="wrap">
			<h1>Opciones</h1>
			<form method="post" action="options.php">
				<?php
				settings_fields("section");
				do_settings_sections("opciones");
				submit_button();
				?>
			</form>
		</div>
		<?php
	}

	function add_theme_menu_item(){
		add_menu_page("Opciones", "Opciones", "manage_options", "opciones", "theme_settings_page", "dashicons-admin-generic", 54);
	}

	add_action("admin_menu", "add_theme_menu_item");

	function display_theme_panel_fields(){
		add_settings_section("section", null, null, "opciones");

		add_settings_field("data_somos", "Mensaje Somos", "display_data_somos", "opciones", "section");
		add_settings_field("data_conocenos", "Mensaje Conocenos", "display_data_conocenos", "opciones", "section");
		add_settings_field("data_xpressarte", "Mensaje Xpressarte", "display_data_xpressarte", "opciones", "section");
		add_settings_field("data_tienda", "Mensaje Tienda", "display_data_tienda", "opciones", "section");
		add_settings_field("data_cita", "Mensaje Cita", "display_data_cita", "opciones", "section");

		register_setting("section", "data_somos");
		register_setting("section", "data_conocenos");
		register_setting("section", "data_xpressarte");
		register_setting("section", "data_tienda");
		register_setting("section", "data_cita");
	}

	add_action("admin_init", "display_theme_panel_fields");

	function display_data_somos(){
		$data_somos = get_option('data_somos');
		wp_nonce_field( 'my_post_type'.$post->ID, 'my_meta_noncename' );
		$settings = array( 'textarea_name' => 'data_somos', 'textarea_rows' => '5', 'media_buttons' => false );
		wp_editor( $data_somos, 'data_somos', $settings );
	}

	function display_data_conocenos(){
		$data_conocenos = get_option('data_conocenos');
		wp_nonce_field( 'my_post_type'.$post->ID, 'my_meta_noncename' );
		$settings = array( 'textarea_name' => 'data_conocenos', 'textarea_rows' => '5', 'media_buttons' => false );
		wp_editor( $data_conocenos, 'data_conocenos', $settings );
	}

	function display_data_xpressarte(){
		$data_xpressarte = get_option('data_xpressarte');
		wp_nonce_field( 'my_post_type'.$post->ID, 'my_meta_noncename' );
		$settings = array( 'textarea_name' => 'data_xpressarte', 'textarea_rows' => '5', 'media_buttons' => false );
		wp_editor( $data_xpressarte, 'data_xpressarte', $settings );
	}

	function display_data_tienda(){
		$data_tienda = get_option('data_tienda');
		wp_nonce_field( 'my_post_type'.$post->ID, 'my_meta_noncename' );
		$settings = array( 'textarea_name' => 'data_tienda', 'textarea_rows' => '5', 'media_buttons' => false );
		wp_editor( $data_tienda, 'data_tienda', $settings );
	}

	function display_data_cita(){
		$data_cita = get_option('data_cita');
		wp_nonce_field( 'my_post_type'.$post->ID, 'my_meta_noncename' );
		$settings = array( 'textarea_name' => 'data_cita', 'textarea_rows' => '5', 'media_buttons' => false );
		wp_editor( $data_cita, 'data_cita', $settings );
	}

	// Mostrar en Frontend los options -> Opciones

	function show_data_opciones($txtOption){
		$showData = get_option($txtOption);
		echo nl2br($showData);
	}

// FIN OPCIONES

// REDES SOCIALES

	function theme_settings_page_social(){
		?>
		<div class="wrap">
			<h1>Opciones</h1>
			<form method="post" action="options.php">
				<?php
				settings_fields("section_social");
				do_settings_sections("opciones_social");
				submit_button();
				?>
			</form>
		</div>
		<?php
	}

	function add_theme_menu_item_social(){
		add_menu_page("Redes Sociales", "Redes Sociales", "manage_options", "opciones_social", "theme_settings_page_social", "dashicons-share", 54);
	}

	add_action("admin_menu", "add_theme_menu_item_social");

	function display_theme_panel_fields_social(){
		add_settings_section("section_social", null, null, "opciones_social");

		add_settings_field("data_somos", "Redes Sociales", "display_social", "opciones_social", "section_social");

		register_setting("section_social", "social_facebook");
		register_setting("section_social", "social_instagram");
		register_setting("section_social", "social_youtube");
		register_setting("section_social", "social_twitter");
	}

	add_action("admin_init", "display_theme_panel_fields_social");

	function display_social(){
		$social_facebook = get_option('social_facebook');
		$social_instagram = get_option('social_instagram');
		$social_youtube = get_option('social_youtube');
		$social_twitter = get_option('social_twitter');
		?>
		<div>
			<input type="url" placeholder="https://facebook.com" name="social_facebook" id="social_facebook" value="<?php echo $social_facebook; ?>">
			<small>Facebook</small>
		</div>
		<div>
			<input type="url" placeholder="https://instagram.com" name="social_instagram" id="social_instagram" value="<?php echo $social_instagram; ?>">
			<small>Instagram</small>
		</div>
		<div>
			<input type="url" placeholder="https://youtube.com" name="social_youtube" id="social_youtube" value="<?php echo $social_youtube; ?>">
			<small>Youtube</small>
		</div>
		<div>
			<input type="phone" placeholder="3133456678" name="social_twitter" id="social_twitter" value="<?php echo $social_twitter; ?>">
			<small>Whatsapp</small>
		</div>
		<?php
	}

	function show_whatsapp_header($txtSocial, $icon){
		$linkSocial = get_option($txtSocial);
		if ( trim( $linkSocial ) ) {
			?>
			<li>
				<a target="_blank" href="https://api.whatsapp.com/send?phone=57<?php echo $linkSocial; ?>"><i class="fab fa-<?php echo $icon; ?>"></i></a>
			</li>
			<?php
		}
	}

	function show_social_header($txtSocial, $icon){
		$linkSocial = get_option($txtSocial);
		if ( trim( $linkSocial ) ) {
			?>
			<li>
				<a target="_blank" href="<?php echo $linkSocial; ?>"><i class="fab fa-<?php echo $icon; ?>"></i></a>
			</li>
			<?php
		}
	}

	function show_whatsapp_footer($txtSocial, $icon){
		$linkSocial = get_option($txtSocial);
		if ( trim( $linkSocial ) ) {
			?>
			<li>
				<a target="_blank" href="https://api.whatsapp.com/send?phone=57<?php echo $linkSocial; ?>"><i class="fab fa-<?php echo $icon; ?>"></i></a>
			</li>
			<?php
		}
	}

	function show_social_footer($txtSocial, $icon){
		$linkSocial = get_option($txtSocial);
		if ( trim( $linkSocial ) ) {
			?>
			<li>
				<a target="_blank" href="<?php echo $linkSocial; ?>"><i class="fab fa-<?php echo $icon; ?>"></i></a>
			</li>
			<?php
		}
	}

// FIN REDES SOCIALES

?>