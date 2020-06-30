<?php
	/* Template Name: About */
	get_header();
?>

<div class="c-about-hero">
	<div class="c-about-hero__background slideInLeft wow"></div>
	<div class="container">
		<div class="row justify-content-center">
            <div class="col-12 col-md-11">
                <h1 class="h-width-630 h-color-white mb-0"><?php echo last_word_green(get_field('page_title')); ?></h1>
                <span class="h-divider my-3 fadeInLeft wow"></span>
                <p class="h-strong-text h-color-white h-width-475"><?php echo get_field('page_intro'); ?></p>
            </div>
		</div>
	</div>
</div>

<div class="h-bg-slope h-pb-10-5">

	<div class="o-container-side h-zindex-1 mb-5">
		<div class="row">
			<div class="o-container-side__col-set c-white-block">
				<div class="h-icon-title c-white-block__title">
					<?php
                        $icon = get_field('what_title_icon');
                        if($icon) {
                            ?>
                            <span class="h-icon-title__icon fadeIn wow">
                                <?php echo get_inline_svg_url($icon); ?>
                            </span>
                            <?php
                        }
                    ?>
					<h2 class="mb-0"><?php echo get_field('what_title'); ?></h2>
					<span class="h-icon-title__line slideInLeft wow" data-wow-delay="0.8s"></span>
				</div>
				<div class="c-white-block__content">
					<h3 class="h2"><?php echo get_field('what_subtitle'); ?></h3>
					<?php the_field('what_text'); ?>
				</div>
				<?php 
					$link = get_field('what_button');
					if($link) {
						echo '<a href="'.$link['url'].'" class="c-btn mt-5" target="'.$link['target'].'">'.$link['title'].'</a>';
					}
				?>
			</div>
			<div class="o-container-side__col-large">
				<?php $image = get_field('what_image'); ?>
				<img class="h-image-cover" src="<?php echo $image['sizes']['large']; ?>" alt="<?php echo $image['alt']; ?>" />
			</div>
		</div>
	</div>

	<div class="o-large-container h-mt-10 mb-5">
		<div class="row justify-content-center">
			<div class="col-12 h-zindex-1">
				<span class="h-background-text slideInLeft wow"><?php echo get_field('figures_background_text'); ?></span>
				<div class="h-icon-title h-icon-title--inline my-5 pt-md-3">
					<?php
                        $icon = get_field('figures_title_icon');
                        if($icon) {
                            ?>
                            <span class="h-icon-title__icon fadeIn wow">
                                <?php echo get_inline_svg_url($icon); ?>
                            </span>
                            <?php
                        }
                    ?>
					<h2 class="mb-0"><?php echo get_field('figures_title'); ?></h2>
					<span class="h-icon-title__line slideInLeft wow" data-wow-delay="0.8s"></span>
				</div>
			</div>
			<?php
				if( have_rows('figures') ):
					while ( have_rows('figures') ) : the_row();
						?>
						<div class="col-12 col-md-6 col-xl-4 px-md-2">
							<div class="c-figures-block js-numbers">
								<span class="fadeIn slow wow align-self-start">
									<?php echo get_inline_svg_url(get_sub_field('icon')['url']); ?>
								</span>
								<h3 class="c-figures-block__number mb-0"><span class="js-value"><?php echo get_sub_field('number'); ?></span></h3>
								<span class="h-divider h-divider--white h-divider--small mt-1 mb-3"></span>
								<p class="h-strong-text mb-0"><?php echo get_sub_field('text'); ?></p>
							</div>
						</div>
						<?php
					endwhile;
				endif;
			?>
		</div>
	</div>


	<?php
		if( have_rows('content_blocks') ):
			$i = 1;
			while ( have_rows('content_blocks') ) : the_row();
				?>
				<div class="o-container-side <?php echo ($i%2 ? 'o-container-side--left' : ''); ?> h-mt-10-5 h-zindex-1">
					<div class="row">
						<div class="o-container-side__col-set c-white-block">
							<div class="h-icon-title c-white-block__title">
								<?php
									$icon = get_sub_field('title_icon');
									if($icon) {
										?>
										<span class="h-icon-title__icon fadeIn wow">
											<?php echo get_inline_svg_url($icon); ?>
										</span>
										<?php
									}
								?>
								<h2 class="mb-0"><?php echo get_sub_field('title'); ?></h2>
								<span class="h-icon-title__line slideInLeft wow" data-wow-delay="0.8s"></span>
							</div>
							<div class="c-white-block__content">
								<h3 class="h2"><?php echo get_sub_field('subtitle'); ?></h3>
								<?php the_sub_field('text'); ?>
							</div>
							<?php 
								$link = get_sub_field('button');
								if($link) {
									echo '<a href="'.$link['url'].'" class="c-btn mt-5" target="'.$link['target'].'">'.$link['title'].'</a>';
								}
							?>
						</div>
						<div class="o-container-side__col-large">
							<?php $image = get_sub_field('image'); ?>
							<img class="h-image-cover" src="<?php echo $image['sizes']['large']; ?>" alt="<?php echo $image['alt']; ?>" />
						</div>
					</div>
				</div>
				<?php
				$i++;
			endwhile;
		endif;
	?>

</div>

<?php get_footer(); ?>