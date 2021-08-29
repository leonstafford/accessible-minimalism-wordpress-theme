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

        echo "<h2>" . the_title() . "</h2>";
 
        the_content();
    }


} else {

        echo "<h2>No content found</h2>";
 
        echo "<p>Put something here</p>";
        

}

get_footer();
