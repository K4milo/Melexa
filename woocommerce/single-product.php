<?php
/**
 * The Template for displaying all single products
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see 	    https://docs.woocommerce.com/document/template-structure/
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

get_header( 'shop' ); ?>

<section class="page-dos postcursos productosW" style="
    background-image: url();
    background-size: cover;
    min-height: 500px;
">
<!-- marcas e internas muy internas de categorias -->
	<section id="part1" style="

    margin-bottom: 0px!important;

     background-image: url(<?php echo get_post_meta(2973, 'wpcf-categorias-marcas', true); ?>)!important;

">
	<div class="text-part1">
	<h3><?php  echo get_the_title(); ?></h3>
	</div>
	<div class="divicionb"></div>
	</section>
	<section id="part2">
		<!-- mid content -->
		<div class="mid-content clearfix">
	<div class="content-area">
		<main id="main" class="site-main" role="main">

				<?php
		/**
		 * woocommerce_before_main_content hook.
		 *
		 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
		 * @hooked woocommerce_breadcrumb - 20
		 */
		do_action( 'woocommerce_before_main_content' );



	?>

			<div class="col-100">

<div class="col-4">
	<div class="images">
		<?php
			if ( has_post_thumbnail() ) {
				$attachment_count = count( $product->get_gallery_attachment_ids() );
				$gallery          = $attachment_count > 0 ? '[product-gallery]' : '';
				$props            = wc_get_product_attachment_props( get_post_thumbnail_id(), $post );
				$image            = get_the_post_thumbnail( $post->ID, apply_filters( 'single_product_large_thumbnail_size', 'shop_single' ), array(
					'title'	 => $props['title'],
					'alt'    => $props['alt'],
				) );
				echo apply_filters(
					'woocommerce_single_product_image_html',
					sprintf(
						'<a href="%s" itemprop="image" class="woocommerce-main-image zoom" title="%s" data-rel="prettyPhoto%s">%s</a>',
						esc_url( $props['url'] ),
						esc_attr( $props['caption'] ),
						$gallery,
						$image
					),
					$post->ID
				);
			} else {
				echo apply_filters( 'woocommerce_single_product_image_html', sprintf( '<img src="%s" alt="%s" />', wc_placeholder_img_src(), __( 'Placeholder', 'woocommerce' ) ), $post->ID );
			}

			do_action( 'woocommerce_product_thumbnails' );
		?>
	</div>
</div>

<div class="col-8">

	<div class="producto-single" itemprop="description">
		<?php echo the_content();?>
	</div>

	<div class="product_meta">

		<?php do_action( 'woocommerce_product_meta_start' ); ?>

		<?php if ( wc_product_sku_enabled() && ( $product->get_sku() || $product->is_type( 'variable' ) ) ) : ?>

			<span class="sku_wrapper"><?php _e( 'SKU:', 'woocommerce' ); ?> <span class="sku" itemprop="sku"><?php echo ( $sku = $product->get_sku() ) ? $sku : __( 'N/A', 'woocommerce' ); ?></span></span>

		<?php endif; ?>

		<?php echo $product->get_categories( ', ', '<span class="posted_in">' . _n( 'Category:', 'Categories:', $cat_count, 'woocommerce' ) . ' ', '</span>' ); ?>

		<?php do_action( 'woocommerce_product_meta_end' ); ?>

	</div>
	
</div>
	<?php
		/**
		 * woocommerce_after_main_content hook.
		 *
		 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
		 */
		do_action( 'woocommerce_after_main_content' );
	?>

	<?php
		/**
		 * woocommerce_sidebar hook.
		 *
		 * @hooked woocommerce_get_sidebar - 10
		 */
		do_action( 'woocommerce_sidebar' );
	?>

		</div>	

		
	
		</main><!-- #main -->
	</div><!-- #primary -->
	</div>
	<!-- mid content -->
	</section>
</section>

	

<?php get_footer( 'shop' ); ?>
