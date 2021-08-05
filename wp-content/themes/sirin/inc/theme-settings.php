<?php

if ( ! function_exists( 'sirin_setup' ) ) :
    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * Note that this function is hooked into the after_setup_theme hook, which
     * runs before the init hook. The init hook is too late for some features, such
     * as indicating support for post thumbnails.
     */
    function sirin_setup() {

        /*
         * Let WordPress manage the document title.
         * By adding theme support, we declare that this theme does not use a
         * hard-coded <title> tag in the document head, and expect WordPress to
         * provide it for us.
         */
        add_theme_support( 'title-tag' );

        /*
         * Enable support for Post Thumbnails on posts and pages.
         *
         * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
         */
        add_theme_support( 'post-thumbnails' );

        /*
         * Switch default core markup for search form, comment form, and comments
         * to output valid HTML5.
         */
        add_theme_support(
            'html5',
            array(
                'search-form',
//                'comment-form',
//                'comment-list',
                'gallery',
                'caption',
                'style',
                'script',
            )
        );


        // Add theme support for selective refresh for widgets.
        add_theme_support( 'customize-selective-refresh-widgets' );

        register_nav_menus([
            'top-menu'       => 'Основное меню в шапке',
            'header-top'     => 'Верхнее меню в шапке',
            'footer-menu'    => 'Меню в подвале',
        ]);
    }
endif;
add_action( 'after_setup_theme', 'sirin_setup' );

function sirin_content_width() {
    $GLOBALS['content_width'] = apply_filters( 'sirin_content_width', 1920 );
}
add_action( 'after_setup_theme', 'sirin_content_width', 0 );