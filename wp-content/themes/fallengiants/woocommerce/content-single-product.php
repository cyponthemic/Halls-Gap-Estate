<?php
/**
 * The template for displaying product content in the single-product.php template
 *
 * Override this template by copying it to yourtheme/woocommerce/content-single-product.php
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     1.6.4
 */
 
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly
?>
<div class="row wc-single">
<?php
	/**
	 * woocommerce_before_single_product hook
	 *
	 * @hooked wc_print_notices - 10
	 */
	 do_action( 'woocommerce_before_single_product' );

	 if ( post_password_required() ) {
	 	echo get_the_password_form();
	 	return;
	 }
?>

<div itemscope itemtype="<?php echo woocommerce_get_product_schema(); ?>" id="product-<?php the_ID(); ?>" <?php post_class(); ?>>
<div class="row">
	<div class="small-12 medium-5 large-6 columns">
		<div class="single-product-image">
	
	<?php woocommerce_show_product_images(); ?>
	
		</div>
	</div>
	<div class="small-12 medium-7 large-6 columns">
		<div class="row single-product-content">
			<div class="small-12 columns single-product-title">
			<?php get_wine_title()?>
			</div>
			<div class="small-12 columns single-product-description">
			<?php>woocommerce_template_single_excerpt();?>
			
			</div>
			<hr>
			<?php>woocommerce_template_single_price();?>
			<div class="small-8 columns single-product-price">
			
			<?php>woocommerce_simple_add_to_cart();?>
			</div>
			<hr>
			<?php woocommerce_upsell_display();?>
			<hr>
		</div>
		
		<div class="row">
		
		</div>
	<!-- </div> -->
	</div><!-- .summary -->
	
	</div>
    </div></div>
	<?php
		/**
		 * woocommerce_after_single_product_summary hook
		 *
		 * @hooked woocommerce_output_product_data_tabs - 10
		 * @hooked woocommerce_upsell_display - 15
		 * @hooked woocommerce_output_related_products - 20
		 */
		woocommerce_output_product_data_tabs();
	?>

	<meta itemprop="url" content="<?php the_permalink(); ?>" />
</div>
</div><!-- #product-<?php the_ID(); ?> -->
<?php get_footer(); ?>

