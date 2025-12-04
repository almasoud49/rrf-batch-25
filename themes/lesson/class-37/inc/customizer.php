<?php
function lessonlms_customize_regigister($wp_customize)
{
    //Hero Section Start Here
      $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'hero_image', array(
        'label' => __('Hero Image' , 'lessonlms'),
        'settings'=> 'hero_image',
        'section'=> 'hero_settings'
    )));

    $wp_customize->add_section('hero_settings', array(
        'title' => __('Hero Settings', 'lessonlms'),
        'priority' => 30
    ));

    //Hero Image
    $wp_customize->add_setting('hero_image', array(
        'default' => get_template_directory_uri() . '/assets/images/hero-img.png'
    ));

    //Hero Title
    $wp_customize->add_setting('hero_title', array(
        'default' => 'Learn without limits and spread knowledge.'
    ));

    $wp_customize->add_control('hero_title', array(
        'label' => __('Hero Title', 'lessonlms'),
        'section' => 'hero_settings',
        'type' => 'text'
    ));

    //Hero Description
    $wp_customize->add_setting('hero_description', array(
        'default' => 'Build new skills for that “this is my year” feeling with courses, certificates, and degrees from world-class universities and companies.'
    ));

    $wp_customize->add_control('hero_description', array(
        'label' => __('Hero Description', 'lessonlms'),
        'section' => 'hero_settings',
        'type' => 'textarea'
    ));

    //Hero Button Text
    $wp_customize->add_setting('hero_button_text', array(
        'default' => 'See Courses'
    ));

    $wp_customize->add_control('hero_button_text', array(
        'label' => __('Hero Button Text', 'lessonlms'),
        'section' => 'hero_settings',
        'type' => 'text'
    ));

    //Hero Button Link
    $wp_customize->add_setting('hero_button_link', array(
        'default' =>'#'
    ));

    $wp_customize->add_control('hero_button_link', array(
        'label' => __('Hero Button Link', 'lessonlms'),
        'section' => 'hero_settings',
        'type'=> 'url'
    ));

    //Video Text
    $wp_customize->add_setting('hero_video_text', array(
        'default' => 'Watch Video'
    ));

    $wp_customize->add_control('hero_video_text', array(
        'label' => __('Hero Video Text', 'lessonlms'),
        'section' => 'hero_settings',
        'type' => 'text'
    ));

    //Video Link
    $wp_customize->add_setting('hero_video_link', array(
        'default' =>'#'
    ));

    $wp_customize->add_control('hero_video_link', array(
        'label' => __('Hero Video Link', 'lessonlms'),
        'section' => 'hero_settings',
        'type'=> 'url'
    ));    

    //Engagement Title
    $wp_customize->add_setting('engagement_title', array(
        'default' => 'Recent engagement'
    ));

    $wp_customize->add_control('engagement_title', array(
        'label' => __('Engagement Title', 'lessonlms'),
        'section' => 'hero_settings',
        'type' => 'text'
    ));

    //Students count
    $wp_customize->add_setting('students_count', array(
        'default' => '50K '
    ));

    $wp_customize->add_control('students_count', array(
        'label' => __('Students Count', 'lessonlms'),
        'section' => 'hero_settings',
        'type' => 'text'
    ));

    //Students Label
    $wp_customize->add_setting('students_label', array(
        'default' => 'Students'
    ));

    $wp_customize->add_control('students_label', array(
        'label' => __('Students Label', 'lessonlms'),
        'section' => 'hero_settings',
        'type' => 'text'
    ));

    //Courses count
    $wp_customize->add_setting('courses_count', array(
        'default' => '70K '
    ));

    $wp_customize->add_control('courses_count', array(
        'label' => __('Courses Count', 'lessonlms'),
        'section' => 'hero_settings',
        'type' => 'text'
    ));

    //Courses Label
    $wp_customize->add_setting('courses_label', array(
        'default' => 'Courses'
    ));

    $wp_customize->add_control('courses_label', array(
        'label' => __('Courses Label', 'lessonlms'),
        'section' => 'hero_settings',
        'type' => 'text'
    ));


    //UI/UX Courses Count     
    $wp_customize->add_setting('uiux_courses_count', array(
        'default' => '20'
    ));

    $wp_customize->add_control('uiux_courses_count', array(
        'label' => __('UI/UX Courses Count', 'lessonlms'),
        'section' => 'hero_settings',
        'type' => 'number'
    ));

    //UI/UX Courses Title
    $wp_customize->add_setting('uiux_courses_title', array(
        'default' => 'UI/UX Design'
    ));

    $wp_customize->add_control('uiux_courses_title', array(
        'label' => __('UI/UX Courses Title', 'lessonlms'),
        'section' => 'hero_settings',
        'type' => 'text'
    ));

    //Development Courses Count     
    $wp_customize->add_setting('dev_courses_count', array(
        'default' => '20'
    ));

    $wp_customize->add_control('dev_courses_count', array(
        'label' => __('Development  Courses Count', 'lessonlms'),
        'section' => 'hero_settings',
        'type' => 'number'
    ));

    //Development Courses Title
    $wp_customize->add_setting('dev_courses_title', array(
        'default' => 'Development'
    ));

    $wp_customize->add_control('dev_courses_title', array(
        'label' => __('Development Courses Title', 'lessonlms'),
        'section' => 'hero_settings',
        'type' => 'text'
    ));

    //Marketing Courses Count     
    $wp_customize->add_setting('marketing_courses_count', array(
        'default' => '30'
    ));

    $wp_customize->add_control('marketing_courses_count', array(
        'label' => __('Marketing  Courses Count', 'lessonlms'),
        'section' => 'hero_settings',
        'type' => 'number'
    ));

    //Marketing Courses Title
    $wp_customize->add_setting('marketing_courses_title', array(
        'default' => 'Marketing'
    ));

    $wp_customize->add_control('marketing_courses_title', array(
        'label' => __('Marketing Courses Title', 'lessonlms'),
        'section' => 'hero_settings',
        'type' => 'text'
    ));

    //Features Section Start here
     $wp_customize->add_section('features_settings', array(
        'title' => __('Features Settings', 'lessonlms'),
        'priority' => 100
    ));

    //Features title
    $wp_customize->add_setting('features_title', array(
        'default' => 'Learner outcomes through our awesome platform'
    ));

    $wp_customize->add_control('features_title', array(
        'label' => __('Features Title','lessonlms'),
        'section'=> 'features_settings',
        'type' => 'text'
    ));

    //Features Description One
    $wp_customize->add_setting('features_description_one', array(
        'default' => '87% of people learning for professional development report career benefits like getting a promotion, a raise, or starting a new career.'
    ));

    $wp_customize->add_control('features_description_one', array(
        'label' => __('Features Description One','lessonlms'),
        'section'=> 'features_settings',
        'type' => 'textarea'
    ));

    //Features Description Two
    $wp_customize->add_setting('features_description_two', array(
        'default' => 'Lesson Impact Report (2025)'
    ));

    $wp_customize->add_control('features_description_two', array(
        'label' => __('Features Description Two','lessonlms'),
        'section'=> 'features_settings',
        'type' => 'textarea'
    ));

    //Features Button Text
    $wp_customize->add_setting('features_button_text', array(
        'default' => 'Sign Up'
    ));

    $wp_customize->add_control('features_button_text', array(
        'label' => __('Features Button Text','lessonlms'),
        'section'=> 'features_settings',
        'type' => 'text'
    ));

    //Features Button URL
    $wp_customize->add_setting('features_button_url', array(
        'default' => '#'
    ));

    $wp_customize->add_control('features_button_url', array(
        'label' => __('Features Button URL','lessonlms'),
        'section'=> 'features_settings',
        'type' => 'url'
    ));

    // Features Image One
    $wp_customize->add_setting('features_image_one', array(
        'default' => get_template_directory_uri() . '/assets/images/features-img-1.png'
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'features_image_one', array(
        'label' => __('Features Image One', 'lessonlms'),
        'settings'=> 'features_image_one',
        'section'=> 'features_settings',
    )));

    // Features Image Two
    $wp_customize->add_setting('features_image_two', array(
        'default' => get_template_directory_uri() . '/assets/images/features-img-2.png'
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'features_image_two', array(
        'label' => __('Features Image Two', 'lessonlms'),
        'settings'=> 'features_image_two',
        'section'=> 'features_settings',
    )));



    //CTA Section Start here
     $wp_customize->add_section('cta_settings', array(
        'title' => __('CTA Settings', 'lessonlms'),
        'priority' => 105
    ));

    //CTA title
    $wp_customize->add_setting('cta_title', array(
        'default' => 'Take the next step toward your personal and professional goals with Lesson.'
    ));

    $wp_customize->add_control('cta_title', array(
        'label' => __('CTA Title','lessonlms'),
        'section'=> 'cta_settings',
        'type' => 'text'
    ));

    //CTA Description
    $wp_customize->add_setting('cta_description', array(
        'default' => 'Take the next step toward. Join now to receive personalized and more recommendations from the full Coursera catalog.'
    ));

    $wp_customize->add_control('cta_description', array(
        'label' => __('CTA Description','lessonlms'),
        'section'=> 'cta_settings',
        'type' => 'textarea'
    ));

    //CTA Button Text
    $wp_customize->add_setting('cta_button_text', array(
        'default' => 'Join Now'
    ));

    $wp_customize->add_control('cta_button_text', array(
        'label' => __('CTA Button Text','lessonlms'),
        'section'=> 'cta_settings',
        'type' => 'text'
    ));

    //CTA Button URL
    $wp_customize->add_setting('cta_button_url', array(
        'default' => '#'
    ));

    $wp_customize->add_control('cta_button_url', array(
        'label' => __('CTA Button URL','lessonlms'),
        'section'=> 'cta_settings',
        'type' => 'url'
    ));

    // CTA Image
    $wp_customize->add_setting('cta_image', array(
        'default' => get_template_directory_uri() . '/assets/images/cta-img.png'
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'cta_image', array(
        'label' => __('CTA Image', 'lessonlms'),
        'settings'=> 'cta_image',
        'section'=> 'cta_settings'
    )));



    //Blog Section Start Here
      $wp_customize->add_section('blog_settings', array(
        'title' => __('Blog Settings', 'lessonlms'),
        'priority' => 110
    ));


    //Blog Section Title
    $wp_customize->add_setting('blog_section_title', array(
        'default' => 'Our Blog'
    ));

    $wp_customize->add_control('blog_section_title', array(
        'label' => __('Blog Section Title', 'lessonlms'),
        'section' => 'blog_settings',
        'type' => 'text'
    ));

    //Blog Section Description
    $wp_customize->add_setting('blog_section_description', array(
        'default' => 'Read our regular travel blog and know the latest update of tour and travel'
    ));

    $wp_customize->add_control('blog_section_description', array(
        'label' => __('Blog Section Description', 'lessonlms'),
        'section' => 'blog_settings',
        'type' => 'text'
    ));

    //Footer Section
    $wp_customize->add_section('footer_settings', array(
        'title' => __('Footer Settings', 'lessonlms'),
        'priority' => 120
    ));


    //Footer Logo
    $wp_customize->add_setting('footer_logo');
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'footer_logo', array(
        'label' => __('Footer Logo', 'lessonlms'),
        'settings' => 'footer_logo',
        'section' => 'footer_settings',

    )));

    //Social Links
    $socials = ['twitter', 'facebook', 'linkedin', 'instagram'];
    foreach ($socials as $social) {
        $wp_customize->add_setting("footer_{$social}_link", array(
            'default' => '#'
        ));
        $wp_customize->add_control("footer_{$social}_link", array(
            'label' => sprintf(__('%s URL', 'lessonlms'), ucfirst($social)),
            'section' => 'footer_settings',
            'type' => 'url'
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
add_action('customize_register', 'lessonlms_customize_regigister');