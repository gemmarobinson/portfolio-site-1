		<footer class="c-footer">
			<div class="o-large-container">
				<div class="row no-gutters align-items-end">
					<div class="col-12 h-mb-5-2">
						<a href="<?php echo get_bloginfo('url'); ?>">
							<?php echo get_inline_svg('logo.svg'); ?>
						</a>
					</div>
					
					<div class="col-12 col-md-10 col-lg-8 col-xl-6">
						<?php
							wp_nav_menu([
								'menu'              => 'Footer Menu',
								'theme_location'    => 'Footer Menu',
								'container_class' 	=> 'c-footer-menu',
								'depth' 			=> 1,
								'walker' 			=> new SixthStory_Walker()
							]);
						?>
					</div>
					<div class="col-12 col-xl-6">
						<ul class="c-inline-list justify-content-xl-end mb-xl-3">
							<li>
								<a class="h-color-green h-weight-medium h-hover-white h-spaced-text" href="tel:<?php echo str_replace(' ', '', get_field('footer_telephone', 'options')); ?>">
									<?php echo get_field('footer_telephone', 'options'); ?>
								</a>
							</li>
							<li>
								<a class="h-color-green h-weight-medium h-hover-white h-spaced-text" href="mailto:<?php echo get_field('footer_email', 'options'); ?>">
									<?php echo get_field('footer_email', 'options'); ?>
								</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="row no-gutters pt-3 mt-3 mt-xl-0 h-border-top h-border-purple-navy flex-column-reverse flex-lg-row">
					<div class="col-12 col-lg-5 col-xl-4">
						<a class="h4 h-color-green h-hover-white" href="https://sixthstory.co.uk" rel="noopener" target="_blank">Website by Sixth Story</a>
					</div>
					<?php
						if( have_rows('legal_links', 'options') ):
							?>
							<div class="col-12 col-lg-7 col-xl-8 mb-4 mb-sm-3 mb-lg-0">
								<ul class="c-inline-list justify-content-xl-end mb-xl-3">
									<?php
										while ( have_rows('legal_links', 'options') ) : the_row();
											$link = get_sub_field('link');
											?>
											<li>
												<a class="h-color-green h-weight-medium h-hover-white h-spaced-text" href="<?php echo $link['url']; ?>" target="<?php echo $link['target']; ?>">
													<?php echo $link['title']; ?>
												</a>
											</li>
											<?php
										endwhile;
									?>
								</ul>
							</div>
							<?php
						endif;
					?>
				</div>
			</div>
		</footer>

		<?php wp_footer(); ?>
	</body>
</html>
