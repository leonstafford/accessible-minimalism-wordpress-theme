<?php
/**
 * The category template file
 *
 * @package AccessibleMinimalism
 */

get_header();

$category = get_queried_object();


echo '<h2>' . get_cat_name( $category->term_id ) . '</h2>';

if ( have_posts() ) {
?>

<ul>

<?php

    // Load posts loop.
    while ( have_posts() ) {
        the_post();

?>
       <li> 
        <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
            <?php the_title('', ''); ?></a>

        <?php echo get_the_date(); ?>

        </li>

<?php 
    } // end posts loop
?>

</ul>

<?php
} else {

        echo "<h2>No content found</h2>";
 
        echo "<p>Put something here</p>";
        

}

get_footer();
