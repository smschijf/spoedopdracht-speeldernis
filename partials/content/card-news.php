<?php
	$cardTitle 		= get_the_title();
	$cardLink 		= get_the_permalink();
	$categories 	= get_the_category();
	$cardImage  	= get_the_post_thumbnail_url($id, 'large');	
	$cardSubtitle 	= esc_html( $categories[0]->name );
	$cardDate 		= get_the_date('d M. Y');
	$cardIntro		= get_field('intro'); 
?>
<div class="column">
	<a href="<?php echo $cardLink; ?>" class="item">
	  <figure class="item-image">
	  		<div class="item-image_background" style="background-image: url('<?php echo $cardImage; ?>');"></div>
	  	</figure>
	  <span class="item-subtitle"><?php echo $cardSubtitle; ?></span>
	  <h3 class="item-title"><?php echo $cardTitle; ?></h3>
	  <?php /*<span class="item-date"><?php echo $cardDate; ?></span>*/ ?>
	</a>
</div>