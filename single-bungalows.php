<?php get_header(); ?>

<main class="site-content single-bungalow-page">

    <section class="hero-slider-row show-on-scroll slide-up" style="transition-delay: 0.2s;">

        <div class="gallery-outside-wrap">
            <style>
                .hero-slider-row .gallery-section {
                    position: relative;
                    overflow: hidden;
                }

                /* Define the keyframes for the animation */
                @keyframes slideTop {
                    from {
                        transform: translateY(0);
                        /* Start above the element */
                    }

                    to {
                        transform: translateY(100%);
                        /* End in place */
                    }
                }

                .hero-slider-row .gallery-wrapper {
                    width: 100%;
                    height: 100%;
                    background: #F4F4ED !important;
                }


                .hero-slider-row .swiper-slide.swiper-slide-active {
                    width: 15% !important;
                    height: 630px;
                    transition: all .5s ease-in-out;
                }

                .hero-slider-row .swiper-slide.swiper-slide-next {
                    width: 70% !important;
                    height: 630px;
                    transition: all .5s ease-in-out;
                }

                .hero-slider-row .swiper-button-next,
                .swiper-button-prev {
                    position: absolute;
                    top: var(--swiper-navigation-top-offset, 40%);
                    width: calc(var(--swiper-navigation-size)/ 44 * 27);
                    height: var(--swiper-navigation-size);
                    margin-top: calc(0px - (var(--swiper-navigation-size)/ 2));
                    z-index: 10;
                    cursor: pointer;
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    color: var(--swiper-navigation-color, var(--swiper-theme-color));
                    transition: all .3s ease-in-out;
                }

                .swiper-button-next:hover,
                .swiper-button-prev:hover {
                    background: #ffffff36;
                }

                .hero-slider-row .gallery-wrapper::before {
                    content: '';
                    position: absolute;
                    width: 100%;
                    height: 100%;
                    left: 0;
                    top: 0;
                    background: linear-gradient(180deg, rgba(30, 30, 30, 0.41778718323266806) 0%, rgba(30, 30, 30, 0) 100%);
                }

                .hero-slider-row .mid-container {
                    width: 100%;
                    padding: 0;
                    max-width: unset;
                }

                .hero-slider-row .swiper-slide {
                    width: 100%;
                    height: 630px;
                }

                .hero-slider-row .swiper-button-prev::after,
                .hero-slider-row .swiper-rtl .swiper-button-next::after {
                    content: 'prev';
                    font-size: 11px !important;
                    color: #FFF !important;
                    left: 36px !important;
                    top: 77px !important;
                    position: absolute !important;
                }

                .hero-slider-row .swiper-button-prev::before,
                .hero-slider-row .swiper-rtl .swiper-button-next::before {
                    content: unset !important;
                }

                .hero-slider-row .swiper-button-next::after,
                .hero-slider-row .swiper-rtl .swiper-button-prev::after {
                    content: 'next' !important;
                    font-size: 11px !important;
                    right: 54px;
                    top: 77px !important;
                    color: #fff !important;
                    position: absolute !important;
                }

                .hero-slider-row .swiper-button-next::before,
                .hero-slider-row .swiper-rtl .swiper-button-prev::before {
                    content: unset !important;
                }

                .hero-slider-row .swiper-button-next,
                .hero-slider-row .swiper-button-prev {
                    border: 1px solid;
                    border-radius: 50%;
                    width: 170px;
                    height: 170px;
                    color: #FFF !important;
                }

                @media screen and (max-width:1024px) {
                    .hero-slider-row {
                        height: 430px !important;
                        position: relative;
                    }

                    .swiper-slide {
                        height: 430px;
                    }

                    .swiper-slide.swiper-slide-active {
                        width: 15% !important;
                        height: 430px;
                        transition: all .5s ease-in-out;
                    }

                    .swiper-slide.swiper-slide-next {
                        width: 70% !important;
                        height: 430px;
                        transition: all .5s ease-in-out;
                    }

                    .swiper-button-next,
                    .swiper-button-prev {
                        position: absolute;
                        top: var(--swiper-navigation-top-offset, 80%);
                        width: calc(var(--swiper-navigation-size)/ 44 * 27);
                        height: var(--swiper-navigation-size);
                        margin-top: calc(0px - (var(--swiper-navigation-size)/ 2));
                        z-index: 10;
                        cursor: pointer;
                        display: flex;
                        align-items: center;
                        justify-content: center;
                        color: var(--swiper-navigation-color, var(--swiper-theme-color));
                        transition: all .3s ease-in-out;
                    }


                    .swiper-button-next,
                    .swiper-button-prev {
                        border: 1px solid;
                        border-radius: 50%;
                        width: 90px;
                        height: 90px;
                        color: #FFF !important;
                    }

                    .swiper-button-next::after,
                    .swiper-rtl .swiper-button-prev::after {
                        content: none !important;
                    }

                    .swiper-button-prev::after,
                    .swiper-rtl .swiper-button-next::after {
                        content: none !important;
                    }
                }

                @media screen and (max-width:600px) {
                    .swiper-slide {
                        width: 100%;
                    }

                    .swiper-button-prev::after,
                    .swiper-rtl .swiper-button-next::after {
                        left: 18px !important;
                    }

                    .swiper-button-prev,
                    .swiper-rtl .swiper-button-next {
                        left: var(--swiper-navigation-sides-offset, 4px);
                        right: auto;
                    }

                    .swiper-button-next,
                    .swiper-button-prev {
                        padding: 21px !important;
                    }

                    .swiper-button-next::after,
                    .swiper-rtl .swiper-button-prev::after {
                        right: 18px;
                    }

                    .swiper-button-next,
                    .swiper-rtl .swiper-button-prev {
                        right: var(--swiper-navigation-sides-offset, 2px);
                        left: auto;
                    }

                    .gallery-section .scroll-to-gallery {
                        left: 29%;
                        bottom: 5%;
                    }
                }
            </style>
            <section class="gallery-section">
                <div class="gallery-wrapper singlePropertySwiper2">
                    <div class="swiper-wrapper">
                        <?php
                        $images = get_field('gallery');
                        $size = 'very_large';
                        if ($images) : ?>
                            <?php foreach ($images as $image) : ?>
                                <div class="swiper-slide">
                                    <?php echo wp_get_attachment_image($image['id'], $size, false, array('loading' => 'lazy')); ?> </div>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </div>
                    <div class="swiper-button-prev">PREVIOUS</div>
                    <div class="swiper-button-next">NEXT</div>
                </div>
            </section>
        </div>

        <div class="hero-slider-content">
            <div class="content-wrap container">
                <h1 class="title extra-large white"><?php the_title(); ?></h1>
                <p class="text white"><?php the_field('intro_text', false, false); ?></p>
                <a href="#gallery" class="button border border-white circle-left flex center">
                    <span class="circle-left"></span>
                    View Gallery
                </a>
            </div>
        </div>

    </section>


    <section class="welcome-section paddings container bg-color">
        <div class="content-top">
            <h2 class="title large main-color margin-bottom-small"><?php the_field('welcome_title'); ?></h2>
            <p class="text main-color"><?php the_field('welcome_text'); ?></p>
        </div>

        <div class="content-bottom container flex">
            <?php if (get_field('hard_facts_repeater')) : ?>
                <?php while (the_repeater_field('hard_facts_repeater')) : ?>
                    <div class="single-item show-on-scroll slide-right" style="transition-delay: 0.1s;">
                        <?php
                        $image = get_sub_field('icon');
                        $size = 'icon';
                        if ($image) : ?>
                            <?php echo wp_get_attachment_image($image['id'], $size); ?>
                        <?php endif; ?>
                        <div class="texts-wrap">
                            <p class="text medium-large semi-bold main-color show-on-scroll slide-down" style="transition-delay: 0.15s;"><?php the_sub_field('text'); ?></p>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </section>


    <section class="after-intro-section paddings">
        <div class="container flex">
            <div class="content-left show-on-scroll slide-right" style="transition-delay: 0.2s;">
                <?php
                $image = get_field('about_image');
                if (!empty($image)) : ?>
                    <img src="<?php echo esc_url($image['sizes']['large']); ?>" loading="lazy" alt="<?php echo esc_attr($image['alt']); ?>" />
                <?php endif; ?>
            </div>
            <div class="content-right show-on-scroll slide-right" style="transition-delay: 0.3s;">
                <div class="content-wrap">
                    <h2 class="title large main-color margin-bottom"><?php the_field('about_title'); ?></h2>
                    <div class="text"><?php the_field('about_text'); ?></div>
                </div>
            </div>
        </div>
    </section>

    <section class="amenities-section container">
        <div class="content-top show-on-scroll slide-left" style=" transition-delay: 0.1s;">
            <h2 class="title extra-large white"><?php the_field('facilities_title'); ?></h2>
            <p class="text margin-bottom white"><?php the_field('facilities_text'); ?></p>
        </div>

        <div class="content-bottom">
            <div class="facilities-repeater-1">
                <?php if (get_field('facilities_repeater_1')) : ?>
                    <?php while (the_repeater_field('facilities_repeater_1')) : ?>
                        <div class="single-item show-on-scroll slide-right" style="transition-delay: 0.1s;">
                            <div class="texts-wrap">
                                <p class="text small show-on-scroll slide-down" style="transition-delay: 0.15s;"><?php the_sub_field('text'); ?></p>
                            </div>
                            <?php $image = get_sub_field('image');
                            if (!empty($image)) : ?>
                                <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                            <?php endif; ?>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
            <div class="facilities-repeater-2">
                <?php if (get_field('facilities_repeater_2')) : ?>
                    <?php while (the_repeater_field('facilities_repeater_2')) : ?>
                        <div class="single-item show-on-scroll slide-right" style="transition-delay: 0.1s;">
                            <div class="texts-wrap">
                                <p class="title uppercase show-on-scroll slide-down" style="transition-delay: 0.15s;"><?php the_sub_field('title'); ?></p>
                                <p class="text medium show-on-scroll slide-down" style="transition-delay: 0.20s;"><?php the_sub_field('text'); ?></p>
                            </div>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </section>

    <div id="gallery" class="section-gallery">
        <div class="container full">
            <?php $images = get_field('gallery'); ?>
            <?php if (!empty($images)) : ?>
                <!-- Display the first image as full-width -->
                <div class="gallery-hero" style="background-image: url('<?php echo esc_url($images[0]['url']); ?>');">

                    <!-- Button to trigger the Fancybox gallery -->
                    <div class="gallery-wrapper">
                        <div class="title large white center margin-bottom">Gallery</div>
                        <p class="text white"><?php the_field('gallery_text'); ?></p>
                        <button class="button-circle flex center" data-fancybox-trigger="gallery">View Gallery</button>

                        <!-- Hidden Fancybox Gallery -->
                        <div style="display: none;">
                            <?php foreach ($images as $key => $image) : ?>
                                <a href="<?php echo esc_url($image['url']); ?>" class="single-gallery-image-fancy" data-fancybox="gallery">
                                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">
                                </a>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
        </div>

    </div>

    <section class="more-posts-section bg-color paddings">
        <div class="container center">
            <h3 class="title large main-color"><?php _e('More Bungalows'); ?></h3>
            <p class="text main-color">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vulputate libero et velit interdum.</p>
        </div>
        <div class="container full flex">
            <?php $i = 1; ?>
            <?php

            $args = array(
                'post_type' => 'bungalows',
                'posts_per_page' => 3,
                'post_status' => 'publish',
                'post__not_in' => array(get_the_ID()),
                'orderby' => 'rand',
            );

            $query = new WP_Query($args);

            if ($query->have_posts()) {
                while ($query->have_posts()) {
                    $query->the_post(); ?>

                    <a href="<?php the_permalink(); ?>" class="post-item<?php echo $i % 2 === 0 ? ' reverse' : ''; ?> show-on-scroll slide-right" style="transition-delay: 0.2s;">
                        <div class="image-wrap">
                            <?php $image = get_field('about_image');
                            if (!empty($image)) : ?>
                                <img src="<?php echo esc_url($image['sizes']['very_large']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                            <?php endif; ?>
                            <p class="title medium uppercase white center"><?php the_title(''); ?></p>
                        </div>
                    </a>

            <?php   }
                wp_reset_postdata(); // Restore global post data
            } else {
                // No posts found
            }
            ?>


        </div>

        <a class="button-circle flex center" href="<?php the_field('bungalows_link', 'options'); ?>" target="_blank">View All</a>

    </section>

    </div>


</main>



<?php get_footer(); ?>


<script type="text/javascript">
    // copy link functionality
    function copyLink() {
        var copiedText = document.getElementById("copied-text");
        var pageUrl = window.location.href;

        navigator.clipboard.writeText(pageUrl)
            .then(function() {
                copiedText.style.display = "block";
                setTimeout(function() {
                    copiedText.style.display = "none";
                }, 2000);
            })
            .catch(function() {
                console.error("Unable to copy text");
            });
    }
</script>