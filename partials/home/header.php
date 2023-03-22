<?php
	$id 			= get_the_ID();
	$headerImage  	= get_the_post_thumbnail_url($id, 'cover');	

	$headerSubtitle = get_field('header-subtitle');
	$headerTitle 	= get_field('header-title');
	$headerLink 	= get_field('header-link');

	$headerSideSubtitle = get_field('header-side-subtitle');
	$headerSideTitle 	= get_field('header-side-title');
	$headerSideText 	= get_field('header-side-text');
	$headerSideLink 	= get_field('header-side-link');
	$headerSideLink2 	= get_field('header-side-link2');
?>
 
<header>
	<div class="header-image" style="background-image: url('<?php echo $headerImage; ?>');">
		<div class="header-content">
			<?php if($headerSubtitle != ''): ?><p class="header-subtitle"><?php echo $headerSubtitle; ?></p><?php endif; ?>
			<?php if($headerTitle != ''): ?><h3 class="header-title"><?php echo $headerTitle; ?></h3><?php endif; ?>
			<!-- TYGO'S WERK -->
			<p>
				Sample text Sample text Sample text Sample text <br>
				Sample text Sample text Sample text Sample text <br>
				Sample text Sample text Sample text Sample text 
			</p>

			<a class="header-button btn" href="#">
				Boek je feestje!
			</a>
			<!-- TYGO'S WERK -->
			<?php if( $headerLink != '' ): 
	            $link_url = $headerLink['url'];
	            $link_title = $headerLink['title'];
	            $link_target = $headerLink['target'] ? $headerLink['target'] : '_self';
	          ?>
	            <a class="btn" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
	        <?php endif; ?>
		</div>
	</div>
	<div class="header-vriendenvan">
		<div class="header-vriendenvan-content">
			<?php if($headerSideSubtitle != ''): ?><p class="header-vriendenvan-subtitle"><?php echo $headerSideSubtitle; ?></p><?php endif; ?>
			<?php if($headerSideTitle != ''): ?><h3 class="header-vriendenvan-title"><?php echo $headerSideTitle; ?></h3><?php endif; ?>
			<?php if($headerSideText != ''): ?><p><?php echo $headerSideText; ?></p><?php endif; ?>
			<!-- TYGO'S WERK -->
			<p>Alle openings tijden <span style="text-decoration: underline;">bekijken</span></p>
			<h3 style="margin-top: 100px;">Activiteiten</h3>
			<!-- TYGO'S WERK -->
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
				<!-- TYGO'S WERK -->
				<a class="btn" href="#" target="_self">Schoolreisje</a>
				<a class="btn" href="#" target="_self">BSO of groep</a>
				<!-- TYGO'S WERK -->
			</div>
			<!-- TYGO'S WERK -->
			<p>Alle activiteiten <span style="text-decoration: underline;">bekijken</span></p>
			<!-- TYGO'S WERK -->
		</div>
	</div>
</header>