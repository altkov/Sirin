<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action( 'after_setup_theme', 'crb_load' );
function crb_load() {
    \Carbon_Fields\Carbon_Fields::boot();
}


add_action( 'carbon_fields_register_fields', 'crb_attach_theme_options' );
function crb_attach_theme_options() {
//    Container::make( 'theme_options', __( 'Theme Options' ) )
//        ->add_tab('Глобальные', [
//            Field::make('image', 'logo', 'Логотип')
//                ->set_value_type( 'url' ),
//            Field::make('image', 'logo-mobile', 'Логотип на мобильных')
//                ->set_value_type( 'url' ),
//        ])
//        ->add_tab('Шапка', [
//
//        ])
//        ->add_tab('Подвал', [
//            Field::make('text', 'footer-copyright', 'Копирайт'),
//        ])

        Container::make('theme_options', __('Theme Options'))
        ;
}