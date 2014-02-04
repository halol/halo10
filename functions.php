<?php
// rmove admin bar
add_filter('show_admin_bar', '__return_false');


function register_my_menus() {
  register_nav_menus(
    array(
      'main-menu' => __( 'Main Menu' ),
      'work-menu' => __( 'Work Menu' )
    )
  );
}
add_action( 'init', 'register_my_menus' );