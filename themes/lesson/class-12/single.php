<?php get_header(); ?>

<section class="blog-details">
    <div class="container">
        <!-- Flex container for side-by-side layout -->
        <div class="blog-details-container">
            
            <!-- Main Content Area -->
            <div class="blog-details-wrapper">
                <?php if (have_posts()) : ?>
                    <?php while (have_posts()) : the_post(); ?>

                        <div class="blog-content">
                            <!-- Blog Meta -->
                            <div class="blog-meta">
                                <div class="date">
                                    <div class="yellow-circle"></div>
                                    <span><?php echo get_the_date(); ?></span>
                                </div>
                                <h1 class="blog-title"><?php the_title(); ?></h1>
                                <div class="author">
                                    <?php echo get_avatar(get_the_author_meta('ID'), 40); ?>
                                    <span class="author-name">By <?php the_author(); ?></span>
                                </div>
                            </div>

                            <!-- Featured Image -->
                            <div class="featured-image">
                                <?php if (has_post_thumbnail()) : ?>
                                    <?php the_post_thumbnail('full'); ?>
                                <?php endif; ?>
                            </div>

                            <!-- Blog Content -->
                            <div class="blog-text">
                                <?php the_content(); ?>

                                <!-- Tags Section  -->
                                <div class="blog-tags">
                                    <span>Tags:</span>
                                    <?php
                                    $tags = get_the_tags();
                                    if ($tags):
                                        foreach ($tags as $tag):
                                    ?>
                                            <a href="<?php echo esc_url(get_tag_link($tag->term_id)); ?>">
                                                <?php echo esc_html($tag->name); ?>
                                            </a>
                                    <?php
                                        endforeach;
                                    else:
                                        echo '<span>No tags</span>';
                                    endif;
                                    ?>
                                </div>

                                <!-- Social Share -->
                                <div class="social-share">
                                    <span>Share:</span>
                                    <a href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>" target="_blank">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                    <a href="https://twitter.com/intent/tweet?url=<?php the_permalink(); ?>&text=<?php echo urlencode(get_the_title()); ?>" target="_blank">
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                    <a href="https://pinterest.com/pin/create/button/?url=<?php the_permalink(); ?>&media=<?php echo esc_url(get_the_post_thumbnail_url(get_the_ID(), 'full')); ?>&description=<?php echo urlencode(get_the_title()); ?>" target="_blank">
                                        <i class="fab fa-pinterest-p"></i>
                                    </a>
                                    <a href="https://www.linkedin.com/shareArticle?mini=true&url=<?php the_permalink(); ?>&title=<?php echo urlencode(get_the_title()); ?>" target="_blank">
                                        <i class="fab fa-linkedin-in"></i>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <!-- Author Box -->
                        <div class="author-box">
                            <div class="author-avatar">
                                <?php echo get_avatar(get_the_author_meta('ID'), 80); ?>
                            </div>
                            <div class="author-info">
                                <h3>About <?php the_author(); ?></h3>
                                <p>
                                    <?php echo get_the_author_meta('description') ?: 'This author has not written a bio yet.'; ?>
                                </p>
                                <div class="author-social">
                                    <?php if(get_the_author_meta('user_url')) : ?>
                                    <a href="<?php echo get_the_author_meta('user_url') ?>"><i class="fab fa-facebook-f"></i></a>
                                <?php endif; ?>

                                <?php if(get_the_author_meta('user_url')) : ?>
                                    <a href="<?php echo get_the_author_meta('user_url') ?>"><i class="fab fa-twitter"></i></a>
                                <?php endif; ?>

                                <?php if(get_the_author_meta('user_url')) : ?>
                                    <a href="<?php echo get_the_author_meta('user_url') ?>"><i class="fab fa-pinterest-p"></i></a>
                                <?php endif; ?>

                                <?php if(get_the_author_meta('user_url')) : ?>
                                    <a href="<?php echo get_the_author_meta('user_url') ?>"><i class="fab fa-linkedin-in"></i></a>
                                <?php endif; ?>
                                </div>
                            </div>
                        </div>

                        <!-- Comments Section -->
                        <div class="comments-section">
                            <?php
                            $comments_count = get_comments_number();

                           
                            if ($comments_count > 0) {
                                echo '<h2 class="section-title">Comments (' . $comments_count . ')</h2>';
                            }else{
                                echo '<h2 class="section-title">Comments(1)</h2>';
                            }
                            
                            wp_list_comments(array(
                                'style'      => 'div',
                                'avatar_size' => 50,
                                'callback'   => null
                            ));
                            ?>

                            <!-- Comment 1 -->
                            <div class="comment">
                                <div class="comment-avatar">
                                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/comment-avatar-1.png" alt="Sarah Johnson">
                                </div>
                                <div class="comment-content">
                                    <div class="comment-meta">
                                        <h4>Sarah Johnson</h4>
                                        <span class="comment-date">2 days ago</span>
                                    </div>
                                    <p>This is a great post! I really enjoyed reading it.</p>
                                </div>
                            </div>
                        </div>

                        <!-- Comment Form -->
                        <div class="comment-form">
                            <h2 class="section-title">Leave a Comment</h2>
                            <form>
                                <div class="form-group">
                                    <textarea placeholder="Write your comment here ..." required></textarea>
                                </div>
                                <div class="form-row">
                                    <div class="form-group">
                                        <input type="text" placeholder="Name" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="email" placeholder="Email" required>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary">Submit Comment</button>
                            </form>
                        </div>

                    <?php endwhile; ?>
                <?php endif; ?>
            </div>

            <!-- Sidebar -->
            <?php get_sidebar(); ?>

        </div>
    </div>
</section>

<?php get_footer(); ?>