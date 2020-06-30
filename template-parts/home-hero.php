<?php $image = get_field('background_image')['url']; ?>
<div class="c-home-hero" style="background-image: url('<?php echo $image; ?>'), url('<?php echo get_image_path('backgrounds/home-hero-overlay.svg'); ?>')">
    <span class="c-home-hero__background-text h-background-text h-background-text--green slideInLeft wow">
        <?php echo wrap_in_spans(get_field('background_text')); ?>
    </span>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 col-lg-6">
                <h1 class="h-width-330 h-color-white mb-0"><?php echo last_word_green(get_field('hero_title')); ?></h1>
                <span class="h-divider my-3 fadeInLeft wow"></span>
                <p class="h-strong-text h-color-white h-width-475"><?php echo get_field('hero_text'); ?></p>
            </div>
            <div class="col-12 col-lg-6 mt-5 mt-lg-0">
                <button class="js-play-video c-play-btn d-flex align-items-center justify-content-center flex-column flex-lg-row mx-auto mx-lg-0">
                    <?php echo get_inline_svg('play-icon.svg'); ?>
                    <span class="h-strong-text h-color-white d-block mt-3 mt-lg-0 ml-lg-3">Watch our video</span>
                </button>
                <div class="c-video-popup js-video-popup">
                    <div class="c-video-popup__video">
                        <?php 
                            $iframe = get_field('video'); 

                            // Use preg_match to find iframe src.
                            preg_match('/src="(.+?)"/', $iframe, $matches);
                            $src = $matches[1];
                        ?>
                        <iframe 
                            id="main-video" 
                            class="js-video-iframe"
                            src=""
                            data-source="<?php echo $src; ?>"
                            frameborder="0" 
                            allow="autoplay; fullscreen"
                            height="420"
                            allowfullscreen
                        ></iframe>
                    </div>
                    <div class="c-video-popup__close">
                        <i class="fal fa-times"></i>
                    </div>
                </div>
            </div>
            <div class="col-12 d-none d-lg-block">
                <a class="d-inline-flex align-items-end h-mt-7-2 h-overflow-hidden h-zindex-1" href="#anchor-start">
                    <span class="slideInDown wow" data-wow-delay="0.5s">
                        <?php echo get_inline_svg('explore-arrow.svg'); ?>
                    </span>
                    <span class="h-color-white pl-2 pb-1 h-weight-medium fadeIn wow" data-wow-delay="1s">Explore</a>
                </a>
            </div>
        </div>
    </div>
</div>