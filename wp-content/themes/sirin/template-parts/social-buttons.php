<ul class="social-list">

    <?php
    $socialButtons = carbon_get_theme_option('social-buttons');
    foreach ($socialButtons as $button) { ?>

        <li class="social-item"><a href="<?php echo $button['link'] ?>>"><span class="icon <?php echo $button['class'] ?>"></span></a></li>

    <?php } ?>

</ul>