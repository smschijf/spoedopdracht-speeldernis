<?php
  $pageTitle = get_the_title();
  $pageCat = get_field('post-category');

  if($pageCat != ''):
    $args = array(
      'posts_per_page'  => -1,
      'post_type'   => 'post',
      'cat' => $pageCat,
      'post_status' => 'publish',
      'orderby' => 'DESC'
    );
  else:
    $args = array(
      'posts_per_page'  => -1,
      'post_type'   => 'post',
      'post_status' => 'publish',
      'orderby' => 'DESC'
    );
  endif;
?>
<section class="grid-overview">
  <div class="container">
    <div class="grid-title">
        <h3><?php echo $pageTitle; ?></h3>
    </div>

    <?php
      $the_query = new WP_Query( $args );
      
      if( $the_query->have_posts() ): ?>
        
        <div class="grid">
          <?php
            while( $the_query->have_posts() ) : $the_query->the_post();
              include( locate_template( 'partials/content/card-news.php', false, false ) );
            endwhile;
          ?>
        </div>

    <?php

      endif;
      wp_reset_query();

    ?>
  </div>
</section>