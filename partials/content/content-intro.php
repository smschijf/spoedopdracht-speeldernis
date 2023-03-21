<?php
	if ( is_single() && get_post_type() == 'post' ):
		$text = get_field('intro');
	else:
		$text = get_sub_field('intro');
	endif; 
	if($text != ''):
?>
<div class="content-inner intro">
	<p><?php echo $text; ?></p>
</div>
<?php endif; ?>