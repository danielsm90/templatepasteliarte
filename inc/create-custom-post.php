<?php

add_action('init', 'post_faq', 20);

if ( !function_exists('post_faq') ) {
	function post_faq(){
		$labels = array(
			'name' => _x('Preguntas Frecuentes', 'post type general name'),
			'singular_name' => _x('Preguntas Frecuentes', 'post type singular name'),
			'add_new' => _x('Añadir Pregunta Frecuente', 'pregunta'),
			'add_new_item' => __('Añadir Pregunta Frecuente'),
			'edit_item' => __('Editar Pregunta Frecuente'),
			'new_item' => __('Nueva Pregunta Frecuente'),
			'view_item' => __('Ver Pregunta Frecuente'),
			'search_item' => __('Buscar Pregunta Frecuente'),
			'not_found' => __('No se han encontrado preguntas frecuentes'),
			'not_found_in_trash' => __('No se han encontrado preguntas frecuentes en la papelera')
		);

		$args = array(
			'labels' => $labels,
			'public' => true,
			'publicly_queryable' => true,
			'show_ui' => true,
			'query_var' => true,
			'rewrite' => true,
			'capability_type' => 'post',
			'hierarchichal' => false,
			'menu_position' => 100,
			'menu_icon' => 'dashicons-index-card',
			'supports' => array( 'title', 'editor' )
		);

		register_post_type( 'faq', $args );
	}
}

?>