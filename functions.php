<?php

require_once('walker_menu.php');
require_once('inc/create-custom-post.php');
require_once('inc/options-template.php');
require_once('inc/custom-metaboxes.php');


$cupcakes = [];
$slugs = array(
	'conocenos',
	'manizales-cakes',
	'manizales-cupcakes',
	'resto-del-pais'
);

// Registrar Menu y Widgets
	register_nav_menus (array(
		'menu_superior' => 'Menu superior'
	));

	register_sidebar(array(
		'name' => 'Cita con el artista',
		'id' => 'cita-artista',
		'before_widget' => '<div class="wg_header">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>'
	));

// Incluir css y js
	add_action( 'wp_enqueue_scripts', 'insertar_js' );
	add_action( 'wp_print_styles', 'insertar_css' );

	if(!function_exists('insertar_css')){
		function insertar_css(){
			wp_enqueue_style( 'fontawesome-css-pasteliarte', get_bloginfo('template_url') . '/css/all.css', false, false, 'screen' );
			wp_enqueue_style( 'bootstrap-css-pasteliarte', get_bloginfo('template_url') . '/css/bootstrap.min.css', false, false, 'screen' );
			wp_enqueue_style( 'styles-cita', get_bloginfo('template_url') . '/css/estiloCita.css', array( 'bootstrap-css-pasteliarte' ), false, 'screen' );
			wp_enqueue_style( 'styles-exp', get_bloginfo('template_url') . '/css/estilosXpressarte.css', array( 'bootstrap-css-pasteliarte' ), false, 'screen' );
			wp_enqueue_style( 'styles-expCup', get_bloginfo('template_url') . '/css/estilosXpressarteCupcake.css', array( 'styles-exp' ), false, 'screen' );

			wp_enqueue_style( 'styles-expCake', get_bloginfo('template_url') . '/css/estilosXpressarteCake.css', array( 'styles-exp' ), false, 'screen' );
			wp_enqueue_style( 'styles-expPayU', get_bloginfo('template_url') . '/css/jquery-ui.css', array( 'styles-exp' ), false, 'screen' );
			wp_enqueue_style( 'styles', get_bloginfo('stylesheet_url'), array( 'styles-expCake' ), false, 'screen' );
		}
	}

	if(!function_exists('insertar_js')){
		function insertar_js() {
			wp_enqueue_script( 'jquery-pasteliarte', get_bloginfo('template_url') . '/js/jquery.min.js', false, false, true );
			wp_enqueue_script( 'popper-pasteliarte', get_bloginfo('template_url') . '/js/popper.js', array( 'jquery-pasteliarte' ), false, true );
			wp_enqueue_script( 'bootstrap-js-pasteliarte', get_bloginfo('template_url') . '/js/bootstrap.min.js', array( 'popper-pasteliarte' ), false, true );
			wp_enqueue_script( 'scrollorama-pasteliarte', get_bloginfo('template_url') . '/js/jquery.scrollorama.js', array( 'jquery-pasteliarte' ), false, true );
			wp_enqueue_script( 'scrollflow-pasteliarte', get_bloginfo('template_url') . '/js/eskju.jquery.scrollflow.min.js', array( 'jquery-pasteliarte' ), false, true );
			wp_enqueue_script( 'parallax-pasteliarte', get_bloginfo('template_url') . '/js/parallax.js', array( 'jquery-pasteliarte' ), false, true );

			wp_enqueue_script( 'xCake-pasteliarte', get_bloginfo('template_url') . '/js/xpressarteCake.js', array( 'jquery-pasteliarte' ), false, true );
			wp_enqueue_script( 'xCup-pasteliarte', get_bloginfo('template_url') . '/js/xpressarteCupcake.js', array( 'jquery-pasteliarte' ), false, true );
			wp_enqueue_script( 'xCup-pago', get_bloginfo('template_url') . '/js/md5.js', array( 'jquery-pasteliarte' ), false, true );
			wp_enqueue_script( 'xCup-payU', get_bloginfo('template_url') . '/js/jquery-ui.min.js', array( 'jquery-pasteliarte' ), false, true );
		}
	}

?>