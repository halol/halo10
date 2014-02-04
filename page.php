<?php
/**
 * 
 */

get_header(); ?>



<?php
	// Start the Loop.
	while ( have_posts() ) : the_post();

?>

<?php
$slug = the_slug($echo=false);
if ( $slug != "work") {
 	
} else {
?>
<header role="header">
<div class="row">
    <div class="col-lg-7">
        <div class="page-header">
          <h1><?php the_title(); ?></h1>
        </div>
    </div>
</div>
</header>
<?php
}
?>
<div class="row" role="container"> 
	<div class="col-lg-6 col-md-6 col-sm-6" role="<?php the_slug(); ?>">
		<?php
			the_profile(the_slug($echo=false));
		?>
		<?php the_content(); ?>
	</div>
</div>
		
		
		
<?php
		// If comments are open or we have at least one comment, load up the comment template.
		/* Comments disabled for a while

		if ( comments_open() || get_comments_number() ) {
			comments_template();
		} */
	endwhile;

get_footer();
