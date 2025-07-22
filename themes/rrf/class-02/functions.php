<?php

function rrf_theme_files(){
    wp_enqueue_style('style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'rrf_theme_files');

function rrf_theme_basic_setup(){
    
    //register navigation menu
    register_nav_menus(array(
        'primary' => 'Primary Menu'
    ));
}

add_action('init', 'rrf_theme_basic_setup');
