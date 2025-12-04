<?php
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