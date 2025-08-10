
<aside class="blog-sidebar">
    <!-- Search Widget -->
    <div class="sidebar-widget search">
        <h3 class="widget-title">Search</h3>
        <form>
            <input type="text" name="" id="" placeholder="Search">
            <button type="submit"> <i class="fas fa-search"></i></button>
        </form>
    </div>

    <!-- Recent Posts Widget -->
    <div class="sidebar-widget recent-posts">
        <h3 class="widget-title">Recent Posts</h3>
        <ul class="recent-posts-list">
            <?php
            $recent_posts = wp_get_recent_posts(array(
                'numberposts' => 4,
                'post_status' => 'publish'
            ));
            ?>
            <?php foreach($recent_posts as $post) : ?> 
            <li>
                <a href="<?php echo get_permalink($post['ID']); ?>">
                    <?php  echo esc_html($post['post_title']) ?>

                </a>
                <span class="post-date"><?php echo get_the_date('M d, Y', $post['ID']); ?></span>   
            </li>      
            <?php endforeach; ?>
            
        </ul>
    </div>

    <!-- Categories Widget -->
    <div class="sidebar-widget categories">
        <h3 class="widget-title"><?php _e('Categories', 'lessonlms'); ?></h3>
        <ul>
            <?php 
            wp_list_categories(array(
                'title_li'=> '',
                'show_count' =>  true
            )); 
            ?>
        </ul>
    </div>

    <!-- Tags Widget -->
    <div class="sidebar-widget tags">
        <h3 class="widget-title"><?php _e('Tags', 'lessonlms') ?></h3>
        <div class="tag-cloud">
            <?php
            wp_tag_cloud(array(
                'smallest' => 12,
                'largest' => 12,
                'unit' => 'px',
                'number'=> 10,
                'format' => 'flat'

            ));
            ?>
        </div>
    </div>
</aside>