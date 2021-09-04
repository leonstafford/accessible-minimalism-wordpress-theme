<?php
/**
 * Theme's functions file
 *
 * @package AccessibleMinimalism
 */

// disable unnecessary scripts from loading
function accessible_minimalism_deregister_scripts() : void {
    wp_dequeue_script( 'wp-embed' );
    wp_deregister_script( 'wp-embed' );
    wp_dequeue_script( 'comment-reply' );
    wp_deregister_script( 'comment-reply' );
}

add_action( 'wp_footer', 'accessible_minimalism_deregister_scripts' );

// disable all emoji related overhead
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');
remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
remove_action( 'admin_print_styles', 'print_emoji_styles' );

function accessible_minimalism_menu() {
  register_nav_menus(
    array(
      'accessible-menu' => __( 'Accessible Menu' ),
     )
   );
 }
 add_action( 'init', 'accessible_minimalism_menu' );

add_filter('nav_menu_item_id', 'accessible_minimalism_clear_nav_menu_item_id', 10, 3);

function accessible_minimalism_clear_nav_menu_item_id($id, $item, $args) {
    return '';
}

add_filter('nav_menu_css_class', 'accessible_minimalism_clear_nav_menu_item_class', 10, 3);

function accessible_minimalism_clear_nav_menu_item_class($classes, $item, $args) {
    return [];
}
