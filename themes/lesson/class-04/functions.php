<?php
//Link/Enqueue Scripts and Style

function lesson1lms_theme_scripts(){
    

   //Google Font
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,700;1,500&family=Sen:wght@400..800&display=swap');

    //Theme Style CSS
    wp_enqueue_style('style-css', get_template_directory_uri() . '/assets/css/style.css');

    //Responsive CSS
    wp_enqueue_style('responsive-css', get_template_directory_uri() . '/assets/css/responsive.css');

    //Slick Slider CSS
    wp_enqueue_style('slick-css', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css', array(), '1.9.0');

    //Boxicon
    wp_enqueue_style('boxicon-js', 'https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"', array(), '2.1.4');

    //Style CSS
    wp_enqueue_style('lesson1-theme-style', get_stylesheet_uri());

    //jQuery
    wp_enqueue_script('jquery');

    //Slick JS
    wp_enqueue_script('slick-js','https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js', array('jquery'), '1.9.0',true);

    //Main JS
    wp_enqueue_style('main-js', get_template_directory_uri() .'/assets/js/scripts.js', array(), '1.9.0');

}

add_action('wp_enqueue_scripts','lesson1lms_theme_scripts');