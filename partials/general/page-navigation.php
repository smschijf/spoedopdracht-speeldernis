<?php
	$pageVriendenvan = get_field('navigation-vriendenvan', 'nl');
	$pageBoeknu 	 = get_field('navigation-book', 'nl');
	$pageTimes 		 = get_field('navigation-times', 'nl');
?>
<nav id="navigation">
	<!-- <div class="column column-vriend">
		<?php if($pageVriendenvan != ''):
			$link_url = $pageVriendenvan['url'];
            $link_title = $pageVriendenvan['title'];
            $link_target = $pageVriendenvan['target'] ? $pageVriendenvan['target'] : '_self';
		?>
			<a class="btn-vriendenvan" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>">
				<span class="readmore"><?php echo esc_html( $link_title ); ?></span>
			</a>
		<?php endif; ?>
	</div> -->
	
	<div class="column column-menu">
  <?php if($pageVriendenvan != ''):
			$link_url = $pageVriendenvan['url'];
            $link_title = $pageVriendenvan['title'];
            $link_target = $pageVriendenvan['target'] ? $pageVriendenvan['target'] : '_self';
		?>
			<a class="btn-vriendenvan" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>">
				<span class="readmore"><?php echo esc_html( $link_title ); ?></span>
			</a>
		<?php endif; ?>
		<?php
			if(has_nav_menu('header_02')):
	          wp_nav_menu( array(
	              'theme_location' => 'header_02',
	              'menu_class' => 'list-menu'
	          ) );
	        endif;
    	?>
    </div>
	<div class="nav-mobile">
		<div>
			<?php
				if(has_nav_menu('header_03')):
		          wp_nav_menu( array(
		              'theme_location' => 'header_03',
		              'menu_class' => 'list-menu',
		              'container' => false
		          ) );
		        endif;
	    	?>
	    	<?php
				if(has_nav_menu('header_03')):
		          wp_nav_menu( array(
		              'theme_location' => 'header_04',
		              'menu_class' => 'list-menu small',
		              'container' => false
		          ) );
		        endif;
	    	?>
	    </div>
	</div>
	<div class="menu-overlay">
		<div class="column">
			<?php
				if(has_nav_menu('overlay_01')):
					$menuName = get_term(get_nav_menu_locations()['overlay_01'], 'nav_menu')->name;
					?>
					<span class="menu-title"><?php echo $menuName; ?></span>
					<?php
					wp_nav_menu( array(
					  'theme_location' => 'overlay_01',
					  'menu_class' => 'list-menu-overlay'
					));
		        endif;
        	?>
		</div>
		<div class="column">
			<?php
				if(has_nav_menu('overlay_02')):
					$menuName = get_term(get_nav_menu_locations()['overlay_02'], 'nav_menu')->name;
					?>
					<span class="menu-title"><?php echo $menuName; ?></span>
					<?php
					wp_nav_menu( array(
					  'theme_location' => 'overlay_02',
					  'menu_class' => 'list-menu-overlay'
					));
		        endif;
        	?>
		</div>
		<div class="column">
			<?php
				if(has_nav_menu('overlay_03')):
					$menuName = get_term(get_nav_menu_locations()['overlay_03'], 'nav_menu')->name;
					?>
					<span class="menu-title"><?php echo $menuName; ?></span>
					<?php
					wp_nav_menu( array(
					  'theme_location' => 'overlay_03',
					  'menu_class' => 'list-menu-overlay'
					));
		        endif;
        	?>
		</div>
		<div class="column">
			<?php
				if(has_nav_menu('overlay_04')):
					$menuName = get_term(get_nav_menu_locations()['overlay_04'], 'nav_menu')->name;
					?>
					<span class="menu-title"><?php echo $menuName; ?></span>
					<?php
					wp_nav_menu( array(
					  'theme_location' => 'overlay_04',
					  'menu_class' => 'list-menu-overlay'
					));
		        endif;
        	?>
		</div>
	</div>
</nav>