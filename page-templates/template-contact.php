<?php
	/* Template Name: Contact */
	get_header();
?>
<div class="c-contact">
    <div class="c-contact__map">
        <?php echo get_inline_svg('globe.svg'); ?>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12 px-sm-5 h-zindex-1">
                <span class="h-background-text c-contact__background-text"><?php echo first_word_split(get_field('background_text')); ?></span>
                <h1 class="h-color-white"><?php echo get_field('page_title'); ?></h1>
                <ul class="c-inline-list">
                    <li class="mb-2">
                        <a class="h-color-green h-weight-medium h-hover-white h-spaced-text" href="tel:<?php echo str_replace(' ', '', get_field('footer_telephone', 'options')); ?>">
                            <?php echo get_field('footer_telephone', 'options'); ?>
                        </a>
                    </li>
                    <li class="mb-2">
                        <a class="h-color-green h-weight-medium h-hover-white h-spaced-text" href="mailto:<?php echo get_field('footer_email', 'options'); ?>">
                            <?php echo get_field('footer_email', 'options'); ?>
                        </a>
                    </li>
                </ul>

                <?php echo do_shortcode(get_field('contact_form_shortcode')); ?>
            </div>
        </div>
    </div>
</div>



<?php get_footer(); ?>