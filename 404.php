<?php get_header(); ?>

<?php $image = get_field('404_background_image', 'options') ? get_field('404_background_image', 'options')['sizes']["2048x2048"] : ''; ?>
<div class="c-four-oh-four h-bg-cover" style="background-image: url('<?php echo $image; ?>')">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-11 h-zindex-1">
                <span class="h-background-text slideInLeft wow c-four-oh-four__background-text"><?php echo get_field('404_background_text', 'options'); ?></span>
                <h1 class="h-color-white mb-4"><?php echo get_field('404_page_title', 'options'); ?></h1>
                <span class="h-divider mb-4 fadeInLeft wow"></span>
                <p class="h-strong-text h-color-white h-width-475 mb-5"><?php echo get_field('404_text', 'options'); ?></p>
                <?php
                    $links = get_field('links', 'options');
                    if($links) {
                        foreach($links as $link) {
                            echo '<a href="'.get_the_permalink($link).'" class="c-btn mr-3 mb-3">'.get_the_title($link).'</a>';
                        }
                    }
                ?>
            </div>
        </div>
	</div>
	<div class="c-four-oh-four__globe h-zindex-1">
        <?php echo get_inline_svg('globe-with-markers.svg'); ?>
	</div>
</div>

<?php get_footer(); ?>