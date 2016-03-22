<?php

function site_resources(){
    wp_enqueue_style('style', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'site_resources');

// Nav menus
register_nav_menus([
    'primary'=>__('Primary Menu'),
    'footer'=>__('Footer Menu')
]);