<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme and one
 * of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query,
 * e.g., it puts together the home page when no home.php file exists.
 *
 * @link http://www.hadala.pl
 *
 * @package Halo
 * @subpackage Halo10
 */

get_header(); 
?>



<?php
if ( have_posts() ) :
	// Start the Loop.
	while ( have_posts() ) : the_post();
?>		
<div class="row" role="container">
	<div class="col-lg-6 col-lg-offset-1 col-md-8 col-md-offset-2">
        <div class="panel" role="post">
            <div class="panel-timing">
                <span class="day-number"><?php the_time('d'); ?></span>

                <span class="month-year"><?php the_date('m/Y'); ?></span>
                   
               
            </div>
            <div class="panel-heading">
                <h2><?php the_title(); ?></h2>
                
            </div>
            <div class="panel-body">
            <?php
			// Must be inside a loop.

			if ( has_post_thumbnail() ) {
				
				?>
				<div class="post-image">
                    <div class="caption"><?php the_title(); ?></div>
                    <?php the_post_thumbnail(); ?>
                </div>
            <?php
			}
			else {
				
			}
			?>
                
                <div class="summary">
                   <?php the_content(); ?>
                </div>
            </div>
            <!-- Disabled for a while
            <div class="panel-footer">
               <a href="" class="btn btn-xs btn-default pull-left">Comments (0)</a>
               <a href="" class="btn btn-xs btn-default pull-left"><i class="fa fa-heart fa-fw"></i> 1</a>
                <a href="" class="btn btn-xs btn-success pull-right">View</a>
            </div>
            -->
            <hr>
        </div>
    </div>

	
	
	
</div>
		
<?php
	endwhile;
	// Previous/next post navigation.
	

else :
	// If no content, include the "No posts found" template.
	?>
<h2><i class="fa fa-meh-o"></i></h2>
<?php

endif;






get_footer();
