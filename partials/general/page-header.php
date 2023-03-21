<?php
	
	$id 			= get_the_ID();
	$headerTitle 	= get_the_title();
	$headerImage  	= get_the_post_thumbnail_url($id, 'cover');	

	if(get_post_type() != 'page'):
		$categories 	= get_the_category();
		$headerSubtitle = esc_html( $categories[0]->name );
		$headerDate 	= get_the_date('d M. Y');
	endif;

?>
 
<header>
		
	<?php if($headerImage != ''): ?>
		<div class="header-image-holder">
			<figure class="header-image" style="background-image:url('<?php echo $headerImage; ?>');"></figure>
		</div>
	<?php endif; ?>
	<div class="container">

		<div class="header-content">
			<?php if(isset($headerSubtitle) && $headerSubtitle != ''): ?>
				<span class="header-subtitle"><?php echo $headerSubtitle; ?></span>
			<?php endif; ?>
			
			<h1 class="header-title"><?php echo $headerTitle; ?></h1>
			
			<?php /* if(isset($headerDate) && $headerDate != ''): ?>
				<span class="header-date"><?php echo $headerDate; ?></span>
			<?php endif; */ ?>
		</div>

	</div>

</header>