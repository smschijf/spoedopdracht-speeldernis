<?php 
	
	/* Template Name: Full width */
  	
  	get_header();

  	if (have_posts()):
		while(have_posts()):
			
			the_post();
			
			include( locate_template( 'partials/general/page-header.php', false, false ) );
			include( locate_template( 'partials/general/page-content.php', false, false ) );

  		endwhile;
	endif;
  	get_footer();
?>