<?php
	$cardImage 		= get_sub_field('image');
	$cardImageUrl   = $cardImage['sizes']['large'];
	$cardTitle 		= get_sub_field('title');
	$cardText 		= get_sub_field('text');
?>
<div class="column">
	<div class="item">
	  <?php if($cardImageUrl != ''): ?>
	  	<figure class="item-image">
	  		<div class="item-image_background" style="background-image: url('<?php echo $cardImageUrl; ?>');"></div>
	  	</figure>
	  <?php endif; ?>
	  <h3 class="item-title"><?php echo $cardTitle; ?></h3>
	  <p class="item-intro"><?php echo $cardText; ?></p>
	</div>
</div>