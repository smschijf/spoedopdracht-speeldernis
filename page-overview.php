<?php 

	/* Template Name: Overzichtspagina */
  	
  	get_header();

  	if (have_posts()):
		while(have_posts()):
			
			the_post();
			
			include( locate_template( 'partials/general/page-grid.php', false, false ) );

  		endwhile;
	endif;
  	get_footer();
  	
?>