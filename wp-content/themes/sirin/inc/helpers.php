<?php

function carbon_get_post_meta_img($field) {
    $id = carbon_get_the_post_meta($field);
    return wp_get_attachment_image_url($id);
}
