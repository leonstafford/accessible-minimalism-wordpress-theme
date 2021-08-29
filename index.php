<?php
/**
 * The main template file
 *
 * @package AccessibleMinimalism
 */

get_header();

if ( have_posts() ) {

    // Load posts loop.
    while ( have_posts() ) {
        the_post();

        <h2><?php the_title(); ?></h2>
 
        <?php the_content(); ?>
    }


} else {

        <h2>No content found</h2>
 
        <p>Put something here</p>

}

get_footer();
