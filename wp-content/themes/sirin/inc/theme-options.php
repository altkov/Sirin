<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;

require get_template_directory() . '/inc/custom-fields/nav-menu.php';

require get_template_directory() . '/inc/custom-fields/home.php';

add_action( 'after_setup_theme', 'crb_load' );
function crb_load() {
    \Carbon_Fields\Carbon_Fields::boot();
}

add_action( 'carbon_fields_register_fields', 'crb_attach_theme_options' );
function crb_attach_theme_options() {

    $global = [
        Field::make('image', 'logo', 'Логотип')
            ->set_value_type( 'url' ),

        Field::make('image', 'logo-mobile', 'Логотип на мобильных')
            ->set_value_type( 'url' ),

        Field::make('complex', 'social-buttons', 'Кнопки соцсетей')
            ->add_fields([
                Field::make('text', 'link', 'Ссылка'),
                Field::make('text', 'class', 'Класс для иконки')
                    ->set_help_text('CSS-класс, определяющий иконку')
            ])
            ->set_layout('tabbed-horizontal'),

        Field::make('text', 'tel', 'Телефон'),
        Field::make('text', 'whatsapp', 'Whatsapp'),
        Field::make('text', 'telegram', 'Телеграм'),

    ];

    $header = [

    ];

    $footer = [
        Field::make('text', 'footer-copyright', 'Копирайт'),
        Field::make('association', 'privacy-politics', 'Страница политики конфиденциальности')
            ->set_types( array(
                array(
                    'type'      => 'post',
                    'post_type' => 'any'
                )
            ) )
            ->set_max( 1 )
    ];

    Container::make( 'theme_options', 'theme_options', __( 'Theme Options' ) )

        ->add_tab('Глобальные', $global)

        ->add_tab('Шапка', $header)

        ->add_tab('Подвал', $footer)

    ;




}