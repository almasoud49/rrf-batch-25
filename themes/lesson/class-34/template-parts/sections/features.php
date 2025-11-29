<?php 
$features_title = get_theme_mod('features_title','Learner outcomes through our awesome platform');

$features_description_one = get_theme_mod('features_description_one','87% of people learning for professional development report career benefits like getting a promotion, a raise, or starting a new career.');

$features_description_two = get_theme_mod('features_description_two','Lesson Impact Report (2025)');

$features_btn_text = get_theme_mod('features_button_text','Sign Up');
$features_btn_url = get_theme_mod('features_button_url','#');

$features_image_one = get_theme_mod('features_image_one',get_template_directory_uri() . '/assets/images/features-img-1.png');

$features_image_two = get_theme_mod('features_image_two',get_template_directory_uri() . '/assets/images/features-img-2.png');


?>

<section class="features">
            <div class="container">
                <div class="features-wrapper">
                    <!----- img box ----->
                    <div class="features-img">

                        <?php if($features_image_one): ?>
                        <img class="img-1" src="<?php echo esc_url($features_image_one) ?>" alt="">                        
                        <?php endif; ?>

                        <?php if($features_image_two): ?>
                        <img class="img-2" src="<?php echo esc_url($features_image_two) ?>" alt="">
                        <?php endif; ?>
                    </div>

                    <!----- text box ----->
                    <div class="features-text">
                        <?php if($features_title) :?>
                        <h3> <?php  echo esc_html($features_title);?></h3>
                        <?php endif; ?>

                        <?php if($features_description_one): ?>
                        <p><?php echo esc_html($features_description_one); ?></p>
                        <?php endif; ?>

                        <?php if($features_description_two): ?>
                        <span><?php echo esc_html($features_description_two); ?></span>
                        <?php endif; ?>

                        <div class="yellow-bg-btn sign-up">
                            <a 
                            <?php if($features_btn_text): ?>
                            href="<?php echo esc_url($features_btn_url); ?>">
                            <?php endif ?>

                            <?php if($features_btn_url): ?>
                            <?php echo esc_html($features_btn_text); ?>
                            <?php endif; ?>
                            </a>
                        </div>

                    </div>
                </div>
            </div>
        </section>