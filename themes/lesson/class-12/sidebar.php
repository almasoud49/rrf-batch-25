
<aside class="blog-sidebar">
    <!-- Search Widget -->
    <div class="sidebar-widget search">
        <h3 class="widget-title">Search</h3>
        <?php get_search_form(); ?>
    </div>

    <!-- Recent Posts Widget -->
    <div class="sidebar-widget recent-posts">
        <h3 class="widget-title">Recent Posts</h3>
        <ul class="recent-posts-list">
            <?php
            $recent_posts = new WP_Query(array(
                'posts_per_page' => 5,
                'post_status' => 'publish',
                'ignore_sticky_posts' => true
            ));
            if ($recent_posts->have_posts()) :
                while ($recent_posts->have_posts()) : $recent_posts->the_post();
            ?>
                    <li>
                        <a href="<?php the_permalink(); ?>" class="post-link">
                            <?php if (has_post_thumbnail()) : ?>
                                <div class="post-thumb">
                                    <?php the_post_thumbnail('thumbnail'); ?>
                                </div>
                            <?php endif; ?>
                            <div class="post-info">
                                <h4><?php the_title(); ?></h4>
                                <span class="post-date"><?php echo get_the_date('M j, Y'); ?></span>
                            </div>
                        </a>
                    </li>
            <?php
                endwhile;
                wp_reset_postdata();
            endif;
            ?>
        </ul>
    </div>

    <!-- Tags Widget -->
    <div class="sidebar-widget tags">
        <h3 class="widget-title">Tags</h3>
        <div class="tag-cloud">
            <?php
            $tags = get_tags(array('orderby' => 'count', 'order' => 'DESC', 'number' => 20));
            if ($tags) {
                foreach ($tags as $tag) {
                    echo '<a href="' . esc_url(get_tag_link($tag->term_id)) . '">' . esc_html($tag->name) . '</a>';
                }
            } else {
                echo '<p>No tags yet.</p>';
            }
            ?>
        </div>
    </div>
</aside>