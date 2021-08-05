<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
    <div class="page-container">

        <!-- HEADER -->
        <header class="header">
            <div class="header-desktop">
                <div class="header-top">
                    <div class="container">
                        <div class="header-top-left">
                            <nav class="top-menu">
                                <?php wp_nav_menu( array(
                                    'theme_location'  => 'header-top',
                                    'container'       => false,
                                    'menu_class'      => 'top-menu-list',
                                    'echo'            => true,
                                ) ); ?>
                            </nav>
                        </div>
                        <div class="header-top-center">
                            <div class="header-contact">
                                <?php $tel = carbon_get_theme_option('tel'); ?>
                                <a href="tel:+<?php echo preg_replace('/[^\d]/', '', $tel); ?>" class="header-contact-phone header-icon">
                                    <span class="icon icon-phone"></span>
                                    <span>
                                        <?php echo $tel; ?>
                                    </span>
                                </a>
                                <a href="<?php echo carbon_get_theme_option('whatsapp'); ?>" class="header-contact-whatsapp header-icon">
                                    <span class="icon icon-whatsapp"></span>
                                </a>
                                <a href="<?php echo carbon_get_theme_option('telegram'); ?>" class="header-contact-telegram header-icon">
                                    <span class="icon icon-telegram"></span>
                                </a>
                            </div>
                        </div>
                        <div class="header-top-right">
                            <a href="#" class="header-search header-icon"><span class="icon icon-search"></span></a>
                            <ul class="header-lang">
                                <li>Ru</li>
                                <li>En</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="header-main">
                    <div class="container">
                        <a href="/" class="header-logo"><img src="<?php echo carbon_get_theme_option('logo'); ?>" alt="Логотип Сиринъ"></a>
                        <nav class="main-menu">
                            <?php wp_nav_menu( array(
                                'theme_location'  => 'top-menu',
                                'container'       => false,
                                'menu_class'      => 'main-menu-list',
                                'echo'            => true,
                                'walker'          => new SirinMenuWalker(),
                            ) ); ?>
                        </nav>
                        <?php get_template_part('template-parts/social-buttons'); ?>
                    </div>
                </div>
            </div>
            <div class="header-mobile">
                <div class="header-fixed">
                    <div class="header-mobile-left">
                        <div class="header-mobile-logo">
                            <a href="/"><img src="<?php echo carbon_get_theme_option('logo-mobile'); ?>" alt="Логотип Сиринъ"></a>
                        </div>
                    </div>
                    <div class="header-mobile-center menu-opened">
                        <ul class="header-lang">
                            <li>Ru</li>
                            <li>En</li>
                        </ul>
                    </div>
                    <div class="header-mobile-right">
                        <div class="menu-closed">
                            <a href="#" class="header-search header-icon"><span class="icon icon-search"></span></a>
                            <button class="menu-open"><span class="icon icon-menu"></span></button>
                        </div>
                        <div class="menu-opened">
                            <button class="menu-close"><span class="icon icon-close-menu"></span></button>
                        </div>
                    </div>
                </div>
                <div class="mobile-menu">
                    <div class="mobile-menu-top">
                        <div class="header-contact">
                            <a href="tel:+79685184433" class="header-contact-phone header-icon">
                                <span class="icon icon-phone"></span>
                                <span>
                                    +7 968 518-44-33
                                </span>
                            </a>
                            <a href="#" class="header-contact-whatsapp header-icon">
                                <span class="icon icon-whatsapp"></span>
                            </a>
                            <a href="#" class="header-contact-telegram header-icon">
                                <span class="icon icon-telegram"></span>
                            </a>
                        </div>
                    </div>
                    <nav class="main-mobile-menu">
                        <?php wp_nav_menu( array(
                            'theme_location'  => 'top-menu',
                            'container'       => false,
                            'menu_class'      => 'main-mobile-menu-list',
                            'echo'            => true,
                        ) ); ?>
                        <?php wp_nav_menu( array(
                            'theme_location'  => 'header-top',
                            'container'       => false,
                            'menu_class'      => 'main-mobile-menu-list',
                            'echo'            => true,
                        ) ); ?>
                    </nav>
                    <div class="mobile-menu-bottom">
                        <?php get_template_part('template-parts/social-buttons'); ?>
                    </div>
                </div>
            </div>
        </header>
        <!-- /HEADER -->