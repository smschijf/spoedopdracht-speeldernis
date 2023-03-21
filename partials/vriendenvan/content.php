<?php

if( have_rows('content') ):

   
    while ( have_rows('content') ) : the_row();


        if( get_row_layout() == 'news' ):
        	include(locate_template('/partials/content/content-news.php', false, false));
        elseif( get_row_layout() == 'usps' ):
        	include(locate_template('/partials/content/content-usps.php', false, false));
        elseif( get_row_layout() == 'text' ):
        	include(locate_template('/partials/vriendenvan/content-text.php', false, false));
        endif;


    endwhile; 

endif;

?>