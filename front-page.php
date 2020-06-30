<?php get_header(); ?>

<?php get_template_part( 'template-parts/home-hero' ); ?>

<div id="anchor-start">
    <div class="o-container-side">
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
</div>

<div class="o-large-container h-mt-10">
    <div class="row">
        <div class="col-12 h-zindex-1">
            <span class="h-background-text slideInLeft wow"><?php echo get_field('values_background_text'); ?></span>
            <div class="h-icon-title h-icon-title--inline my-5 pt-md-3">
                <?php
                    $icon = get_field('values_title_icon');
                    if($icon) {
                        ?>
                        <span class="h-icon-title__icon fadeIn wow">
                            <?php echo get_inline_svg_url($icon); ?>
                        </span>
                        <?php
                    }
                ?>
                <h2 class="mb-0"><?php echo get_field('values_title'); ?></h2>
                <span class="h-icon-title__line slideInLeft wow" data-wow-delay="0.8s"></span>
            </div>
            <?php
                if( have_rows('values') ):
                    echo '<div class="c-cards c-cards--raised">';
                        while ( have_rows('values') ) : the_row();
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
                endif;
            ?>
        </div>
    </div>
</div>

<div class="c-white-angle-section">
    <div class="o-large-container">
        <div class="row">
            <div class="col-12 h-zindex-1">
                <div class="h-icon-title h-icon-title--inline mb-5">
                    <?php
                        $icon = get_field('featured_products_title_icon');
                        if($icon) {
                            ?>
                            <span class="h-icon-title__icon fadeIn wow">
                                <?php echo get_inline_svg_url($icon); ?>
                            </span>
                            <?php
                        }
                    ?>
                    <h2 class="mb-0"><?php echo get_field('featured_products_title'); ?></h2>
                    <span class="h-icon-title__line slideInLeft wow" data-wow-delay="0.8s"></span>
                </div>
            </div>
        </div>
        <div class="row justify-content-center mx-md-n2">
            <?php
                $ids = get_field('featured_products', false, false);
                $args = array(
                    'post_type'      => 'page',
                    'posts_per_page' => 6,
                    'post__in'		 => $ids,
                    'order'          => 'ASC',
                    'orderby'        => 'menu_order'
                );
                $query = new WP_Query( $args );

                if ( $query->have_posts() ) :
                    while ( $query->have_posts() ) : $query->the_post(); 
                        ?>
                        <div class="col-12 col-md-6 col-xl-4 px-md-2 h-zindex-1">
                            <div class="c-product-card js-product-card">
                                <div class="c-product-card__image">
                                    <?php 
                                        $image = get_field('featured_image');
                                        $alt = $image['alt'] ? $image['alt'] : get_the_title();

                                        if($image) {
                                            echo '<img src="'.$image['sizes']["medium_large"].'" alt="'.$alt.'" />';
                                        }
                                    ?>
                                </div>
                                <div class="c-product-card__content">
                                    <h2 class="h3"><?php echo get_the_title(); ?></h2>
                                    <a href="<?php echo get_the_permalink(); ?>" class="c-btn">View</a>
                                </div>
                            </div>
                        </div>
                        <?php 
                    endwhile; 
                endif; wp_reset_postdata(); 
            ?>
        </div>
    </div>
</div>

<div class="h-bg-white h-pb-11-8 h-pt-10-8">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center mb-5 mt-3 mt-md-0 mb-md-0 h-zindex-1">
                <span class="h-background-text slideInLeft wow"><?php echo get_field('contact_background_text'); ?></span>
                <div class="h-icon-title h-icon-title--column my-4">
                    <span class="h-icon-title__icon fadeIn wow">
                        <?php echo get_inline_svg_url(get_field('contact_title_icon')); ?>
                    </span>
                    <h2 class="pt-2 mb-0"><?php echo get_field('contact_title'); ?></h2>
                    <span class="h-icon-title__line"></span>
                </div>
                <?php 
                    $link = get_field('contact_button');
                    echo '<a href="'.$link['url'].'" class="c-btn" target="'.$link['target'].'">'.$link['title'].'</a>';
                ?>
            </div>
        </div>
    </div>
</div>


<?php get_footer(); ?>