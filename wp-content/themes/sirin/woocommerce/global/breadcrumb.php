<?php

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

array_pop($breadcrumb);
if ( ! empty( $breadcrumb ) ) {

    echo $wrap_before;

    foreach ( $breadcrumb as $key => $crumb ) {

        echo $before;

        $crumb[0] = putIcon($crumb[0]);

        ?>
        <li class="breadcrumbs-item">
            <?php
            if ( ! empty( $crumb[1] ) ) { ?>
                <a href="<?php echo esc_url( $crumb[1] ); ?>"><?php echo $crumb[0]; ?></a>
                <?php
            }
            ?>
        </li>
        <?php

        echo $after;

        if ( sizeof( $breadcrumb ) !== $key + 1 ) {
            echo $delimiter;
        }
    }

    echo $wrap_after;

}
