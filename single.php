<?php
/**
 * The single post template file
 *
 * @package AccessibleMinimalism
 */

get_header();

$category = get_queried_object();

echo get_cat_name( $category->term_id );

if ( have_posts() ) {
?>

<?php

    // Load posts loop.
    while ( have_posts() ) {
        the_post();

        the_title('<h2>', '</h2>');

        ?>

        <p><i>published by <?php the_author(); ?> on <?php echo get_the_date(); ?></i></p>
       
        <?php 
          
 
        the_content();
    } // end posts loop
?>

<?php
} else {

        echo "<h2>No content found</h2>";
 
        echo "<p>Put something here</p>";
        

}

get_footer();
