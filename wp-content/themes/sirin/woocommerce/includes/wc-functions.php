<?php
remove_action( 'woocommerce_before_main_content', 'woocommerce_breadcrumb', 20 );
add_action( 'woocommerce_before_main_content', 'sirin_breadcrumb', 20 );

function sirin_breadcrumb() {
    woocommerce_breadcrumb([
        'wrap_before' => '<div class="container"><ul class="breadcrumbs">',
        'wrap_after'  => '</ul></div>',
        'delimiter'   => '',
        'home'        => '%icon-home%',
    ]);
}

require get_template_directory() . '/woocommerce/includes/wc-single-product.php';