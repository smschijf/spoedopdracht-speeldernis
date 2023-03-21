<?php
  $uspTitle = get_sub_field('usp-title');
?>
<section class="grid-overview">
  <div class="container">
    <div class="grid-title">
        <h4><?php echo $uspTitle; ?></h4>
    </div>
    
    <?php if( have_rows('usps') ): ?>

      <div class="grid">

        <?php while ( have_rows('usps') ) : the_row();

          include( locate_template( 'partials/content/card-usp.php', false, false ) );

        endwhile; ?>

      </div>

    <?php endif; ?>

  </div>
</section>