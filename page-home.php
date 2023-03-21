<?php 

	/* Template Name: Home */
  	
  	get_header();

  	if (have_posts()):
		while(have_posts()):
			
			the_post();
			
			include( locate_template( 'partials/home/header.php', false, false ) );
			include( locate_template( 'partials/home/content.php', false, false ) );

  		endwhile;
	endif;
  	get_footer();
?>