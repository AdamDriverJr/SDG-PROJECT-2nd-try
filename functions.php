<?php
function sdgproject_enqueue_style() {
    wp_enqueue_style("sdgproject-style", get_stylesheet_uri());
}

add_action("wp_enqueue_scripts", "sdgproject_enqueue_style"); ?>
