<?php
/**
 * Single Product Image
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/product-image.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.5.1
 */

defined( 'ABSPATH' ) || exit;

global $product;

$columns           = apply_filters( 'woocommerce_product_thumbnails_columns', 4 );
$post_thumbnail_id = $product->get_image_id();
$wrapper_classes   = apply_filters(
	'woocommerce_single_product_image_gallery_classes',
	array(
		'woocommerce-product-gallery',
		'woocommerce-product-gallery--' . ( $post_thumbnail_id ? 'with-images' : 'without-images' ),
		'woocommerce-product-gallery--columns-' . absint( $columns ),
		'images',
	)
);
?>
<div class="product-card-hero">
    <div class="product-card-images <?php echo esc_attr( implode( ' ', array_map( 'sanitize_html_class', $wrapper_classes ) ) ); ?>" data-columns="<?php echo esc_attr( $columns ); ?>">
		<ul class="product-card-images-list">
			<?php echo apply_filters( 'woocommerce_single_product_image_thumbnail_html', sirin_get_gallery_image_html( $post_thumbnail_id ), $post_thumbnail_id );

			do_action( 'woocommerce_product_thumbnails' );
			?>
		</ul>
	</div>
    <div class="product-card-main-images">
		<?php

		$fullImages = [];
		$fullImages[] = $post_thumbnail_id;
		$fullImages = array_merge($fullImages, $product->get_gallery_image_ids());

		foreach ($fullImages as $imageID) {
			if ( $imageID ) {
				$html = sirin_get_gallery_image_html( $imageID, true );
			} else {
				$html .= sprintf( '<img src="%s" alt="%s" class="wp-post-image" />', esc_url( wc_placeholder_img_src( 'woocommerce_single' ) ), esc_html__( 'Awaiting product image', 'woocommerce' ) );
			}

			echo apply_filters( 'sirin_get_gallery_image_html', $html, $imageID ); // phpcs:disable WordPress.XSS.EscapeOutput.OutputNotEscaped

		}

		?>
    </div>
    <div class="sidebox-wrap product-card-intro-wrap">
        <div class="sidebox-ornament"></div>
        <div class="sidebox product-card-intro">
            <div class="product-card-variants">
                <div class="product-card-intro-header large-text">Варианты</div>
                <ul class="product-card-variant-list">
					<?php echo apply_filters( 'woocommerce_single_product_image_thumbnail_html', sirin_get_gallery_image_html( $post_thumbnail_id ), $post_thumbnail_id );

					do_action( 'woocommerce_product_thumbnails' );
					?>
                </ul>
            </div>
            <div class="product-card-intro-descr">
                <div class="product-card-intro-header large-text">Описание</div>
                <p><?php the_excerpt(); ?></p>
                <a href="#" class="product-card-full-description">Смотреть полное описание</a>
            </div>
        </div>
    </div>
</div>