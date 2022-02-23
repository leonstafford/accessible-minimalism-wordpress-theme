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

        if (  ! is_home() || ! is_front_page() ) ) {
          the_title('<h2>', '</h2>');
        }
 
        the_content();
    }


} else {

        echo "<h2>No content found</h2>";
 
        echo "<p>Put something here</p>";
        

}

get_footer();
