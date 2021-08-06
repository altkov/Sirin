<?php
/**
 * Sirin functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Sirin
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

require_once get_template_directory() . '/vendor/autoload.php';

require get_template_directory() . '/inc/class/sirin-menu-walker.php';

require get_template_directory() . '/inc/theme-settings.php';

require get_template_directory() . '/inc/theme-options.php';

require get_template_directory() . '/inc/theme-functions.php';

require get_template_directory() . '/inc/widgets.php';

require get_template_directory() . '/inc/helpers.php';

require get_template_directory() . '/inc/enqueue-scripts.php';

if ( class_exists( 'WooCommerce' ) ) {
    require_once get_template_directory() . '/inc/woocommerce.php';
    require get_template_directory() . '/woocommerce/includes/wc-functions.php';
    require get_template_directory() . '/woocommerce/includes/wc-functions-remove.php';
}