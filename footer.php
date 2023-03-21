			<?php
				$ctaTitle = get_field('cta-title', 'nl');
				$ctaText = get_field('cta-text', 'nl');
			?>
			<section class="cta-bar">
				<div class="container">
					<?php if($ctaTitle != ''): ?><h4><?php echo $ctaTitle; ?></h4><?php endif; ?>
					<?php if($ctaText != ''): echo $ctaText; endif; ?>
				</div>
			</section>
			<footer>
				<div class="footer-top">
					<div class="container">
						<?php
							$navigationList = array(
								'footer_01', 'footer_02', 'footer_03'
							);
							foreach ($navigationList as $item):
								$menuName = get_term(get_nav_menu_locations()[$item], 'nav_menu')->name;
							?>
								<div class="column">
									<h4 class="menu-title"><?php echo $menuName; ?></h4>
									<?php
							          wp_nav_menu( array(
							              'theme_location' => $item,
							              'menu_class' => 'list-footer'
							          ) );
							        ?>		
								</div>
							<?php
							endforeach;
						?>
						<div class="column">
							<h4 class="menu-title tail">Nieuwsbrief</h4>
							<p>Schrijf je in voor spannende updates en nieuwe avonturen</p>
							<?php echo get_field('nieuwsbrief', 'nl'); ?>
						</div>
					</div>
				</div>
				<div class="footer-bottom">
					<div class="container">
						<p class="copy">Copyright &copy; <?php echo date('Y'); ?>, De Speeldernis</p>
					</div>
				</div>
			</footer>
		</div>
		<?php wp_footer(); ?>
    </body>
</html>