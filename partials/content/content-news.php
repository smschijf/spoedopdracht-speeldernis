<?php
  if ( is_single() && get_post_type() == 'post' ):
    $id = get_the_ID();
    $newsTitle = get_field('related-title', 'nl');
    $newsLink = '';
    $categories = get_the_category();
    $newsCat = $categories[0]->term_id;

    $args = array(
      'posts_per_page'  => 3,
      'post_type'   => 'post',
      'post__not_in' => array($id),
      'cat' => $newsCat,
      'post_status' => 'publish',
      'orderby' => 'DESC'
    );

  else:

    $newsTitle = get_sub_field('news-title');
    $newsLink = get_sub_field('news-link');
    $newsCat = get_sub_field('news-category');

    if($newsCat != ''):
      $args = array(
        'posts_per_page'  => 3,
        'post_type'   => 'post',
        'cat' => $newsCat,
        'post_status' => 'publish',
        'orderby' => 'DESC'
      );
    endif;

  endif;
?>
<section class="grid-overview">
  <div class="container">
    <div class="grid-title">
        <h3><?php echo $newsTitle; ?></h3>
        <?php 
        if( $newsLink != '' ): 
            $link_url = $newsLink['url'];
            $link_title = $newsLink['title'];
            $link_target = $newsLink['target'] ? $newsLink['target'] : '_self';
          ?>
            <a href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
        <?php endif; ?>
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