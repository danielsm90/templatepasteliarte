<!DOCTYPE html>
<html>
<head>
	<title><?php echo get_bloginfo('title'); ?></title>
	<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<?php wp_head(); ?>
</head>
<body>
	<header id="menuPrincipal">
		
		<nav class="navbar navbar-expand-lg navbar-light">
			<a class="navbar-brand" href="#">
				<img  class="logo" src="<?php echo get_template_directory_uri(); ?>/img/Pasteliarte/logo.png" />
			</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNav">
				<?php wp_nav_menu( 
					array(
						'theme_location' => 'menu_superior',
						'container' => '',
						'container_class' => '',
						'container_id' => '',
						'menu_class' => 'navbar-nav',
						'menu_id' => 'menu_superior',
						'add' => array(
							'item_class' => 'nav-item',
							'link_class' => 'nav-item nav-link'
						),
						'walker' => new walker_menu() )
					); 
				?>
				 <div class="navbar-text">
			      	<ul class="navbar-nav">
			      		<li><a href="https://www.youtube.com"><img src="<?php echo get_template_directory_uri(); ?>/img/Pasteliarte/youtube.png" /></a></li>
			      		<li><a href="https://www.facebook.com"><img src="<?php echo get_template_directory_uri(); ?>/img/Pasteliarte/facebook.png" /></a></li>
			      		<li><a href="https://twitter.com"><img src="<?php echo get_template_directory_uri(); ?>/img/Pasteliarte/twitter.png" /></a></li>
			      		<li><a href="https://co.pinterest.com"><img src="<?php echo get_template_directory_uri(); ?>/img/Pasteliarte/pinterest.png" /></a></li>
			      	</ul>
			    </div>
			    <div class="navbar-carrito">
			    	<ul class="navbar-nav">
			    		<li id="carrito"><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/Pasteliarte/carrito.png" /></a></li>
			    	</ul>
			    </div>
			</div>
		</nav>
	</header>