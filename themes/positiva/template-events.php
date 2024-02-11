<?php
/*Template Name: events*/

$events_query = new WP_Query(array(
   'post_type' => 'events'
)); ?>
<?php while ($events_query->have_posts()) : $events_query->the_post(); ?>
   <?php endwhile;
wp_reset_postdata(); // Important to reset the global post data
get_footer();



