<?php

get_header(); ?>

<?php
    while(have_posts()) {
        the_post(); ?>

        <div><?php the_title() ?> 
        <h3><?php the_content(); ?></h3>
         </div>

 <?php   }


 get_footer();

?>