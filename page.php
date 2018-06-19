<?php get_header('xpressarte'); ?>

<?php

global $post;
$post_slug=$post->post_name;

if(have_posts()){
	get_template_part( 'content/'.$post_slug );
}

?>

<?php get_footer('xpressarte'); ?>