    </div>
    <footer class="footer">
        <div class="container">
            <nav class="footer-nav">
                <?php
                wp_nav_menu([
                    'theme_location'        => 'footer-menu',
                    'walker'                => new SirinMenuWalker(),
                    'first_lvl_class'       => 'col-lg-3 col-md-6 footer-menu',
                    'first_lvl_link_before' => '<div class="footer-menu-header">',
                    'first_lvl_link_after'  => '</div>',
                    'container'             => false,
                    'menu_class'            => 'row',
                ]);
                ?>
            </nav>

            <div class="footer-bottom">
                <div class="footer-bottom-left">
                    <p class="copyright">
                        <?php echo carbon_get_theme_option('footer-copyright'); ?>
                    </p>
                </div>
                <div class="footer-bottom-center">
                    <?php get_template_part('template-parts/social-buttons'); ?>
                </div>
                <div class="footer-bottom-right">
                    <div class="footer-privacy">
                        <?php
                        $privacyPolitics = carbon_get_theme_option('privacy-politics')[0]['id'];
                        ?>
                        <a href="<?php the_permalink($privacyPolitics); ?>">
                            <?php echo get_the_title($privacyPolitics); ?>
                        </a>
                    </div>
                </div>
            </div>
            
        </div>
    </footer>

</div>
<?php wp_footer(); ?>

</body>
</html>