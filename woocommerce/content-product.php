<?php
/**
 * The template for displaying product content within loops
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.4.0
 */

defined( 'ABSPATH' ) || exit;

global $product;

// Ensure visibility.
if ( empty( $product ) || ! $product->is_visible() ) {
	return;
}
?>
<li class="product_each d-flex flex-column">
	<?php
	/**
	 * Hook: woocommerce_before_shop_loop_item.
	 *
	 * @hooked woocommerce_template_loop_product_link_open - 10
	 */
	// do_action( 'woocommerce_before_shop_loop_item' );
	?>

	<a href="<?php echo get_permalink( $loop->post->ID ) ?>" class="link-each-product" title="<?php echo esc_attr($loop->post->post_title ? $loop->post->post_title : $loop->post->ID); ?>">
    	<?php
    		woocommerce_show_product_sale_flash( $post, $product );
      		if (has_post_thumbnail( $loop->post->ID )):
      			echo '<div class="thumbnail-each-product" style="background-image: url('.get_the_post_thumbnail_url($loop->post->ID, 'shop_catalog').');">';
      			// do_action( 'woocommerce_after_shop_loop_item' );
      			echo '</div>';
      			// echo get_the_post_thumbnail($loop->post->ID, 'shop_catalog');
      		else:
      			echo '<div class="thumbnail-each-product" style="background-image: url('.woocommerce_placeholder_img_src().');" alt="Placeholder" width="300px" height="300px" >';
      			// do_action( 'woocommerce_after_shop_loop_item' );
      			echo '</div>';
      			// echo '<img src="'.woocommerce_placeholder_img_src().'" alt="Placeholder" width="300px" height="300px" />';
      		endif;
      		// do_action( 'woocommerce_before_shop_loop_item_title' );

      		// the_title( '<h3>', '</h3>' );
      		do_action( 'woocommerce_shop_loop_item_title' );

        	// echo '<span class="price">'. $product->get_price_html() .'</span>';
        	do_action( 'woocommerce_after_shop_loop_item_title' );
      	?>
    </a>
    <?php

	/**
	 * Hook: woocommerce_before_shop_loop_item_title.
	 *
	 * @hooked woocommerce_show_product_loop_sale_flash - 10
	 * @hooked woocommerce_template_loop_product_thumbnail - 10
	 */
	// do_action( 'woocommerce_before_shop_loop_item_title' );

	/**
	 * Hook: woocommerce_shop_loop_item_title.
	 *
	 * @hooked woocommerce_template_loop_product_title - 10
	 */
	// do_action( 'woocommerce_shop_loop_item_title' );

	/**
	 * Hook: woocommerce_after_shop_loop_item_title.
	 *
	 * @hooked woocommerce_template_loop_rating - 5
	 * @hooked woocommerce_template_loop_price - 10
	 */
	// do_action( 'woocommerce_after_shop_loop_item_title' );

	/**
	 * Hook: woocommerce_after_shop_loop_item.
	 *
	 * @hooked woocommerce_template_loop_product_link_close - 5
	 * @hooked woocommerce_template_loop_add_to_cart - 10
	 */
	do_action( 'woocommerce_after_shop_loop_item' );
	?>
</li>
