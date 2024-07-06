<?php

function my_theme_enqueue_scripts() {
    wp_enqueue_style('my_theme_styles', get_template_directory_uri() . '/style.css', array(), '1.0.0');
    wp_enqueue_script('my_theme_scripts', get_template_directory_uri() . '/main.js', array(), '1.0.0', true);
}




add_action('wp_enqueue_scripts', 'my_theme_enqueue_scripts')
?>