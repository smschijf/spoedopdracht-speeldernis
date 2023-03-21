<?php

if( have_rows('content') ):

   
    while ( have_rows('content') ) : the_row();


        if( get_row_layout() == 'news' ):
        	include(locate_template('/partials/content/content-news.php', false, false));
        endif;


    endwhile;

endif;

?>