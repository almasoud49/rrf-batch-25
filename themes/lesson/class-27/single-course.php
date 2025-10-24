<?php get_header(); ?>

<?php while (have_posts()) : the_post(); ?>

<?php 
$price = get_post_meta(get_the_ID(), 'price', true) ? : '0.00'; 
$original_price = get_post_meta(get_the_ID(), 'original_price', true) ? : '0:00'; 
$video_hours = get_post_meta(get_the_ID(), 'video_hours', true) ? : '0:00'; 
$articles_count = get_post_meta(get_the_ID(), 'articles_count', true) ? : '0'; 
$downloadable_resources = get_post_meta(get_the_ID(), 'downloadable_resources', true) ? : '0'; 
$duration = get_post_meta(get_the_ID(), 'duration', true) ? : '0.00'; 
$language = get_post_meta(get_the_ID(), 'language', true) ? : 'English'; 
$subtitle = get_post_meta(get_the_ID(), 'subtitle', true) ? : 'English'; 

$eligible_condition_1 = get_post_meta(get_the_ID(), 'elg_condition_1', true) ? : '';
$eligible_condition_2 = get_post_meta(get_the_ID(), 'elg_condition_2', true) ? : '';
$eligible_condition_3 = get_post_meta(get_the_ID(), 'elg_condition_3', true) ? : '';
$eligible_condition_4 = get_post_meta(get_the_ID(), 'elg_condition_4', true) ? : '';

$course_description = get_post_meta(get_the_ID(), 'course_description', true) ? : '';
$learning_outcome_1 = get_post_meta(get_the_ID(), 'learning_outcome_1', true) ? : '';
$learning_outcome_2 = get_post_meta(get_the_ID(), 'learning_outcome_2', true) ? : '';
$learning_outcome_3 = get_post_meta(get_the_ID(), 'learning_outcome_3', true) ? : '';
$learning_outcome_4 = get_post_meta(get_the_ID(), 'learning_outcome_4', true) ? : '';
$learning_outcome_5 = get_post_meta(get_the_ID(), 'learning_outcome_5', true) ? : '';
$learning_outcome_6 = get_post_meta(get_the_ID(), 'learning_outcome_6', true) ? : '';
$learning_outcome_7 = get_post_meta(get_the_ID(), 'learning_outcome_7', true) ? : '';

$course_requirement_1 = get_post_meta(get_the_ID(), 'course_requirement_1', true) ? : '';
$course_requirement_2 = get_post_meta(get_the_ID(), 'course_requirement_2', true) ? : '';
$course_requirement_3 = get_post_meta(get_the_ID(), 'course_requirement_3', true) ? : '';

$discount = '';
if(!empty($original_price) && $original_price > $price){
    $discount = round((($original_price - $price)/$original_price)*100);
}
?>

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
                <li><i class="far fa-file-video"></i> <?php echo esc_html($video_hours); ?> Hours on-demand video</li>
                <li><i class="far fa-file-alt"></i> <?php echo esc_html($articles_count); ?> Articles</li>
                <li><i class="fas fa-download"></i> <?php echo esc_html($downloadable_resources); ?> downloadable resources</li>
                <li><i class="fas fa-infinity"></i> Full lifetime access</li>
                <li><i class="fas fa-mobile-alt"></i> Access on mobile and TV</li>
                <li><i class="fas fa-trophy"></i> Certificate of completion</li>
              </ul>
            </div>
          </div>
        </div>
        
        <!-- Tab Navigation -->
        <div class="course-tabs">
          <div class="tab-nav">
            <button class="tab-link active" data-tab="overview">Overview</button>
            <button class="tab-link" data-tab="curriculum">Curriculum</button>
            <button class="tab-link" data-tab="instructor">Instructor</button>
            <button class="tab-link" data-tab="reviews">Reviews</button>
          </div>
          
          <div class="tab-content">
            <div id="overview" class="tab-pane active">
                <div class="course-description">                  
                    <h2>Course Description</h2>
                    <p> <?php echo esc_html($course_description); ?></p>
                    
                    <div class="what-you-learn">
                        <h3>What You'll Learn</h3>
                        <ul>
                            <li><i class="fas fa-check check-icon"></i><?php echo esc_html($learning_outcome_1) ;?></li>
                            <li><i class="fas fa-check check-icon"></i><?php echo esc_html($learning_outcome_2) ;?></li>
                            <li><i class="fas fa-check check-icon"></i><?php echo esc_html($learning_outcome_3) ;?></li>
                            <li><i class="fas fa-check check-icon"></i><?php echo esc_html($learning_outcome_4) ;?></li>
                            <li><i class="fas fa-check check-icon"></i><?php echo esc_html($learning_outcome_5) ;?></li>
                            <li><i class="fas fa-check check-icon"></i><?php echo esc_html($learning_outcome_6) ;?></li>
                            <li><i class="fas fa-check check-icon"></i><?php echo esc_html($learning_outcome_7) ;?></li>
                        </ul>
                    </div>

                    <div class="requirements">
                    <h3 class="">Requirements</h3>
                    <ul>
                        <li><i class="fas fa-circle bullet-icon"></i><?php echo esc_html($course_requirement_1); ?></li>
                        <li><i class="fas fa-circle bullet-icon"></i><?php echo esc_html($course_requirement_2); ?></li>
                        <li><i class="fas fa-circle bullet-icon"></i><?php echo esc_html($course_requirement_3); ?></li>
                    </ul>
                    </div>
                    </div>
            </div>
            
            <div id="curriculum" class="tab-pane">
              <h3>Course Curriculum</h3>
              <p>Curriculum content will be displayed here.</p>
            </div>
            
            <div id="instructor" class="tab-pane">
              <h3>About the Instructor</h3>
              <p>Instructor information will be displayed here.</p>
            </div>
            
            <div id="reviews" class="tab-pane review-section ">              
              <h3 class="review-title">Student Reviews</h3>
              <h4 class="form-title">Add Your Review</h4>
              <label for="rating">Your Rating:</label>
              <div class="star-rating" id="starRating">
                <span class="star" data-value="1">★</span>
                <span class="star" data-value="2">★</span>
                <span class="star" data-value="3">★</span>
                <span class="star" data-value="4">★</span>
                <span class="star" data-value="5">★</span>
              </div>
              <div class="input-group">
                <label for="name">Your Name:</label>
                <input type="text" id="name" placeholder="Enter your name" />
              </div>

              <div class="input-group">
                <label for="review">Your Review:</label>
                <textarea id="review" placeholder="Write your thoughts here..."></textarea>
              </div>

              <button class="submit-btn">Submit Review</button>
              <!-- Sample Displayed Review -->
            <div class="review-item">
              <div class="review-header">
                <span class="reviewer-name">Rasel Ahmed</span>
                <div class="review-stars">
                  <span class="star">★</span>
                  <span class="star">★</span>
                  <span class="star">★</span>
                  <span class="star">★</span>
                  <span class="star">★</span>
                </div>
              </div>
              <p class="review-text">Excellent course! Very well structured and the instructor is super helpful.</p>
              <div class="review-date">September 20, 2025</div>
            </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Course Details Sidebar -->
      <div class="course-sidebar">
        <!-- Course Details Card -->
        <div class="course-details">
          <h3>Course Details</h3>
          <p><i class="fas fa-clock icon"></i> Duration<br><strong> <?php echo esc_html($duration) ?> Hours</strong></p>
          <p><i class="fas fa-calendar icon"></i> Last Updated<br><strong>June 15, 2023</strong></p>
          <p><i class="fas fa-language icon"></i> Language<br><strong><?php echo esc_html($language); ?></strong></p>
          <p><i class="fas fa-closed-captioning icon"></i> Subtitles<br><strong> <?php echo esc_html($subtitle); ?></strong></p>
        </div>
        
        <!-- Who This Course Is For Card -->
        <div class="course-audience">
          <h3>Who this course is for:</h3>
          <ul>
            <li><i class="fas fa-check check-icon"></i><?php echo esc_html($eligible_condition_1); ?></li>
            <li><i class="fas fa-check check-icon"></i> <?php echo esc_html($eligible_condition_2); ?></li>
            <li><i class="fas fa-check check-icon"></i> <?php echo esc_html($eligible_condition_3); ?></li>
            <li><i class="fas fa-check check-icon"></i> <?php echo esc_html($eligible_condition_4); ?></li>
          </ul>
        </div>
      </div>
    </div>
</div> 
</section> 

<?php endwhile; ?>

<?php get_footer(); ?>