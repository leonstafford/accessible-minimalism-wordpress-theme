<?php
/**
 * The footer template file
 *
 * @package AccessibleMinimalism
 */
?>

<?php wp_footer(); ?>

<p><a name="nav-menu" id="nav-menu"><strong>Site menu</strong></a></p>

<?php

wp_nav_menu(
    [
        'theme_location' => 'accessible-menu',
        'container' => false,
        'container_class' => '',
        'container_id' => '',
        'menu_class' => '',
        'menu_id' => '',
    ]
);

?>

</body>
</html>
