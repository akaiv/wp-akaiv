<?php
get_header();
akaiv_before_main();

while ( have_posts() ) : the_post();
  get_template_part( 'templates/content' );
  akaiv_post_navigation();
endwhile;

akaiv_after_main();
get_footer();
