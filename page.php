<?php 
global $post;
$post_slug=$post->post_name;

if( in_array($post_slug, $slugs) ):
?>
	<?php

	get_header('xpressarte');

	if(have_posts()){
		get_template_part( 'content/'.$post_slug );
	}

	?>

	<?php get_footer('xpressarte'); ?>
<?php else: ?>
	<?php
	get_header();
	if ( have_posts() ):?>
		<div id="fondoTienda">
			<div id="txt_tienda">
				<img src="<?php echo get_template_directory_uri(); ?>/img/Pasteliarte/tienda.png" />
			</div>
		</div>
		<?php
		the_post();
		the_content();
		?>
	<?php endif;
	get_footer();?>
<?php endif; ?>