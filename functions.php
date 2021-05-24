<?php
function theme_styles() {
    wp_enqueue_style('style_css', get_template_directory_uri().'/style.css');
    wp_enqueue_style('reset_css', get_template_directory_uri().'/assets/css/reset.css');
    wp_enqueue_style('queries_css', get_template_directory_uri().'/assets/css/queries.css');
}

add_action('wp_enqueue_scripts', 'theme_styles');