<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action( 'carbon_fields_register_fields', 'crb_home_fields' );
function crb_home_fields() {
    Container::make('post_meta', 'gallery', 'Галерея')
        ->where( 'post_id', '=', get_option( 'page_on_front' ) )
        ->add_fields([
            Field::make('text', 'tab-1-title', 'Заголовок первой вкладки'),
            Field::make('text', 'tab-2-title', 'Заголовок второй вкладки'),

            Field::make('rich_text', 'tab-concept-text', 'Концепция текст'),
            Field::make('image', 'tab-concept-img', 'Концепция картинка'),
                // ->set_value_type( 'url' ),
            Field::make('textarea', 'tab-concept-extra-text', 'Концепция дополнительный текст'),

            Field::make('complex', 'creators', 'Создатели')
                ->set_layout('tabbed-horizontal')
                ->add_fields([
                    Field::make( 'text', 'name', 'Имя' ),
                    Field::make( 'image', 'img', 'Картинка' ),
                        // ->set_value_type( 'url' ),
                    Field::make( 'textarea', 'about', 'Об авторе' ),
                    Field::make( 'rich_text', 'text', 'Текст' ),
                ]),


            Field::make('text', 'activities-title', 'Деятельность заголовок'),
            Field::make('textarea', 'activities-text', 'Деятельность текст'),
            Field::make('complex', 'gallery-activities', 'Деятельность')
                ->set_layout('tabbed-vertical')
                ->add_fields([
                    Field::make( 'text', 'title', 'Заголовок' ),
                    Field::make( 'image', 'img', 'Картинка' ),
                        // ->set_value_type( 'url' ),
                    Field::make( 'textarea', 'content', 'Текст' ),
                ]),


            Field::make('text', 'blog-preview-title', 'Блог заголовок'),
            Field::make('image', 'blog-preview-img', 'Блог картинка'),
                // ->set_value_type( 'url' ),
            Field::make('textarea', 'blog-preview-text', 'Блог текст'),
            Field::make('text', 'blog-preview-btn', 'Блог кнопка'),
        ]);
}