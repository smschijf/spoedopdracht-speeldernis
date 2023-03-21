<?php
	$headerSideSubtitle = get_field('header-subtitle');
	$headerSideTitle 	= get_field('header-title');
	$headerSideText 	= get_field('header-text');
	$headerSideLink 	= get_field('header-link');
	$headerSideLink2 	= get_field('header-link2');
	$headerSideLink3 	= get_field('header-link3');
?>
 
<header class="header-vriendenvan">
	<div class="container">
		<div class="header-vriendenvan-content">
			<?php if($headerSideSubtitle != ''): ?><p class="header-vriendenvan-subtitle"><?php echo $headerSideSubtitle; ?></p><?php endif; ?>
			<?php if($headerSideTitle != ''): ?><h3 class="header-vriendenvan-title"><?php echo $headerSideTitle; ?></h3><?php endif; ?>
			<?php if($headerSideText != ''): ?><p><?php echo $headerSideText; ?></p><?php endif; ?>
			<div class="btn-holder">
				<?php if( $headerSideLink != '' ): 
		            $link_url = $headerSideLink['url'];
		            $link_title = $headerSideLink['title'];
		            $link_target = $headerSideLink['target'] ? $headerSideLink['target'] : '_self';
		          ?>
		            <a class="btn" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
		        <?php endif; ?>

		        <?php if( $headerSideLink2 != '' ): 
		            $link_url = $headerSideLink2['url'];
		            $link_title = $headerSideLink2['title'];
		            $link_target = $headerSideLink2['target'] ? $headerSideLink2['target'] : '_self';
		          ?>
		            <a class="btn" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
		        <?php endif; ?>

		        <?php if( $headerSideLink3 != '' ): 
		            $link_url = $headerSideLink3['url'];
		            $link_title = $headerSideLink3['title'];
		            $link_target = $headerSideLink3['target'] ? $headerSideLink3['target'] : '_self';
		          ?>
		            <a class="btn" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
		        <?php endif; ?>
			</div>
		</div>
	</div>
</header>