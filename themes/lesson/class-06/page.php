<?php
get_header();

?>
<section class="container">
<?php 
if(have_posts()) :
    while(have_posts()): the_post();
    the_title();
    endwhile;
endif;
?>
</section>

<?php

get_footer();