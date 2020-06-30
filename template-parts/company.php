<?php
    $image = get_sub_field('featured_image');
    $alt = get_sub_field('featured_image')['alt'] ? get_sub_field('featured_image')['alt'] : get_sub_field('product_type');
?>
<div class="c-company js-company">
    <div class="d-md-flex align-items-lg-end">
        <div class="c-company__featured-image mb-4 mb-md-0">
            <img src="<?php echo $image['sizes']['medium']; ?>" alt="<?php echo $alt; ?>" />
        </div>
        <div class="flex-grow-1">
            <div class="d-lg-flex justify-content-lg-between align-items-lg-end">
                <div>
                    <?php 
                        $image = get_sub_field('logo'); 
                        $alt = get_sub_field('logo')['alt'] ? get_sub_field('logo')['alt'] : get_sub_field('company_name');
                    ?>
                    <a class="c-company__logo mb-3" href="<?php echo get_sub_field('website'); ?>" target="_blank" rel="noopener">
                        <img src="<?php echo $image['sizes']['medium']; ?>" alt="<?php echo $alt; ?>" />
                    </a>
                    <h2 class="mb-0 paragraph"><?php echo get_sub_field('company_name'); ?></h2>
                    <h3 class="mb-0 paragraph"><?php echo get_sub_field('product_type'); ?></h3>
                </div>
                <div class="text-lg-right d-flex d-lg-block align-items-center">
                    <?php 
                        $image = get_sub_field('country_flag'); 
                        $alt = get_sub_field('country_flag')['alt'] ? get_sub_field('country_flag')['alt'] : get_sub_field('country');
                    ?>
                    <img class="h-width-46 my-3" src="<?php echo $image['sizes']['medium']; ?>" alt="<?php echo $alt; ?>" />
                    <p class="mb-0"><?php echo get_sub_field('country'); ?>
                </div>
            </div>
            <a href="" class="js-company-more mt-lg-3 d-block h-color-blue h-hover-blue h-hover-nounderline">
                <span>More information</span> <i class="fal fa-plus-circle ml-1 h-large-text"></i>
            </a>
        </div>
    </div>
    <div class="c-company__dropdown js-company-dropdown">
        <div class="d-flex flex-column-reverse flex-xl-row align-flex-xl-start">
            <?php 
                $images = get_sub_field('gallery');
                if( $images ):
                    ?>
                    <ul class="c-small-gallery js-gallery mt-5 mt-xl-0">
                        <?php
                            foreach( $images as $image ): 
                                ?>
                                <li
                                    class="c-small-gallery__image"
                                    data-responsive="<?php echo $image['sizes']['medium_large']; ?> 768, <?php echo $image['sizes']['large']; ?> 1000, <?php echo $image['url']; ?> 1500" 
                                    data-src="<?php echo $image['url']; ?>"
                                >
                                    <span><i class="far fa-search-plus"></i></span>
                                    <img src="<?php echo $image['sizes']['thumbnail']; ?>" alt="<?php echo $image['alt']; ?>">
                                </li>
                                <?php 
                            endforeach; 
                        ?>
                    </ul>
                    <?php
                endif;
            ?>
            <div class="flex-grow-1">
                <h3 class="mb-2 pb-1">About</h3>
                <span class="h-divider h-divider--long mb-3"></span>
                <?php the_sub_field('about'); ?>
            </div>
        </div>
    </div>
</div>