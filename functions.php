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
add_theme_support( 'post-thumbnails' ); 




// Slug
function the_slug($echo=true){
	$slug = basename(get_permalink());
	do_action('before_slug', $slug);
	$slug = apply_filters('slug_filter', $slug);
	if( $echo ) echo $slug;
	do_action('after_slug', $slug);
	return $slug;
}	

function the_profile($slug) {
	if ($slug == "about") {
		echo '<img class="img-circle pull-right profile hidden-xs hidden-sm" src="https://pl.gravatar.com/userimage/15898132/675fc21b6b8f110c804355c80e9f8f5c.jpg?size=400" alt="">';
	}
}