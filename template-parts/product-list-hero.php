<?php $image = get_field('featured_image') ? get_field('featured_image')['sizes']["2048x2048"] : ''; ?>
<div class="c-products-hero h-bg-cover" style="background-image: url('<?php echo $image; ?>')">
    <?php
        if ( is_page() && $post->post_parent ) {
            ?>
            <div class="o-large-container">
                <div class="row">
                    <div class="col-12 position-relative">
                        <a 
                            href="<?php echo get_the_permalink($post->post_parent); ?>" 
                            class="c-products-hero__back-link h-zindex-1 h-color-green h-strong-text h-hover-white h-weight-bold"
                        >
                            <i class="fal fa-chevron-left"></i>
                            <?php echo get_the_title($post->post_parent); ?>
                        </a>
                    </div>
                </div>
            </div>
            <?php
        } 
    ?>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-11 h-zindex-1">
                <span class="h-background-text c-products-hero__background-text slideInLeft wow"><?php echo get_field('background_text'); ?></span>
                <h1 class="h-color-white mb-4"><?php echo get_field('page_title') ? get_field('page_title') : get_the_title() ; ?></h1>
            </div>
        </div>
    </div>
</div>