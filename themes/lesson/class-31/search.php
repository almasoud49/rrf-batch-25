<?php get_header(); ?>

<section class="blog search-results">
    <div class="container">

        <!-- Search Title -->
         <div class="section-header">
            <h2 class="section-title">
                <?php printf(esc_html__('Search result for %s','lessonlms'), get_search_query())?>
            </h2>
         </div>

         <?php if(have_posts()): ?>
            <div class="blog-list">
            <?php while(have_posts()):  the_post()?>
            <article class="blog-item">
            <div class="blog-heading">
                <div class="blog-title">
                    <a href="<?php  the_permalink()?>"><?php the_title() ?></a>
                </div>
            </div>

            <div class="blog-excerpt">
                <?php the_excerpt(); ?>
            </div>
            </article>           
            <?php endwhile; ?>
            </div>
            <?php else: ?>
            <p class="no-results">
                <?php _e('No Results Found','lessonlms')?>
            </p>
         <?php endif; ?>
    </div>
</section>

<?php get_footer(); ?>

   