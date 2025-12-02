
<?php 
/*
lessonLMS
    style.css
    index.php --> blog page
    screenshot.png
    functions.php
    assets/ 
        css/ 
        js/ 
        images/ 
    inc/ 
        setup.php
        enqueue.php
        customizer.php
        custom-post-type.php 
        metaboxes.php
        ajax-functions.php 
        review-functions.php 
        dashboard-widgets.php 
    template-parts/ 
        sections/ 
            hero
            courses 
            testimonials
            features
            cta
            blog
        partial/ 
            header
            footer
            sidebar
        content/ 
            content-{slug}.php 
    languages/ 
        lessonlms.pot 
    header.php 
    footer.php 
    front-page.php --> for home page

*/

get_header(); ?>

    <main>
        <!----- hero section ----->
        <?php  get_template_part('template-parts/sections/hero')?>


        <!----- Courses section ----->
        <?php get_template_part('template-parts/sections/courses') ?>


        <!----- testimonial section ----->
        <?php  get_template_part('template-parts/sections/testimonial')?>


        <!----- features section ----->
        <?php  get_template_part('template-parts/sections/features')?>


        <!----- CTA section ----->
         <?php  get_template_part('template-parts/sections/cta')?>
       


        <!----- our blog section ----->
         <?php  get_template_part('template-parts/sections/blog')?>
        
    </main>

 <?php  get_footer();?>