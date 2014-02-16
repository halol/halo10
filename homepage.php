<?php
/*
* Template name: Clear Homepage
*/

get_header();
?>
<img src="<?php echo get_template_directory_uri(); ?>/img/halo10.png" style="display: none;">
<section class="welcome">
<div class="container">
<div class="row">
	<div class="col-lg-8 col-lg-offset-2">
		<img  src="<?php echo get_template_directory_uri(); ?>/img/halo10_red.svg">

		<?php if ( have_posts() ) {
		// Start the Loop.
		while ( have_posts() ) : the_post(); {
			the_content();
		} endwhile;
	
		} else {
			// If no content, include the "No posts found" template.
		}


	?>
		
	</div>
</div>
	
</div>
</section>

<?php
get_footer();

