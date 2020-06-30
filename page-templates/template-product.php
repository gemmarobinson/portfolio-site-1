<?php
	/* Template Name: Product */
	get_header();
?>

<?php get_template_part( 'template-parts/product-hero' ); ?>

<div class="o-container-side o-container-side--left h-zindex-1">
    <div class="row">
        <div class="o-container-side__col-set c-white-block">
            <div class="h-icon-title c-white-block__title">
                <?php
                    $icon = get_field('about_title_icon');
                    if($icon) {
                        ?>
                        <span class="h-icon-title__icon fadeIn wow">
                            <?php echo get_inline_svg_url($icon); ?>
                        </span>
                        <?php
                    }
                ?>
                <h2 class="mb-0"><?php echo get_field('about_title'); ?></h2>
                <span class="h-icon-title__line slideInLeft wow" data-wow-delay="0.8s"></span>
            </div>
            <div class="c-white-block__content">
                <h3 class="h2"><?php echo get_field('about_subtitle'); ?></h3>
                <?php the_field('about_text'); ?>
            </div>
            <?php 
                $link = get_field('about_button');
                if($link) {
                    echo '<a href="'.$link['url'].'" class="c-btn mt-5" target="'.$link['target'].'">'.$link['title'].'</a>';
                }
            ?>
        </div>
        <div class="o-container-side__col-large">
            <?php $image = get_field('about_image'); ?>
            <img class="h-image-cover" src="<?php echo $image['sizes']['large']; ?>" alt="<?php echo $image['alt']; ?>" />
        </div>
    </div>
</div>

<?php
    if( have_rows('features') ): 
        ?>
        <div class="h-bg-slope h-pt-10 mt-5 mt-lg-0">
            <div class="o-large-container">
                <div class="row">
                    <div class="col-12 h-zindex-1">
                        <div class="h-icon-title h-icon-title--center mb-5">
                            <?php
                                $icon = get_field('features_title_icon');
                                if($icon) {
                                    ?>
                                    <span class="h-icon-title__icon fadeIn wow">
                                        <?php echo get_inline_svg_url($icon); ?>
                                    </span>
                                    <?php
                                }
                            ?>
                            <h2 class="mb-0"><?php echo get_field('features_title'); ?></h2>
                            <span class="h-icon-title__line fadeInLeft wow" data-wow-delay="0.8s"></span>
                        </div>
                        <?php
                            echo '<div class="c-cards">';
                                while ( have_rows('features') ) : the_row();
                                    ?>
                                    <div class="c-cards__single">
                                        <span class="fadeIn slow wow">
                                            <?php echo get_inline_svg_url(get_sub_field('icon')); ?>
                                        </span>
                                        <h3 class="my-3"><?php echo get_sub_field('title'); ?></h3>
                                        <p class="mb-0"><?php echo get_sub_field('text'); ?></p>
                                    </div>
                                    <?php
                                endwhile;
                            echo '</div>';
                        ?>
                    </div>
                </div>
            </div>
        </div>
        <?php
    endif;
?>

<?php
    if( have_rows('companies') ):
        ?>
        <div class="h-bg-medium-gray">
            <div class="container">
                <div class="row">
                    <div class="col-12 h-my-7-8">
                        <div class="h-icon-title h-icon-title--center mb-2">
                            <?php
                                $icon = get_field('companies_title_icon');
                                if($icon) {
                                    ?>
                                    <span class="h-icon-title__icon fadeIn wow">
                                        <?php echo get_inline_svg_url($icon); ?>
                                    </span>
                                    <?php
                                }
                            ?>
                            <h2 class="mb-0"><?php echo get_field('companies_title'); ?></h2>
                            <span class="h-icon-title__line fadeInLeft wow" data-wow-delay="0.8s"></span>
                        </div>
                        <div class="c-companies">
                            <?php
                                $i = 0;
                                while ( have_rows('companies') ) : the_row();
                                    ?>
                                    <div class="c-companies__single fadeIn wow" data-wow-delay="<?php echo $i*0.3; ?>s">
                                        <?php
                                            $website = get_sub_field('link');
                                            if($website) {
                                                echo '<a href="'.$website.'" target="_blank" rel="noopener">';
                                            }
                                        ?>
                                        <img src="<?php echo get_sub_field('logo')['sizes']['medium']; ?>" alt="" />
                                        <?php
                                            if($website) {
                                                echo '</a>';
                                            }
                                        ?>
                                    </div>
                                    <?php
                                    $i++;
                                endwhile;
                            ?>     
                        </div>          
                    </div>
                </div>
            </div>
        </div>
        <?php
    endif;
?>

<?php 
    $images = get_field('gallery');
    if( $images ):
        ?>
        <div class="h-bg-medium-gray h-pb-11-8">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="h-icon-title h-icon-title--center mb-3">
                            <?php
                                $icon = get_field('gallery_title_icon');
                                if($icon) {
                                    ?>
                                    <span class="h-icon-title__icon fadeIn wow">
                                        <?php echo get_inline_svg_url($icon); ?>
                                    </span>
                                    <?php
                                }
                            ?>
                            <h2 class="mb-0"><?php echo get_field('gallery_title'); ?></h2>
                            <span class="h-icon-title__line fadeInLeft wow" data-wow-delay="0.8s"></span>
                        </div>
                        <ul class="c-gallery js-gallery">
                            <?php
                                $i = 0;
                                foreach( $images as $image ): 
                                    ?>
                                    <li
                                        class="c-gallery__image zoomIn wow" 
                                        data-wow-delay="<?php echo $i*0.3; ?>s"
                                        data-responsive="<?php echo $image['sizes']['medium_large']; ?> 768, <?php echo $image['sizes']['large']; ?> 1000, <?php echo $image['url']; ?> 1500" 
                                        data-src="<?php echo $image['url']; ?>"
                                    >
                                        <span><i class="far fa-search-plus"></i></span>
                                        <img src="<?php echo $image['sizes']['medium_large']; ?>" alt="<?php echo $image['alt']; ?>">
                                    </li>
                                    <?php 
                                    $i++;
                                endforeach; 
                            ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <?php
    endif; 
?>

<?php
    if ( is_page() && $post->post_parent ) {
        ?>
        <div class="h-bg-medium-gray d-lg-none">
            <div class="container">
                <div class="row">
                    <div class="col-12 position-relative text-center mb-5">
                        <a 
                            href="<?php echo get_the_permalink($post->post_parent); ?>" 
                            class="h-zindex-1 h-color-green h-strong-text h-hover-white h-weight-bold"
                        >
                            <i class="fal fa-chevron-left"></i>
                            Back to <?php echo get_the_title($post->post_parent); ?>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <?php
    } 
?>

<?php get_footer(); ?>