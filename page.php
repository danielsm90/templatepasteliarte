<?php get_header('xpressarte'); ?>

<?php

if(have_posts()){
	get_template_part( 'content/manizales-cupcakes' );
}

?>

<?php get_footer('xpressarte'); ?>