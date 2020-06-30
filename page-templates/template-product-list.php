<?php
	/* Template Name: Product List */
	get_header();
?>

<?php get_template_part( 'template-parts/product-list-hero' ); ?>

<div class="o-large-container h-mb-10-5">
    <div class="row justify-content-center px-md-2">
        <?php
            $args = array(
                'post_type'      => 'page',
                'posts_per_page' => -1,
                'post_parent'    => $post->ID,
                'order'          => 'ASC',
                'orderby'        => 'menu_order'
            );


            $parent = new WP_Query( $args );

            if ( $parent->have_posts() ) :
                while ( $parent->have_posts() ) : $parent->the_post(); 
                    ?>
                    <div class="col-12 col-md-6 col-xl-4 px-md-2">
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

<?php get_footer(); ?>