<?php
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
                'supports' => array('title', 'editor', 'thumbnail', 'custom-fields', 'author'),
                'menu_icon' => 'dashicons-welcome-learn-more'
		)
	);
}

add_action('init', 'lessonlms_register_course');