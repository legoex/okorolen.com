<?php

remove_action('wp_head','rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'wp_generator');
/*
remove_action( 'wp_head', 'wp_resource_hints', 2 );
remove_action ( 'wp_head', 'print_emoji_detection_script', 7);
remove_action ( 'wp_print_styles', 'print_emoji_styles');
add_filter( 'emoji_svg_url', '__return_false' ); */
show_admin_bar(false);

function logo_widget_init() {
    register_sidebar(array(
        'name'              => 'Логотип SVG',
        'id'                => 'logo',
        'before_widget'     => '',
        'after_widget'      => '',
        'before_title'      => '<span class="hidden">',
        'after_title'       => '</span>',

    ) );
}
add_action('widgets_init', 'logo_widget_init');

require_once (get_stylesheet_directory() . '/theme-options.php');

add_theme_support('post-thumbnails');

