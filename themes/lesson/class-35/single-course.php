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

$learn_points_raw = get_post_meta(get_the_ID(), 'learn_points', true);
$learn_points = $learn_points_raw ? array_filter(array_map('trim', explode("\n", $learn_points_raw))) : [];

$eligible_condition_1 = get_post_meta(get_the_ID(), 'elg_condition_1', true) ? : '';
$eligible_condition_2 = get_post_meta(get_the_ID(), 'elg_condition_2', true) ? : '';
$eligible_condition_3 = get_post_meta(get_the_ID(), 'elg_condition_3', true) ? : '';
$eligible_condition_4 = get_post_meta(get_the_ID(), 'elg_condition_4', true) ? : '';

$course_description = get_post_meta(get_the_ID(), 'course_description', true) ? : '';


$course_requirement_1 = get_post_meta(get_the_ID(), 'course_requirement_1', true) ? : '';
$course_requirement_2 = get_post_meta(get_the_ID(), 'course_requirement_2', true) ? : '';
$course_requirement_3 = get_post_meta(get_the_ID(), 'course_requirement_3', true) ? : '';

$discount = '';
if(!empty($original_price) && $original_price > $price){
    $discount = round((($original_price - $price)/$original_price)*100);
}

$enrolled_students = get_post_meta(get_the_ID(), '_enrolled_students', true) ? : 0;
$current_user_id = get_current_user_id();

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

          <?php 
          $stats = lessonlms_get_reviews_stats(get_the_ID());
          $avg_rating = $stats['average_rating'];
          $total_reviews = $stats['total_reviews'];          
          ?>

          <?php for($i=1 ; $i <= 5; $i++): ?>
          <?php if($i <= $avg_rating) : ?>
            <i class="fas fa-star"></i>
          <?php elseif( $i - 0.5 <= $avg_rating) : ?>
            <i class="fas fa-star-half-alt"></i>
          <?php else : ?>
            <i class="fa-thin fa-star"></i>          
            <?php endif; ?>
            <?php endfor; ?>
          </div>

          <span><?php echo esc_html($avg_rating); ?> (<?php echo esc_html($total_reviews); ?> reviews)</span>
        </div>
        <div class="enrolled">
          <i class="fas fa-users"></i>
          <span><?php echo number_format($enrolled_students); ?> students enrolled</span>
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
           
            <?php if($current_user_id > 0 ): ?>
            <button class="enroll-btn" data-course-id="<?php echo get_the_ID() ?>">Enroll Now</button>
            <?php else :?>
              <div class="login-required">
                <p>Please Register</p>
                <a href="<?php echo wp_login_url(get_permalink());?>" class="login-btn">Login</a>
                <a href="<?php echo wp_registration_url(get_the_permalink()); ?> " class="register-btn">Registration</a>
              </div>
            <?php endif; ?>

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
                      <?php if(!empty($learn_points)): ?>
                        <h3>What You'll Learn</h3>
                        <ul>
                          <?php foreach($learn_points as $point) : ?>
                          <li><i class="fas fa-check check-icon"></i><?php echo esc_html($point) ;?></li>

                          <?php endforeach; ?>
                        </ul>

                        <?php endif; ?>
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
            
            <!-- Review Form -->
            <div id="reviews" class="tab-pane review-section">
              <h3 class="review-title">Student Reviews</h3>
              <h4 class="form-title">Add Your Review</h4>
              <form method="post">
                <input type="hidden" name="course_id" value="<?php echo get_the_ID(); ?>">
                <!-- Ratings -->
                <label for="rating">Your Rating:</label>
                <div class="star-rating" id="starRating">
                  <div class="form-group">
                    <input type="radio" id="star5" name="rating" value="5" required>
                    <label for="star5">★</label>

                    <input type="radio" id="star4" name="rating" value="4">
                    <label for="star4">★</label>

                    <input type="radio" id="star3" name="rating" value="3">
                    <label for="star3">★</label>

                    <input type="radio" id="star2" name="rating" value="2">
                    <label for="star2">★</label>

                    <input type="radio" id="star1" name="rating" value="1">
                    <label for="star1">★</label>
                  </div>
                </div>

                <div class="input-group">
                  <label for="reviewer_name">Your Name:</label>
                  <input type="text" id="reviewer_name" name="reviewer_name" placeholder="Enter your name" required />
                </div>

                <div class="input-group">
                  <label for="review_text">Your Review:</label>
                  <textarea id="review_text" name="review_text" placeholder="Write your thoughts here..." required></textarea>
                </div>

                <button type="submit" name="submit_review" value="1" class="submit-btn">Submit Review</button>
              </form>

              <!-- Reviews list -->
              <div class="reviews-list">
                <?php 
                $reviews = lessonlms_get_course_reviews(get_the_ID());
                if ($reviews): ?>
                  <?php foreach (array_reverse($reviews) as $review): ?>
                    <div class="review-item">
                      <div class="review-header">
                        <span class="reviewer-name"><?php echo esc_html($review['name']); ?></span>
                        <div class="review-stars">
                          <?php for ($i = 1; $i <= 5; $i++): ?>
                            <?php if ($i <= $review['rating']): ?>
                              <span class="star filled">★</span>
                            <?php else: ?>
                              <span class="star empty">★</span>
                            <?php endif; ?>
                          <?php endfor; ?>
                        </div>
                      </div>
                      <p class="review-text"><?php echo esc_html($review['review']) ?></p>
                      <time class="review-date" datetime="<?php echo esc_attr($review['date']); ?>">
                        <?php echo date('F j, Y', strtotime($review['date'])); ?>
                      </time>
                    </div>
                  <?php endforeach; ?>
                <?php else: ?>
                  <p>No Review yet.</p>
                <?php endif; ?>    
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

<!-- Enrolled Button Click Handler -->
<script>
document.querySelectorAll('.enroll-btn').forEach(button => {
    button.addEventListener('click', function () {
        const courseId = this.getAttribute('data-course-id');
        const enrolledElement = document.querySelector('.enrolled span');

        fetch(ajax_object.ajaxurl, {
            method: 'POST',
            headers: {
                'Content-Type': 'application/x-www-form-urlencoded',
            },
            body: 'action=lessonlms_enroll_course&course_id=' + courseId
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                enrolledElement.textContent = data.data + ' enrolled students';
                this.textContent = 'Enrolled';
                this.disabled = true;
                alert('Enrolled Successfully');
            } else {
                if (data.data === 'Please Login to enroll') {
                    alert('Please Login First');
                    window.location.href = '<?php echo wp_login_url(get_permalink()) ?>'
                } else {
                    alert('Oops! Enrollment Failed: ' + data.data);
                }
            }
        })
        .catch(error => {
            console.error('Error:', error);
            alert('Please try again!');
        });
    });
});
</script>

<?php endwhile; ?>

<?php get_footer(); ?>