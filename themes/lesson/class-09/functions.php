<?php

// Enqueue/Link scripts and style
function lessonlms_theme_scripts()
{
    // Google Fonts
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Noto+Sans+Bengali:wght@100..900&family=Poppins:wght@400;700&family=Sen:wght@400..800&display=swap', null);

    // Theme Style CSS
    wp_enqueue_style('styles-css', get_template_directory_uri() . '/assets/css/style.css');

    // Responsive CSS
    wp_enqueue_style('responsive-css', get_template_directory_uri() . '/assets/css/responsive.css');

    // Slick Slider CSS
    wp_enqueue_style('slick-css', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css', array(), '1.9.0');

    // Boxicons
    wp_enqueue_style('boxicon-css', 'https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css', array(), '2.1.4');

    // Default Theme Stylesheet (style.css)
    wp_enqueue_style('lesson-theme-style', get_stylesheet_uri());

    // jQuery (included in WordPress)
    wp_enqueue_script('jquery');

    // Slick JS
    wp_enqueue_script('slick-js', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js', array('jquery'), '1.9.0', true);

    // Main Theme JS
    wp_enqueue_script('main-js', get_template_directory_uri() . "/assets/js/script.js", array('jquery'), '1.0', true);
}
add_action('wp_enqueue_scripts', 'lessonlms_theme_scripts');

function lessonlms_theme_registration()
{
    add_theme_support('custom-logo', array(
        'height' => 30,
        'weight' => 80
    ));
    register_nav_menus(array(
        'primary_menu' => __('Primary Menu', 'lessonlms'),
        'mobile_menu' => __('Mobile Menu', 'lessonlms'),
        'footer_menu_1' => __('Footer Menu 1', 'lessonlms'),
        'footer_menu_2' => __('Footer Menu 2', 'lessonlms'),
    ));
}
add_action('after_setup_theme', 'lessonlms_theme_registration');


function lessonlms_customize_regigister_footer($wp_customize)
{
    $wp_customize->add_section('footer_settings', array(
        'title' => __('Footer Settings', 'lessonlms'),
        'priority' => 120
    ));

    //Footer Logo
    $wp_customize->add_setting('footer_logo');
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'footer_logo', array(
        'label'=> __('Footer Logo','lessonlms'),
        'settings'=> 'footer_logo',
        'section' => 'footer_settings',

    )));

    //Social Links
    $socials = ['twitter','facebook','linkedin','instagram'];
    foreach ($socials as $social){
        $wp_customize->add_setting("footer_{$social}_link", array(
            'default'=> '#'
        ));
        $wp_customize->add_control("footer_{$social}_link",array(
            'label'=> sprintf(__('%s URL','lessonlms'),ucfirst($social)),
             'section' => 'footer_settings',
             'type'=> 'url'
        ));
    }

    //About Text
    $wp_customize->add_setting('footer_about_text', array(
        'default' => 'Need to help for your dream Career? trust us. With Lesson, study becomes a lot easier with us.'
    ));

    $wp_customize->add_control('footer_about_text', array(
        'label' => __('About Text', 'lessonlms'),
        'section' => 'footer_settings',
        'type' => 'textarea'
    ));

    //Footer Menu 1 Title 
    $wp_customize->add_setting('footer_menu_1_title', array(
        'default' => 'Company'
    ));

    $wp_customize->add_control('footer_menu_1_title', array(
        'label' => __('Footer Menu 1 Title', 'lessonlms'),
        'section' => 'footer_settings',
        'type' => 'text'
    ));

    //Footer Menu 2 Title 
    $wp_customize->add_setting('footer_menu_2_title', array(
        'default' => 'Support'
    ));

    $wp_customize->add_control('footer_menu_2_title', array(
        'label' => __('Footer Menu 2 Title', 'lessonlms'),
        'section' => 'footer_settings',
        'type' => 'text'
    ));


    //Footer Address 
    $wp_customize->add_setting('footer_address_title', array(
        'default' => 'Address'
    ));
    $wp_customize->add_control('footer_address_title', array(
        'label' => __('Footer Address Title', 'lessonlms'),
        'section' => 'footer_settings',
        'type' => 'text'
    ));

    //Footer Location
    $wp_customize->add_setting('footer_location', array(
        'default' => ''
    ));
    $wp_customize->add_control('footer_location', array(
        'label' => __('Footer Location', 'lessonlms'),
        'section' => 'footer_settings',
        'type' => 'text'
    ));

    //Footer Location Description
    $wp_customize->add_setting('footer_location_description', array(
        'default' => '27 Division St, New York, NY 10002, USA'
    ));
    $wp_customize->add_control('footer_location_description', array(
        'label' => __('Footer Location Description', 'lessonlms'),
        'section' => 'footer_settings',
        'type' => 'text'
    ));

    //Footer Email Title
    $wp_customize->add_setting('footer_email_title', array(
        'default' => 'Email'
    ));
    $wp_customize->add_control('footer_email_title', array(
        'label' => __('Footer Email Title', 'lessonlms'),
        'section' => 'footer_settings',
        'type' => 'text'
    ));

    //Footer Email
    $wp_customize->add_setting('footer_email', array(
        'default' => 'email@gmail.com'
    ));
    $wp_customize->add_control('footer_email', array(
        'label' => __('Footer Email', 'lessonlms'),
        'section' => 'footer_settings',
        'type' => 'email'
    ));


    //Footer Phone Title
    $wp_customize->add_setting('footer_phone_title', array(
        'default' => 'Phone'
    ));
    $wp_customize->add_control('footer_phone_title', array(
        'label' => __('Footer Phone Title', 'lessonlms'),
        'section' => 'footer_settings',
        'type' => 'text'
    ));

    //Footer Phone
    $wp_customize->add_setting('footer_phone', array(
        'default' => '88019887654321'
    ));
    $wp_customize->add_control('footer_phone', array(
        'label' => __('Footer Phone', 'lessonlms'),
        'section' => 'footer_settings',
        'type' => 'tel'
    ));
}
add_action('customize_register', 'lessonlms_customize_regigister_footer');
