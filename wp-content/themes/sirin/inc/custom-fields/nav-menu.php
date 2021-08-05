<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action( 'carbon_fields_register_fields', 'crb_nav_menu_fields' );
function crb_nav_menu_fields() {
    Container::make('nav_menu_item', 'menu_item', 'Меню')
        ->add_fields([
            Field::make('checkbox', 'menu-item-mobile-extract-column', 'Извлечь столбец на мобильных')
                ->set_help_text('
                    Специальная настройка для меню из футера. Извлекает дочерние элементы этого столбца на мобильных в общее меню.
                    <br>На остальные меню не имеет никакого действия.
                    <br>На дочерние элементы не имеет эффекта.
               ')
        ]);
}