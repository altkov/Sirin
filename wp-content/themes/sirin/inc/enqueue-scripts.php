<?php



add_action( 'wp_enqueue_scripts', 'sirin_styles' );
function sirin_styles() {
	wp_enqueue_style( 'bootstrap-css', get_template_directory_uri() . '/assets/css/bootstrap.min.css');
	wp_enqueue_style( 'nice-select-css', get_template_directory_uri() . '/assets/css/nice-select.updated.css');
	wp_enqueue_style( 'overlay-scrollbars', get_template_directory_uri() . '/assets/css/overlayScrollbars.min.css');
	wp_enqueue_style( 'slick-css', get_template_directory_uri() . '/assets/css/slick.css');
	wp_enqueue_style( 'font-css', get_template_directory_uri() . '/assets/css/font.css');
	wp_enqueue_style( 'style-css', get_template_directory_uri() . '/assets/css/style.css');
}

add_action( 'wp_enqueue_scripts', 'sirin_scripts' );
function sirin_scripts() {
	wp_deregister_script('jquery');
	wp_enqueue_script('jquery', get_template_directory_uri() . '/assets/js/jquery-3.6.0.min.js', [], '3.6.0', true);
	wp_enqueue_script('nice-select-js', get_template_directory_uri() . '/assets/js/jquery.nice-select.updated.min.js', ['jquery'], _S_VERSION, true);
	wp_enqueue_script('overlay-scrollbars-js', get_template_directory_uri() . '/assets/js/jquery.overlayScrollbars.min.js', ['jquery'], _S_VERSION, true);
	wp_enqueue_script('slick-js', get_template_directory_uri() . '/assets/js/slick.min.js', ['jquery'], _S_VERSION, true);
	wp_enqueue_script('class-slider-js', get_template_directory_uri() . '/assets/js/class.slider.js', ['jquery', 'slick-js'], _S_VERSION, true);
	wp_enqueue_script('main-js', get_template_directory_uri() . '/assets/js/main.js', ['jquery'], _S_VERSION, true);
}