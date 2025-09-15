<?php get_header(); ?>

<?php while (have_posts()) : the_post(); ?>

<?php $price = get_post_meta(get_the_ID(), 'price', true) ? : '0.00'; ?>
<?php $original_price = get_post_meta(get_the_ID(), 'original_price', true) ? : '0:00'; ?>
<?php $discount = get_post_meta(get_the_ID(), 'discount', true) ? : '0' ?>

<section class="single-course">
  <div class="container">
    <div class="course-header">
      <div class="breadcrumb">
        <a href="<?php echo get_post_type_archive_link('course'); ?>">Courses</a> / <span><?php the_title(); ?></span>
      </div>
      <h1><?php the_title(); ?></h1>
      <div class="course-meta">
        <div class="rating">
          <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
          </div>
          <span>4.8 (1,245 reviews)</span>
        </div>
        <div class="enrolled">
          <i class="fas fa-users"></i>
          <span>3,450 students enrolled</span>
        </div>
      </div>
    </div>

    <!-- Main Content -->
    <div class="course-content">    
      <div class="course-main">
        <div class="course-hero">
          <?php if (has_post_thumbnail()) : ?>
            <?php the_post_thumbnail('full', [
              'class' => 'course-image',
              'alt' => get_the_title()
            ]); ?>
          <?php else : ?>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/course-1.png" alt="<?php the_title(); ?>" class="course-image">
          <?php endif; ?>

          <!-- Floating Price Card -->
          <div class="price-card">
            <h3>$<?php echo esc_html($price); ?></h3>
            <div class="original-price">$ <?php echo esc_html($original_price); ?></div>
            <div class="discount-badge"><?php echo esc_html($discount); ?>% OFF</div>
            <button class="enroll-btn">Enroll Now</button>

            <div class="includes">
              <h4>This course includes:</h4>
              <ul>
                <li><i class="far fa-file-video"></i> 42 hours on-demand video</li>
                <li><i class="far fa-file-alt"></i> 18 articles</li>
                <li><i class="fas fa-download"></i> 56 downloadable resources</li>
                <li><i class="fas fa-infinity"></i> Full lifetime access</li>
                <li><i class="fas fa-mobile-alt"></i> Access on mobile and TV</li>
                <li><i class="fas fa-trophy"></i> Certificate of completion</li>
              </ul>
            </div>
          </div>
        </div>
      </div>

      <!-- Course Details Sidebar -->
      <div class="course-details">
        <h3>Course Details</h3>
        <p><i class="fas fa-clock icon"></i> Duration<br><strong>42 hours</strong></p>
        <p><i class="fas fa-calendar icon"></i> Last Updated<br><strong>June 15, 2023</strong></p>
        <p><i class="fas fa-language icon"></i> Language<br><strong>English</strong></p>
        <p><i class="fas fa-closed-captioning icon"></i> Subtitles<br><strong>English, Spanish</strong></p>
      </div>
    </div>

    <!-- Related Courses  -->
    <section class="related-courses">
      <h2 class="section-title">Related Courses</h2>
      <div class="courses-grid">
        <div class="course-card">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/course-2.png" alt="Related Course">
          <h4>UI/UX Design Fundamentals</h4>
          <p>Master user-centered design principles.</p>
          <span class="price">$89.99</span>
        </div>
      </div>
    </section>

  </div> 
</section> 

<?php endwhile; ?>

<?php get_footer(); ?>