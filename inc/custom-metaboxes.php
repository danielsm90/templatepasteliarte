<?php

$post_id = $_GET['post'] ? $_GET['post'] : $_POST['post_ID'];

$slug = basename( get_permalink( $post_id ) );

switch ( $slug ) {
	case 'conocenos':
		add_action('add_meta_boxes', 'text_know_metabox');
		add_action('save_post', 'text_know_save_post_data');
		break;
	
	default:
		break;
}


if ( !function_exists('text_know_metabox') ) {
	function text_know_metabox(){
		add_meta_box('metabox_know', 'Texto Conocenos', 'know_metabox_cb', 'page', 'normal', 'high');
	}
}

if ( !function_exists('know_metabox_cb') ) {
	function know_metabox_cb(){
		global $post;

		$txt_know = get_post_meta($post->ID, 'txt_know', true);

		wp_nonce_field( 'conocenos_'.$post->ID, 'conocenos_noncename' );
		$settings = array( 'textarea_name' => 'txt_know', 'textarea_rows' => '5', 'media_buttons' => false );
		wp_editor( $txt_know, 'txt_know', $settings );
	}
}

if ( !function_exists('text_know_save_post_data') ) {
	function text_know_save_post_data( $post_id ){
		if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE )
			return;

		$txt_know = $_POST['txt_know'];

		update_post_meta( $post_id, 'txt_know', $txt_know );
	}
}

?>