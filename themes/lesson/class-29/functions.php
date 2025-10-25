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

    // Font Awesome
    wp_enqueue_style('font-awesome-css', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.0/css/all.min.css', array(), '7.0.0');

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
    add_theme_support('post-thumbnails');
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


function lessonlms_register_sidebar(){
    register_sidebar(array(
        'name' => __('Blog Sidebar', 'lessonlms'),
        'id' => 'blog_sidebar',
        'description' => __('Widgets in this area will be shown on the blog sidebar.','lessonlms'),
        'before_widget' => '<div class="sidebar-widget recent-posts">',
        'after_widget' => '</div>',
        'before_title' => 'h3 class="widget-title">',
        'after_title' => '</h3>'
    ));
}

add_action('widgets_init', 'lessonlms_register_sidebar');


// Custom Post Type Start Here
function lessonlms_register_course(){
    register_post_type('course',
		array(
			'labels'      => array(
				'name'          => __('Courses', 'lessonlms'),
				'singular_name' => __('Course', 'lessonlms'),
                'add_new_item' => __('Add New Course','lessonlms'),
                'edit_item' => __('Edit Course','lessonlms'),
                'new_item' => __('New Course','lessonlms'),
                'search_items' => __('Search Course','lessonlms'),
			),
				'public'      => true,
				'has_archive' => true,
                'rewrite' => array('slug' => 'course'),
                'supports' => array('title', 'editor', 'thumbnail', 'custom-fields'),
                'menu_icon' => 'dashicons-welcome-learn-more'
		)
	);
}

add_action('init', 'lessonlms_register_course');

// Custom Meta Boxes Start Here

function lessonlms_course_meta_box(){
add_meta_box(
    'course_details',
    'Course Details',
    'lessonlms_course_meta_box_callback',
    'course',
    'normal',
    'high'
);
}

add_action('add_meta_boxes', 'lessonlms_course_meta_box');

function lessonlms_course_meta_box_callback($post){
    
    $price = get_post_meta($post->ID, 'price', true);
    $original_price = get_post_meta($post->ID, 'original_price', true);
    $video_hours = get_post_meta($post->ID, 'video_hours', true);
    $articles_count = get_post_meta($post->ID, '$articles_count', true);
    $downloadable_resources = get_post_meta($post->ID, 'downloadable_resources', true);

    // Course Details
    $duration = get_post_meta($post->ID, 'duration', true);
    $language = get_post_meta($post->ID, 'language', true);
    $subtitle = get_post_meta($post->ID, 'subtitle', true);


    // Course Eligiblily 
    $eligible_condition_1 = get_post_meta($post->ID, 'elg_condition_1', true);
    $eligible_condition_2 = get_post_meta($post->ID, 'elg_condition_2', true);
    $eligible_condition_3 = get_post_meta($post->ID, 'elg_condition_3', true);
    $eligible_condition_4 = get_post_meta($post->ID, 'elg_condition_4', true);

    // Course Overview
    $course_description = get_post_meta($post->ID, 'course_description', true);
    $learning_outcome_1 = get_post_meta($post->ID, 'learning_outcome_1', true);
    $learning_outcome_2 = get_post_meta($post->ID, 'learning_outcome_2', true);
    $learning_outcome_3 = get_post_meta($post->ID, 'learning_outcome_3', true);
    $learning_outcome_4 = get_post_meta($post->ID, 'learning_outcome_4', true);
    $learning_outcome_5 = get_post_meta($post->ID, 'learning_outcome_5', true);
    $learning_outcome_6 = get_post_meta($post->ID, 'learning_outcome_6', true);
    $learning_outcome_7 = get_post_meta($post->ID, 'learning_outcome_7', true);

    $course_requirement_1 = get_post_meta($post->ID, 'course_requirement_1', true);
    $course_requirement_2 = get_post_meta($post->ID, 'course_requirement_2', true);
    $course_requirement_3 = get_post_meta($post->ID, 'course_requirement_3', true);


    

    ?>
    <div>
        <p>
            <label for="price">Price: </label>
            <input type="number" name="price" step="0.01" 
                min="0" value="<?php echo esc_attr($price) ?>">
            
        </p>
        <p>
            <label for="original_price">Original Price: </label>
            <input type="number" name="original_price" step="0.01" 
                min="0" value="<?php echo esc_attr($original_price) ?>">
        </p>
        <p>
            <label for="video_hours">Video Hours: </label>
            <input type="number" name="video_hours" step="0.01" 
                min="0" value="<?php echo esc_attr($video_hours) ?>">
        </p>
        <p>
            <label for="articles_count">Articles Count: </label>
            <input type="number" name="articles_count" value="<?php echo esc_attr($articles_count) ?>">
        <p>
            <label for="downloadable_resources">Downloadable Resources: </label>
            <input type="number" name="downloadable_resources" value="<?php echo esc_attr($downloadable_resources); ?>">
        </p>
        <p>
            <label for="duration">Duration: </label>
            <input type="number" name="duration" step="0.01" 
                min="0" value="<?php echo esc_attr($duration); ?>">
        </p>
        <p>
            <label for="language">Language: </label>
            <input type="text" name="language" value="<?php echo esc_attr($language); ?>">
        </p>
        <p>
            <label for="subtitle">Subtitle: </label>
            <input type="textarea" name="subtitle" value="<?php echo esc_attr($subtitle); ?>">
        </p>

        <p>
            <label for="elg_condition_1">Condition 1: </label>
            <input type="text" name="elg_condition_1" value="<?php echo esc_attr($eligible_condition_1); ?>">
        </p>
        <p>
            <label for="elg_condition_2">Condition 2: </label>
            <input type="text" name="elg_condition_2" value="<?php echo esc_attr($eligible_condition_2); ?>">
        </p>
        <p>
            <label for="elg_condition_3">Condition 3: </label>
            <input type="text" name="elg_condition_3" value="<?php echo esc_attr($eligible_condition_3); ?>">
        </p>
        <p>
            <label for="elg_condition_4">Condition 4: </label>
            <input type="text" name="elg_condition_4" value="<?php echo esc_attr($eligible_condition_4); ?>">
        </p>
        <p>
            <label for="course_description">Course Description: </label>
            <textarea name="course_description" rows="4" cols="50"><?php echo esc_textarea($course_description); ?></textarea>
        </p>

        <p>
            <label for="learning_outcome_1">Learning Outcome 1: </label>
            <input type="text" name="learning_outcome_1" value="<?php echo esc_attr($learning_outcome_1); ?>">
        </p>
        <p>
            <label for="learning_outcome_2">Learning Outcome 2: </label>
            <input type="text" name="learning_outcome_2" value="<?php echo esc_attr($learning_outcome_2); ?>">
        </p>
        <p>
            <label for="learning_outcome_3">Learning Outcome 3: </label>
            <input type="text" name="learning_outcome_3" value="<?php echo esc_attr($learning_outcome_3); ?>">
        </p>
        <p>
            <label for="learning_outcome_4">Learning Outcome 4: </label>
            <input type="text" name="learning_outcome_4" value="<?php echo esc_attr($learning_outcome_4); ?>">
        </p>
        <p>
            <label for="learning_outcome_5">Learning Outcome 5: </label>
            <input type="text" name="learning_outcome_5" value="<?php echo esc_attr($learning_outcome_5); ?>">
        </p>
        <p>
            <label for="learning_outcome_6">Learning Outcome 6: </label>
            <input type="text" name="learning_outcome_6" value="<?php echo esc_attr($learning_outcome_6); ?>">
        </p>
        <p>
            <label for="learning_outcome_7">Learning Outcome 7: </label>
            <input type="text" name="learning_outcome_7" value="<?php echo esc_attr($learning_outcome_7); ?>">
        </p>
        <p>
            <label for="learning_outcome_7">Learning Outcome 7: </label>
            <input type="text" name="learning_outcome_7" value="<?php echo esc_attr($learning_outcome_7); ?>">
        </p>
        <p>
            <label for="course_requirement_1">Course Rquirement 1: </label>
            <input type="text" name="course_requirement_1" value="<?php echo esc_attr($course_requirement_1); ?>">
        </p>
        <p>
            <label for="course_requirement_2">Course Rquirement 2: </label>
            <input type="text" name="course_requirement_2" value="<?php echo esc_attr($course_requirement_2); ?>">
        </p>
        <p>
            <label for="course_requirement_3">Course Rquirement 3: </label>
            <input type="text" name="course_requirement_3" value="<?php echo esc_attr($course_requirement_3); ?>">
        </p>
    </div>

    <?php
}

function lessonlms_save_course_meta($post_id){
    $fields = array(
        'price',
        'original_price',
        'video_hours',
        'articles_count',
        'downloadable_resources',
        'duration',
        'language',
        'subtitle',
        'elg_condition_1',
        'elg_condition_2',
        'elg_condition_3',
        'elg_condition_4',
        'course_description',
        'learning_outcome_1',
        'learning_outcome_2',
        'learning_outcome_3',
        'learning_outcome_4',
        'learning_outcome_5',
        'learning_outcome_6',
        'learning_outcome_7',
        'course_requirement_1',
        'course_requirement_2',
        'course_requirement_3'
        
    );

    foreach($fields as $field){

        if(isset($_POST[$field])){
            update_post_meta($post_id, $field, sanitize_text_field($_POST[$field]));
        }
        
    }

}

add_action('save_post_course','lessonlms_save_course_meta');

// processed and saved user's submited review
function lessonlms_handle_review_submission(){
    if(isset($_POST['submit_review']) && isset($_POST['course_id'])){
        $course_id = intval($_POST['course_id']);
        $rating = intval($_POST['rating']);
        $review_text = sanitize_text_field($_POST['review_text']);
        $reviewer_name = sanitize_text_field($_POST['reviewer_name']);

        if($rating >= 1 && $rating <= 5 && !empty($review_text) && !empty($reviewer_name)){
        $reviews = get_post_meta($course_id, '_course_reviews', true);
        
        if(!is_array($reviews)){
            $reviews = array();
        }

        $new_review = array(
            'rating' => $rating,
            'review' => $review_text,
            'name' => $reviewer_name,
            'date' => current_time('mysql')
        );

        $reviews[] = $new_review;

        update_post_meta($course_id, '_course_reviews',$reviews);
        lessonlms_update_review_stats($course_id);        

        }
    }

}

add_action('init', 'lessonlms_handle_review_submission');


// update total reviews and  average rating from course's reviews
function lessonlms_update_review_stats($course_id){
$reviews = get_post_meta($course_id,'_course_reviews', true);

if(is_array($reviews) && !empty($reviews)){
    $total_rating = 0;
    $review_count = count($reviews);

    foreach($reviews as $review){
        $total_rating = $total_rating + $review['rating'];

    }

    $average_rating = round($total_rating/$review_count,1);

    update_post_meta($course_id, '_total_reviews', $review_count);
    update_post_meta($course_id, '_average_rating', $average_rating);
}

}

// return course's total review count and average rating
function lessonlms_get_reviews_stats($course_id){
    $total_reviews = get_post_meta($course_id, '_total_reviews', true) ? : 0;
    $average_rating = get_post_meta($course_id, '_average_rating', true) ? : 0;

    return array(
        'total_reviews'   => $total_reviews,
        'average_rating'  => $average_rating,
    );
}


// return reviews array for the course
function lessonlms_get_course_reviews($course_id){
    return get_post_meta($course_id, '_course_reviews', true) ? : array();

}