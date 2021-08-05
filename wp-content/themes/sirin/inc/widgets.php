<?php

function sirin_widgets_init() {
    register_sidebar(
        array(
            'name'          => esc_html__( 'Sidebar', 'sirin' ),
            'id'            => 'sidebar-1',
            'description'   => esc_html__( 'Add widgets here.', 'sirin' ),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget'  => '</section>',
            'before_title'  => '<h2 class="widget-title">',
            'after_title'   => '</h2>',
        )
    );
}
add_action( 'widgets_init', 'sirin_widgets_init' );