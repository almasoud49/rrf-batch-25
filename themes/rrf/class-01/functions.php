<?php

function rrf_theme_files(){
wp_enqueue_style('style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'rrf_theme_files');