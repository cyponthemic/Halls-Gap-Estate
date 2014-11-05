<?php
/**
 * The template for displaying product content within loops.
 *
 * Override this template by copying it to yourtheme/woocommerce/content-product.php
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

global $product, $woocommerce_loop;

/*
// Store loop count we're currently on
if ( empty( $woocommerce_loop['loop'] ) )
	$woocommerce_loop['loop'] = 0;

// Store column count for displaying the grid
if ( empty( $woocommerce_loop['columns'] ) )
	$woocommerce_loop['columns'] = apply_filters( 'loop_shop_columns', 3 );
*/

// Ensure visibility
if ( ! $product || ! $product->is_visible() )
	return;

?>
<div style="text-align:center;" class="small-3 small-offset-1 left columns" data-equalizer-watch>
<a style="text-align:center; width:100%;" href="<?php the_permalink(); ?>">
<?php 
the_post_thumbnail('thumbnail',array( 'class' => 'upsell_thumb' )) ?>

<span style="width:100%;text-align:center; display:block;text-transform:uppercase;font-size:12px; letter-spacing:2px;padding-top:5px;"><?php get_variety();?></span>
</a>
</div>