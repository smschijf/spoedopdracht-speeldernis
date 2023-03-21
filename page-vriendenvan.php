<?php 

	/* Template Name: Vriendenvan */
  	
  	get_header();

  	if (have_posts()):
		while(have_posts()):
			
			the_post();
			
			include( locate_template( 'partials/vriendenvan/header.php', false, false ) );
			include( locate_template( 'partials/vriendenvan/content.php', false, false ) );

  		endwhile;
	endif;
  	get_footer();
?>