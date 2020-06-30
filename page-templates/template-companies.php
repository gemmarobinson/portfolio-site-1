<?php
	/* Template Name: Companies */
	get_header();
?>

<?php $image = get_field('background_image') ? get_field('background_image')['sizes']["2048x2048"] : ''; ?>
<div class="c-companies-hero h-bg-cover" style="background-image: url('<?php echo $image; ?>')">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-11 h-zindex-1">
                <span class="h-background-text slideInLeft wow c-companies-hero__background-text"><?php echo get_field('background_text'); ?></span>
                <h1 class="h-color-white mb-4"><?php echo get_field('page_title') ? get_field('page_title') : get_the_title() ; ?></h1>
                <span class="h-divider mb-4 fadeInLeft wow"></span>
                <p class="h-strong-text h-color-white h-width-440"><?php echo get_field('intro_text'); ?></p>
            </div>
        </div>
	</div>
	<div class="c-companies-hero__globe h-zindex-1">
        <?php echo get_inline_svg('globe-with-markers.svg'); ?>
	</div>
</div>

<div class="h-pb-7-8 h-bg-slope h-bg-slope--companies h-zindex-2 fadeIn wow">
	<div class="o-large-container">
		<div class="row justify-content-center px-xl-1">
			<div class="col-12 col-xl-11">
				<div class="h-bg-white h-box-shadow">
					<?php
						if( have_rows('companies') ):
							while ( have_rows('companies') ) : the_row();
								
								get_template_part( 'template-parts/company' );

							endwhile;
						endif;
					?>	
				</div>
			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>