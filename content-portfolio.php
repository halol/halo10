<?php
/* Template name: Portfolio Home page */

get_header(); ?>



<?php
	// Start the Loop.
	while ( have_posts() ) : the_post();

?>

<?php the_content(); ?>



<?php
		// If comments are open or we have at least one comment, load up the comment template.
		/* Comments disabled for a while

		if ( comments_open() || get_comments_number() ) {
			comments_template();
		} */
	endwhile;

get_footer();