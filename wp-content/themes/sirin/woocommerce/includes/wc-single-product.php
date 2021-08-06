<?php

remove_action( 'woocommerce_before_single_product', 'woocommerce_output_all_notices', 10 );
add_action( 'woocommerce_before_single_product', 'sirin_product_start', 10 );

function sirin_product_start() {
    get_template_part('template-parts/page-header')
    ?>

    <section class="content-section">
        <div class="container">
            <div class="product-card">
<?php }


add_action('woocommerce_after_single_product_summary', 'sirin_product_end', 25);

function sirin_product_end() { ?>
            </div>
        </div>
    </section>
<?php }


// add_action('woocommerce_single_product_flexslider_enabled', 'sirin_flexslider_enabled', 10);
// function sirin_flexslider_enabled() {

// }


function sirin_get_gallery_image_html($attachment_id, $main_image = false ) {
    $flexslider        = (bool) apply_filters( 'woocommerce_single_product_flexslider_enabled', get_theme_support( 'wc-product-gallery-slider' ) );
    $gallery_thumbnail = wc_get_image_size( 'gallery_thumbnail' );
    $thumbnail_size    = apply_filters( 'woocommerce_gallery_thumbnail_size', array( $gallery_thumbnail['width'], $gallery_thumbnail['height'] ) );
    $image_size        = apply_filters( 'woocommerce_gallery_image_size', $flexslider || $main_image ? 'woocommerce_single' : $thumbnail_size );
    $full_size         = apply_filters( 'woocommerce_gallery_full_size', apply_filters( 'woocommerce_product_thumbnails_large_size', 'full' ) );
    $thumbnail_src     = wp_get_attachment_image_src( $attachment_id, $thumbnail_size );
    $full_src          = wp_get_attachment_image_src( $attachment_id, $full_size );
    $alt_text          = trim( wp_strip_all_tags( get_post_meta( $attachment_id, '_wp_attachment_image_alt', true ) ) );
    $image             = wp_get_attachment_image(
        $attachment_id,
        $image_size,
        false,
        apply_filters(
            'woocommerce_gallery_image_html_attachment_image_params',
            array(
                'title'                   => _wp_specialchars( get_post_field( 'post_title', $attachment_id ), ENT_QUOTES, 'UTF-8', true ),
                'data-caption'            => _wp_specialchars( get_post_field( 'post_excerpt', $attachment_id ), ENT_QUOTES, 'UTF-8', true ),
                'data-src'                => esc_url( $full_src[0] ),
                'data-large_image'        => esc_url( $full_src[0] ),
                'data-large_image_width'  => esc_attr( $full_src[1] ),
                'data-large_image_height' => esc_attr( $full_src[2] ),
                'class'                   => esc_attr( $main_image ? 'wp-post-image' : '' ),
            ),
            $attachment_id,
            $image_size,
            $main_image
        )
    );

    return $image;
}


add_filter( 'woocommerce_single_product_image_thumbnail_html', 'sirin_single_product_thumbnail', 10 );
function sirin_single_product_thumbnail($image) {
        return
        '<li class="product-card-img-overview product-card-images-item">' . $image . '</li>';
}

add_filter( 'woocommerce_before_single_product_summary', 'sirin_before_product_summary', 30 );
function sirin_before_product_summary() { ?>
    <div class="section-inner-block product-card-details">
<?php }

add_filter( 'woocommerce_after_single_product_summary', 'sirin_after_product_summary', 5 );
function sirin_after_product_summary() { ?>
    </div>
<?php }